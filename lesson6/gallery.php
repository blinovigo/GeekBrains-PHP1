<?php
    include "config.php";

    $sql = "SELECT * FROM gallery";
    $res = mysqli_query($connect, $sql);
?>
    <html>
    <head>
    </head>
    <body>
        <div style="display: flex; flex-wrap: wrap">
            <?php while($data = mysqli_fetch_assoc($res)):?>
                <a style="display:block" href="review.php?id=<?=$data['id']?>">
                    <img style="width: 300px" src="images/<?=$data['small_path']?>" alt="image_<?=$data['id']?>">
                </a>
            <?php endwhile;?>
        </div>
    </body>
    </html>

