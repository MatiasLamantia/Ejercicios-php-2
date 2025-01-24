<footer>
    Esto es el footers
    <p>
    <?php
        $filename = "index.php";
        if(file_exists($filename)){
            echo date("F d Y H:i:s.", filemtime($filename));

        }


    ?>
    </p>
</footer>