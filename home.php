<!DOCTYPE html>

<?php
session_start();
include "includes/config.php";
?>

<?php include "includes/headerOutsideDir.php";  ?>

<html>


<div class="container">
    <div class="row mt-5">
        <img class="profilePic col-2" src="media/<?php echo ($_SESSION['pic']) ?>" alt="Profile Picture of <?php echo ($_SESSION['name']) ?>">

        <div class="col-6">
            <p class="pname"> Welcome <?php echo ($_SESSION['name']) ?> </p>
            <p class="pbio pt-3"> <?php echo ($_SESSION['bio']) ?> </p>
        </div>

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <?php include "newpost.php";  ?>
        </div>
        <div class="col-8">
            <p class="display-5">News Feed</p>
        </div>
        <div class="col-8">
            <?php include "wall.php";  ?>
        </div>
    </div>
</div>

</html>