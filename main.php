<?php include('includes/config.php') ?>
<?php 
    //query for all restaurants
    $sql = "SELECT id, name, type, image FROM restaurant";

    //make query and get results
    $result = mysqli_query($conn, $sql);

    //fetch resulting rows as an array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
   // mysqli_free_result($result);

    //close connection
    //mysqli_close($conn);
?>



<?php include('includes/header.php') ?>

<?php
    if (isset($_POST['submit'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
    
        $sqls = "SELECT id, name, type FROM restaurant WHERE name LIKE '%$search%' OR type LIKE '%$search%' ";
        $res = mysqli_query($conn, $sqls);

        $items = [];
        while($rowed =  mysqli_fetch_assoc($res)){
            array_push($items, $rowed);
        }
    
        //print_r($items);  
        echo '<div class="container">
                <?php foreach($items as $item): ?>
                    <div class="collection">
                        <a href="restaurant.php?id=<?php echo $row["id"] ?>" class="collection-item"> 
                        <div class="title"> <?php echo htmlspecialchars($item["name"])?></div>
                        <div class="sub-title"> <?php echo htmlspecialchars($item["type"])?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
               </div>  ';
    }
    
?>

    
    <form action="main.php" method="post">
        <div class="wrapper">
            <div class="search_box">
                <div class="dropdown">
                    <div class="default_option">All</div>  
                    <ul name="column">
                        <li>All</li>
                        <li>Search by Name</li>
                        <li>Search by Type</li>
                    </ul>
                </div>
                <div class="search_field">
                    <input type="text" name="search" class="input" placeholder="Search">
                    <input type="submit" name="submit" id="sub" class="btn black white-text">
                </div>
            </div>
        </div>
    </form>

    <!--<div class="container">
      <?php foreach($items as $item): ?>
        <div class="collection">
            <a href="restaurant.php?id=<?php echo $row['id'] ?>" class="collection-item">
            <div class="title"> <?php echo htmlspecialchars($item['name'])?></div>
            <div class="sub-title"> <?php echo htmlspecialchars($item['type'])?></div>
            </a>
        </div>
      <?php endforeach; ?>  
    </div> -->


    <div class="container center">
        <h4 id="cap">Popular Restaurants in Your Location</h4>
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
            <div class="img"><img src="imgs/one.jpg" alt=""></div>
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
                        <div class="img"><img src="./imgs/<?php echo $row['image'] ?>" alt=""></div>
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