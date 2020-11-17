<?php
include "config.php";

$sql = "SELECT big_path FROM gallery WHERE id = $_GET[id]";
$res = mysqli_query($connect, $sql);
?>

<html>
<head></head>
<body>
<div class="wrap">
    <?php while($data = mysqli_fetch_assoc($res)):?>
        <img src="images/<?=$data['big_path']?>" alt="image_<?=$data['id']?>">
    <?php endwhile;?>
</div>
</body>
</html>