
<?php
include 'config.php';
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt === false) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password']; // Fetching hashed password from database
        if (password_verify($password, $hashed_password)) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Invalid password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid email. Please try again.');</script>";
    }
}
?>




<style>
*{
    padding: 0;
    margin:0;
}
.btn{
    width: 80%;
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
</style>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="image/1.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Please login to your account</h4>
                </div>

                <form method="post" action="">

                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder="Email address" required />
                    <label class="form-label" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control"
                    placeholder="Your password" required />
                    <label class="form-label" >Password</label>
                  </div>

                  <div class="text-center mb-3">
                    <button class="btn btn-primary  btn-block fa-lg gradient-custom-2 mb-4 p-3" type="submit">Log
                      in</button>
                  </div>
                </form>
                <form  action="signup_u.php">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="submit" class="btn btn-outline-danger">Create new</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a bloging site</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>