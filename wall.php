<?php
$query =  mysqli_query($conn, "SELECT * FROM `posts` ORDER BY `id` DESC ");

while ($row = mysqli_fetch_array($query)) {
    drawPost($conn, $row['uid'], $row['details'], $row['date']);
}


function drawPost($conn, $uid, $postDetails, $postDate)
{
    $userQuery = mysqli_query($conn, "SELECT * FROM `users` WHERE id='" . $uid . "' ");
    $user = mysqli_fetch_array($userQuery);
?>
    <div class="row post mb-4 p-3">

        <div class="col-1 px-0">
            <img class="postPic px-2" src="media/<?php echo ($user['picture']) ?>" alt="Profile Picture of <?php echo ($user['name']) ?>">
        </div>

        <div class="col-4">
            <p class="postName m-0"> <?php echo ($user['name']) ?> </p>
            <p class="pdate m-0"> <?php echo ($postDate) ?> </p>
        </div>
        <p class="col-12 pt-2"> <?php echo ($postDetails) ?> </p>
    </div>

<?php
}
?>

