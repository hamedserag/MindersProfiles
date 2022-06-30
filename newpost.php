<?php
if ($_POST) {
    $post = $_POST['post'];
    $query =  mysqli_query($conn, "INSERT INTO `posts`( `uid`, `details`) VALUES (" . $_SESSION['uid'] . ",'" . $post . "')");

    echo "<script> alert('Posted Successfuly.'); </script>";
}
?>

<div class="row mb-3">
    <form class="form-horizontal" method="post" action="">
        <div class="form-group row">
            <div class="col-sm-1">
                <img class="postPic" src="media/<?php echo ($_SESSION['pic']) ?>" alt="Profile Picture of <?php echo ($user['name']) ?>">
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="post" placeholder="What is on your mind ? <?php ?> " name="post">
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </div>
    </form>
</div>