<?php include('includes/config.php') ?>
<?php 
    //query for all restaurants
    $sql = "SELECT id, name, type FROM restaurant";

    //make query and get results
    $result = mysqli_query($conn, $sql);

    //fetch resulting rows as an array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);
?>

<?php include('includes/header.php') ?>

<?php
$search = $_POST['search'];
$servername = "localhost";
$username = "zee";
$password = "zee123";
$db = "restaurant";

$conn = new mysqli(localhost, zee, zee123, restaurant);
if($conn->connect_error){
    die("Connection failed:". $conn->connection_error);
}
$sql = "select * from restaurants where name like '%$search%'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result ->fetch_assoc() ){
        echo $row["name"]."";
    }
}else{
    echo " 0 records";
}
$conn -> close();
?>



    <div class="container center">
        <div class="input-field">
                            <form action="main.php" method="POST">
                    Search <input name="search" placeholder="Search..." type="text" required>
                    <i id="icon" class="material-icons small-icon inline black-text">search</i>
                    <input type="submit">
                </form>
        </div>
    </div>

    <div class="container center">
        <h4>Popular Restaurants in Your Location</h4>
    </div>
    <div class="slider owl-carousel">
        <div class="card col s12 m6 l3">
            <div class="img"><img src="imgs/pexels-creative-vix-370984.jpg" alt=""></div>
            <div class="content">
                <div class="title">Ocean's Basket</div>
                <div class="sub-title">Seafood</div>
                <p>Open Hours: 9am-9pm</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn black-text">More Info</button>
            </div>
        </div>
        <div class="card col s12 m6 l3">
            <div class="img"><img src="imgs/pexels-creative-vix-370984.jpg" alt=""></div>
            <div class="content">
                <div class="title">Wok Yok</div>
                <div class="sub-title">Chinese</div>
                <p>Open Hours: 9am-10pm</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn">Read more</button>
            </div>
        </div>
        <div class="card col s12 m6 l3">
            <div class="img"><img src="imgs/land.jpg" alt=""></div>
            <div class="content">
                <div class="title">The Place</div>
                <div class="sub-title">General</div>
                <p>Open Hours: 9am-10am</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn black-text">More Info</button>
            </div>
        </div>
        <div class="card s12 m6 l3">
            <div class="img"><img src="imgs/pexels-creative-vix-370984.jpg" alt=""></div>
            <div class="content">
                <div class="title">Gustavo</div>
                <div class="sub-title">Italian</div>
                <p>Open Hours: 9am-10pm</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn black-text">More Info</button>
            </div>
        </div>
        <div class="card">
            <div class="img"><img src="imgs/pexels-asad-photo-maldives-1449775.jpg" alt=""></div>
            <div class="content">
                <div class="title">Dominos</div>
                <div class="sub-title">Pizza</div>
                <p>Open Hours: 10am-7pm</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn black-text">More Info</button>
            </div>
        </div>
        <div class="card">
            <div class="img"><img src="imgs/nick-karvounis-Ciqxn7FE4vE-unsplash.jpg" alt=""></div>
            <div class="content">
                <div class="title">Chicken Republic</div>
                <div class="sub-title">Chicken</div>
                <p>Open Hours: 9am-6pm</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
                <button class="btn black-text">More Info</button>
            </div>
        </div>
    </div> 

    <section class="section" id="rest">
        <h2 class="center">All Restaurants</h2>
            <div class="row">
                <?php foreach ($rows as $row): ?>
                    <div class="card col s12 m6 l3 cont">
                        <div class="img"><img src="imgs/pexels-creative-vix-370984.jpg" alt=""></div>
                        <div class="content">
                            <div class="title"><?php echo htmlspecialchars($row['name']); ?></div>
                            <div class="sub-title"><?php echo htmlspecialchars($row['type']); ?></div>
                            <p>Open Hours:9am-8pm</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-half checked"></span>
                        </div>
                        <div class="card-action right-align">
                            <a href="restaurant.php?id=<?php echo $row['id'] ?>">More Info</a>
                        </div>
                    </div>
                <?php endforeach; ?>        
            </div>
    </section>
    <div class="container"> <a href="#" id="loadMore">Load More</a></div>
   

    <?php include('includes/footer.php') ?>