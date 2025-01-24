<form action="save.php" method="POST">
    <div>
        Señala las asignaturas que te resulten más complicadas:<BR><BR>

        <label><input type="checkbox" name="asgs[]" value="LCL"> Lengua Castellana y Literatura. </label><BR>
        <label><input type="checkbox" name="asgs[]" value="M"> Matemáticas. </label><BR>
        <?php
        if($_POST["curso"] != "2ESO"){
            echo '<label><input type="checkbox" name="asgs[]" value="BG"> Biología y Geología.</label><BR>';
        }
             
        ?>
         <!-- Esta opción no deberá mostrarse si el usuario selecciono 2ESO -->
        <label><input type="checkbox" name="asgs[]" value="GH"> Geografía e Historia. </label><BR>
        <label><input type="checkbox" name="asgs[]" value="FQ"> Física y Química. </label><BR>
        <label><input type="checkbox" name="asgs[]" value="I"> Inglés. </label><BR>
        </div>

        <br>    
        <label for="tiempolibre">Selecciona aquellas opciones a las que que dedicas tu tiempo libre (3 horas o más a la
            semana):</label><BR>
        <select id="tiempolibre" name="tiempolibre[]" multiple size="8">
            <option value="deportes">Práctico deportes</option>
            <option value="musica">Toco instrumentos musicales</option>
            <option value="danza">Práctico danza</option>
            <option value="art">Práctico actividades artísticas: teatro, pintura, etc.</option>
            <option value="vjuegos">Juego a video juegos </option>
            <option value="television">Veo la televisión</option>
            <option value="dom">Realizo tareas domésticas: limpiar, cocinar, etc. </option>
            <option value="lectura">Leo libros, cómics, revistas, etc. (sin contar los libros del instituto)</option>
        </select><BR>
        <BR>

        <input type="hidden" name="sexo" value="<?php echo htmlspecialchars($_POST["sexo"]); ?>"/>
        <input type="hidden" name="curso" value="<?php echo htmlspecialchars($_POST["curso"]);  ?>"/>
        <input type="hidden" name="rama" value="
        <?php 
        if(isset($_POST["rama"])){
            $_POST["rama"] = "FP";
            echo htmlspecialchars($_POST["rama"]);
        }else{
            echo htmlspecialchars($_POST["rama"]);
        }?>"/>
        <input type="hidden" name="codigo_postal" value="<?php echo htmlspecialchars($_POST["codigo_postal"]);  ?>"/>
        <input type="submit" value="Terminar">
</form>