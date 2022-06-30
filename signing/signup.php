<!DOCTYPE html>
<?php include "../includes/config.php";  ?>
<?php include "../includes/header.php";  ?>
<html>

<?php

if ($_POST) {

    $mail = $_POST['mail'];
    $password = $_POST['pass'];
    $passwordConfiermed = $_POST['passConfirmed'];
    $name = $_POST['name'];
    $picture = "default.jpg";

    $hasError = false;
    // checks if password match confirmed pass
    if ($password != $passwordConfiermed) {
        $hasError = true;
        echo "<script> alert('Passwords not matching'); </script>";
    }

    // checks if user exist
    $query =  mysqli_query($conn, "SELECT * FROM `users` where mail = '" . $email . "' and pass = '" . $password . "'");
    if (mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);
        echo "<script> alert('mail or name already exist'); </script>";
        $hasError = true;
    }


    if (!$hasError) {
        $query =  mysqli_query($conn, "INSERT INTO `users`(`name`, `pass`, `mail`, `picture`) VALUES ('" . $name . "','" . $password . "','" . $mail . "','" . $picture . "')");

        echo "<script> alert('Registered Succesfully.'); </script>";
        header('Location: signin.php');
    }
}
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form class="form-horizontal" method="post" action="">
                <div class="form-group mt-2">
                    <label class="control-label col-sm-2" for="email">Name:</label>

                    <div class="col-sm-12">
                        <input type="name" class="form-control" id="email" placeholder="Enter name" name="name">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="control-label col-sm-2" for="email">Password:</label>

                    <div class="col-sm-12">
                        <input type="pass" class="form-control" id="email" placeholder="Enter password" name="pass">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="control-label col-sm-2" for="email">Confirm:</label>

                    <div class="col-sm-12">
                        <input type="pass" class="form-control" id="email" placeholder="Enter password to confirm" name="passConfirmed">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label class="control-label col-sm-2" for="email">Email:</label>

                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="mail">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="col-sm-offset-2 col-sm-12">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <p>Already have an account ? <a href="signin.php">sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            
        </div>
    </div>
</div>

</html>
<?php include "../includes/footer.php";  ?>