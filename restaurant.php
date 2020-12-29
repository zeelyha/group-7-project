<?php
    session_start();
    require_once('includes/config.php');
    include('includes/functions.php');
    $response = '';
    if(!empty($_POST['review']) &&$_POST['review'] != ''){
        $review = $_POST['review'];
        if(!isset($_SESSION['user'])){
            $_SESSION['redirect'] = $_SERVER['PHP_SELF'];
            header('location: login.php');
        }
        else{
            $response = addReview($_SESSION['user']['user_id'], $_GET['id'], $review);
        }
        
    } else{
        $response = 'Can not submit an empty review.';
    }
    
    include_once('./includes/header.php');
    
?>

<?php 
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
    
        //make sql call
        $sql = "SELECT review, reviewer, review_date FROM reviews WHERE restaurant_id= $id";
    
        //get query results
        $result = mysqli_query($conn, $sql);
    
        //get result in array format
        $reviews = [];
        while($row =  mysqli_fetch_assoc($result)){
            array_push($reviews, $row);
        }
        
        //print_r($reviews);
    
    }

    //query for all restaurants
    $sqls = 'SELECT id, name, location, type, image FROM restaurant';

    //make query and get results
    $results = mysqli_query($conn, $sqls);

    //fetch resulting rows as an array
    $restaurants = mysqli_fetch_all($results, MYSQLI_ASSOC);

    $news = (array_slice($restaurants,0,5));

    //mysqli_free_result($result);
    //mysqli_close($conn);
?>

<section id="banner">
    <img src="./imgs/rest_image.jpg" alt="banner" id="banner_image" />
    
</section>

<div id="desc">EatAt is a review platform that create or reinforce a communal spirit and influence the consumer's decision. EatAt helps people to seek external information on sources when they have not experienced it themselves. </div>

<!-- <div class="container" id="info">
    <div class="row">
        <div class="col-md-4">
            <div>
                <i class="far fa-clock"></i>
                <p>9am - 8pm</p>
                <span>Open Hours</span>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <?php //echo file_get_contents("./imgs/tray.svg"); ?>
                <p>101</p>
                <span>Meal Variety</span>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <?php //echo file_get_contents("./imgs/chef-hat.svg"); ?>
                <p>10</p>
                <span>Amazing Chefs</span>
            </div>
        </div>
    </div>
</div> -->
<div id="map" class="container">
    
</div>
<section class="container div-sect">
    <div class="container" id="reviews">
        <header><h5>Reviews</h5></header>
        <?php
            foreach($reviews as $review){
        ?>
            <div class="review">
                <p><?php echo $review['review']; ?></p>
                <p class="date_name"><?php echo $review['reviewer'] ?> <?php echo $review['review_date'] ?> ago</p>
            </div>
        <?php
            }
        ?>

        <div>
            <h6>Leave a review</h6>
            <div><?php echo $response; ?></div>
            <form action="restaurant.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <textarea class="form-control" id="reviewArea" rows="4" name='review'></textarea>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <aside id="others">
        <header><h5>Other Restaurants</h5></header>
        <?php
            foreach($news as $new){
        ?>
            <div class="res">
                <img src="./imgs/<?php echo $new['image'] ?>" />
                <div>
                    <a href="restaurant.php?id=<?php echo $new['id'] ?>"><?php echo $new['name']; ?></a>
                    <span class="addr"><?php echo $new['location'] ?></span>
                    <!--<span class="open">Open <?php echo $restaurant['open'] ?></span>-->
                </div>
            </div>
        <?php
            }
        ?>
        
    </aside>
</section>


<?php include_once('./includes/footer.php'); ?>