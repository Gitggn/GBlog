<?php
include 'header.php';
include 'config.php';


if (isset($_SESSION['email'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Form submission
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Insert into the 'blog' table
        $sql = "INSERT INTO blog (title, content) VALUES ('$title', '$content')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Data successfully inserted, redirect to bview.php
            header("Location: bview.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn); // Display error if query fails
        }
    } else {
        echo "Invalid request"; // Handling if it's not a POST request
    }

    echo '
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
            <h3>Share Your Valuable Experiences and Your Ideas!!</h3>
        </div>
    </nav>
    
    <div class="container  " style="width:100%">
        <div class="row">
            <div class="wblog ">
                <form id="blogForm" class="form-group my-2"  method="post" action="">
    
                    <label>
                        <strong>
                            <h2>Title</h2>
                        </strong></label>
                    <input type="text" name="title" class="form-control ml-4" placeholder="Your Title " required>
    
                    <label>
                        <strong>
                            <h2>Your Content</h2>
                        </strong></label>
                        <div class="text-area">
              <textarea class="form-control" rows="38%"  name="content"placeholder="Enter your text here"></textarea>
            </div>
                    <input class="btn text-white my-2 btn-hover-effect" type="submit" value="Publish Blog" required>
                </form>
    
            </div>
    
        </div>
    </div>
    ';

    include 'footer.php';
} else {
    // User is not logged in, redirect to login page
    header("Location: login_u.php");
    exit();
}
?>


<style>
        nav,
        .btn {
            /* fallback for old browsers */
            background: #fccb90;
    
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }
    
        form {
            width: 80%;
            margin: auto;
        }
    
        .btn-hover-effect:hover {
            transform: scale(1.1);
        }
</style>
    
