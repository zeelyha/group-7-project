<?php
    include_once('./includes/header.php');
    require_once('./includes/dummy_data.php');
?>

<section id="banner">
    <img src="./imgs/rest_image.jpg" alt="banner" id="banner_image" />
    
</section>

<div id="desc">EatAt is a review platform that create a communal spirit and influence the consumer's decision. EatAt helps people to seek external information on sources when they have not experienced it themselves. </div>

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
            <form action="#" method="POST">
                <textarea class="form-control" id="reviewArea" rows="4"></textarea>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <aside id="others">
        <header><h5>Other Restaurants</h5></header>
        <?php
            foreach($restaurants as $restaurant){
        ?>
            <div class="res">
                <img src="./imgs/<?php echo $restaurant['image'] ?>" />
                <div>
                    <p><?php echo $restaurant['name']; ?></p>
                    <span class="addr"><?php echo $restaurant['address'] ?></span>
                    <span class="open">Open <?php echo $restaurant['open'] ?></span>
                </div>
            </div>
        <?php
            }
        ?>
    </aside>
</section>

<?php include_once('./includes/footer.php'); ?>