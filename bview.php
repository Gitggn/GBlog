<?php include'header.php';
  include 'config.php';
$sql = "SELECT title, content FROM blog";
$result = $conn->query($sql);
?>

  <style>
    /* Adjust the height and background properties for the image */
   nav {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}
    .background-image {
      width:100%;
      /* Adjust height as needed */
      background-image: url('image/2.jpg'); /* Replace with your image path */
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .wide-hr {
    width: 100%;
    height: 10px; /* Adjust the width as needed */
    margin: auto; /* Center the HR tag */
    
  }
    /* Center text vertically and horizontally */
    .center-text {
      
      text-align: center;
    }
    /* Adjust the position of the text area */
   
  </style>


<title>Create a Blog Post</title>
 
 <nav class="navbar navbar-expand-lg navbar-light text-white">
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item">
                 <img src="image/1.png" style="width:50px;" alt="">
             </li>
             <li class="nav-item  ">
                 <h5> <a class="nav-link text-white" href="index.php">Home</a></h5>
             </li>
             <li class="nav-item ">
                 <h5><a class="nav-link text-white" href="bwrite.php">Write</a></h5>
             </li>
             <li class="nav-item ">
                 <h5> <a class="nav-link text-white" href="bview.php">View</a></h5>
             </li>
 
         </ul>
     </div>
     <div class=" d-flex justify-content-center align-items-center">
         <h3>The Blog and creative </h3>
     </div>
 </nav>
<section class="background-image">
<div class="container">
  <div class="row">
    <div class="col my-4">
        <!-- Text at the center above the image -->

        <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    $count=1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<h2 class='text-white'>Post" .$count. "</h2>";
                        echo "<hr class='wide-hr bg-white'>";
                        echo "<h2 class='text-white'>Title : " . $row["title"] . "</h2>";
                        echo "<p class='text-white'>Content: " . $row["content"] . "</p>";
                        echo "<hr class='wide-hr bg-white'>";
                        $count++;
                        echo' <form action="" class="form-control p-4 m-4" method="post">
                        <label for="" >Comment</label>
                        <input type="text" class="form-control">
                    </form>
                    <form action="" class="form-control p-4 m-4" method="post">
                        <label for="" >Reply</label>
                        <input type="text" class="form-control">
                    </form>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
       
    </div>
  </div>
</div>
</section>
<?php
include 'footer.php';
?>