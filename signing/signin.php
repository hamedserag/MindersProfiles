<!DOCTYPE html>
<?php include "../includes/config.php";  ?>
<?php include "../includes/header.php";  ?>
<html>

<?php

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query =  mysqli_query($conn, "SELECT * FROM `users` where mail = '" . $email . "' and pass = '" . $password . "'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['bio'] = $row['bio'];
        $_SESSION['pic'] = $row['picture'];
        $_SESSION['uid'] = $row['id'];
        header('Location: ../home.php');
    } else {
        echo "<script> alert('Invalid Email or Password.'); </script>";
    }
}
?>


<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>Sign In</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form class="form-horizontal " method="post" action="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>

                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="col-sm-offset-2 col-sm-12">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <p>Need an account ? <a href="signup.php">Register</a></p>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

</html>
<?php include "../includes/footer.php";  ?>