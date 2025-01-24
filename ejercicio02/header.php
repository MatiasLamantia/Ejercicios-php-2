<header>
    esto es el header
    <img src="img/logo.png" class="logo"></img>
    <nav>
        <ul class="secciones">
            <?php
                foreach($secciones as $seccion){
                   echo '<li><a href="index.php?ver='. urlencode($seccion['link']) . '">' . $seccion['seccion'] .'</a></li>';
                }
            ?>
        </ul>   
    </nav>
</header>