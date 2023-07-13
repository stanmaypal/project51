<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></a>
</head>
<body id="bd">
  
  <?php 
  include "inc/header.php";
  ?>

  <div class="container my-2">
    <div class="row">

    <div  class="col-sm-8 col-lg-8">

<!-- Retrieve data from the database using PHP -->
<?php
// Assuming you have already established a database connection
include "database.php";
// Write a query to fetch the slider data
$query = "SELECT * FROM slider";
$result = mysqli_query($conn, $query);

// Fetch the data into an array
$slides = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Create the HTML structure for the slider -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($slides as $index => $slide): ?>
      <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
        <img src="admin/img/<?php echo $slide['image']; ?>" class="d-block w-100" alt="Slide Image">
        <div class="carousel-caption">
          <h5><?php echo $slide['head']; ?></h5>
          <p><?php echo $slide['content']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
    <div  class="col-sm-4 col-lg-4">

    <div>
        <h1 class="text-center ntc">Notice</h1>
      </div>
      <marquee direction="up" height="200px">
      <div class="marquee-container" >
    <div class="marquee-content">
      <ul>
        <?php
        include "database.php"; // Add your database connection file

        $sql = "SELECT * FROM natice ORDER BY ntc_name DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['ntc_name'] ." ". $row['ntc_date'] . "</li>";
          ///  echo "<li>" . $row['ntc_date'] . "</li>";

          }
        } else {
          echo "<li>No data found.</li>";
        }

        mysqli_close($conn);
        ?>
      </ul>
    </div>
  </div>
      </marquee>


    </div>
      
    </div>
  </div>
  
</body>
</html>