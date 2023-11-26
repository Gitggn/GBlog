<?php
include 'header.php';
?>
<style>
    .background-image {
        width: 100%;
        height: 100vh;
        /* Adjust height as needed */
        background-image: url('image/3.jpg');
        /* Replace with your image path */
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .center {
        padding-top: 10%;
        font-family: Brush Script MT;
        /* Replace 'Roboto' with your chosen font */
        font-size: 100px;
        /* Adjust the font size as needed */
        text-align: center;
        text-shadow: 3px 3px 5px darkgoldenrod;
        font-weight: 400;
    }

    .no-bullets {
        list-style: none;
    }

    .col3 {
        padding-top: 4%;
    }

    .col2 {
        padding: 5%;
        font-weight: 300;
        font-family: Brush Script MT;
        font-size: 30px;
    }

    .para {
        text-align: center;
        font-family: Brush Script MT;
        text-shadow: 3px 3px 5px darkgoldenrod;
        font-weight: 200;
        font-size: 20px;
    }

    nav,
    .row3 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    .btn {
        box-shadow: 2px;
    }
</style>

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
            <li class="nav-item ">
                <h5> <a class="nav-link text-white" href="footer.php">Contact</a></h5>
            </li>
        </ul>
    </div>
    <div class="d-flex align-items-center">
        <strong><a class="nav-link text-white mx-2" href="footer.php">About us</a></strong>
        <i class="fa-solid fa-user-tie mx-2"></i>
        <a href="login_u.php"><input type="submit" class=" mx-2 btn text-white border border-2" value="Login"></a>

    </div>
</nav>

<section class="row1 background-image" style="height: 500px;">
    <h1 class="center text-white ">Welcome to Content Writers' Oasis</h1>
    <p class=" para text-white">At Content Writers' Oasis, we nurture the art of content creation, guiding aspiring
        writers and seasoned professionals alike on their journey to becoming proficient content creators. </p>
</section>
<section class="row2" style="height: 500px;">
    <div class="container">
        <div class="row">
            <div class="col1 col-md-4 my-4 p-4">
                <h1 class="center">How to Get Started ?</h1>
            </div>
            <div class="col2 col-md-5">
                <ul class="no-bullets">
                    <li> Define Your Niche and Audience</li>
                    <li> Set Up Your Blogging Platform</li>
                    <li> Design and Customize Your Blog</li>
                    <li> Plan Your Content Strategy</li>
                    <li> Write Engaging Content</li>
                    <li> Optimize for SEO</li>
                    <li> Promote Your Blog</li>
                    <li> Engage with Your Audience</li>
                    <li> Analyze and Improve</li>
                </ul>
            </div>
            <div class="col3 col-md-3 "> <img src="image/4.jpg" style="height:400px; width:100%" alt=""></div>

        </div>
    </div>
</section>
<section class="row3" style="height: 500px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="image/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="image/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="image/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="row4" style="height: 500px;">
<div class="container">
    <div class="row">
        <img src="image/6.png" style="height:400px; width:100%" alt="">
    </div>
</div>

</section>



<?php
include 'footer.php';
?>