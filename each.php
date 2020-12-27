<?php include('includes/config.php'); 
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql call
    $sql = "SELECT * FROM restaurant WHERE id= $id";

    //get query results
    $result = mysqli_query($conn, $sql);

    //get result in array format
    $place = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
  }
?>  
<?php include('includes/header.php') ?>

  <?php if($place): ?>
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="imgs/land.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3><?php echo htmlspecialchars($place['name']); ?></h3>
            <h5 class="light grey-text text-lighten-3"><?php echo htmlspecialchars($place['type']); ?></h5>
          </div>
        </li>
        <li>
          <img src=""> <!-- random image -->
          <div class="caption left-align">
            <h3></h3>
            <h5 class="light grey-text text-lighten-3"></h5>
          </div>
        </li>
        <li>
          <img src=""> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3"></h5>
          </div>
        </li>
      </ul>
    </div>

      <!-- services / tabs -->
    <section class="section container" id="services">
      <div class="row">
        <div class="col s12 l4">
          <h3 class="indigo-text text-darken-4">Overview</h3>
          <ul class="collection">
            <li class="collection-item"><i class="material-icons black-text">restaurant_menu </i><?php echo htmlspecialchars($place['type']); ?></li>
            <li class="collection-item"><i class="material-icons">phone </i><?php echo htmlspecialchars($place['phone']); ?></li>
            <li class="collection-item"><i class="material-icons">language </i><?php echo htmlspecialchars($place['website']); ?></li>
            <li class="collection-item"><i class="material-icons">location_on </i><?php echo htmlspecialchars($place['location']); ?></li>
          </ul>
        </div>
        <div class="col s12 l6 offset-l2">
          <!-- tabs -->
          <ul class="tabs">
            <li class="tab col s6">
              <a href="#photography" class="active indigo-text text-darken-4">Menu</a>
            </li>
            <li class="tab col s6">
              <a href="#editing" class="indigo-text text-darken-4">Reviews</a>
            </li>
          </ul>
          <div id="photography" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Menu</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
          </div>
          <div id="editing" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Reviews</p>
            <ul class="collection">
              <li class="collection-item"><i class="material-icons inline">person_pin</i> A very nice place. Love the ambience.</li>
            </ul>
            
          </div>
          </div>
        </div>
      </div>
    </section>
  <?php else: ?>
    <h5>No such place exists</h5>

  <?php endif; ?>  

 <?php include('includes/footer.php') ?>