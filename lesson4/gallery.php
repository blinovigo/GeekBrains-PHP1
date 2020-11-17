<html>
    <head></head>
    <body>
        <div class="contentBox">
            <?php
                $files = scandir("images");
                for ($i = 2;$i < count($files);$i++):
            ?>
            <a href="<?="images/".$files[$i]?>" target="_blank">
                    <img width="100" src="<?="images/".$files[$i]?>" alt="Изображение № <?= ($i-2)?>">
            </a>
            <?php endfor;?>
        </div>
    </body>
</html>