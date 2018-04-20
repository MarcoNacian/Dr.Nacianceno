<?php include('header.php'); ?>
    <main>
    <form>
        <label for="Nombre">Nombre:</label>
          <br>
        <input type="text" name="Nombre"  required maxlength="20">
          <br> <br>
        <label for="Fecha">Fecha:</label>
          <br>
        <input type="date" name="Fecha">
          <br> <br>
        <label for="Email">Email:</label>
          <br>
        <input type="email" name="correo">
          <br><br>
        <label for="Telefono">Telefono:</label>
          <br>
        <input type="tel" name="telefono">
    
        <br>
    
        <input type="radio" name="genero" value="hombre" id="hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" name="genero" value="mujer" id="mujer">
        <label for="mujer">Mujer</label>
    
        <br>
    
        <input type="submit" value="Enviar" name="Enviar">
    
        <br />
    
    </form>

    </main>
    
    <?php include('footer.php'); ?>


