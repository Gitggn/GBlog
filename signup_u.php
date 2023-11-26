<?php

include 'config.php';
include 'header.php';
?>


<!-- --php code to insert data-- -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate password and cpassword
    if ($_POST['password'] === $_POST['cpassword']) {
        // Passwords match, proceed to save data in the database
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $check_query = "SELECT * FROM user WHERE email='$email'";
        $check_result = $conn->query($check_query);

        if ($check_result->num_rows > 0) {
            echo "Email already exists in the database. Please use a different email.";
        } else {
            // if Email not exist
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    
        if ($conn->query($insert_query) === TRUE) {
            header("Location: login_u.php");
        } else {
            echo "Error: " .  $insert_query . "<br>" . $conn->error;
        }
      }
       
    } else {
        echo "Passwords do not match. Please try again.";
    }
}
?>

<!-- --------------------------- -->

<style>
*{
    padding: 0;
    margin:0;
}
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
.btn{
    width: 85%;
}
.container{
    width: 70%;
}
</style>



<section class="gradient-custom-2" >
    <div class="container h-50">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class=" col-7">
                <div class="card text-black my-4" style="border-radius: 25px; width: 90%;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                            <div class="text-center">
                  <img src="image/1.png"
                    style="width:100px;" alt="logo">
                  <h4 class="">Please Fill the details</h4>
                </div>

                                <form class="md-4" method="post">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="uname" class="form-control" required />
                                            <label class="form-label" >Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" class="form-control" required/>
                                            <label class="form-label" >Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" class="form-control" required />
                                            <label class="form-label" >Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="cpassword" class="form-control" required />
                                            <label class="form-label" >Repeat your password</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary  btn-block fa-lg gradient-custom-2 mb-4 p-3"
                                            >Register</button>
                                        <!-- Adjusted button color using inline style -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>