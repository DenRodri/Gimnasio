<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </header>
    
    <body style="background-image: url(assets/images/reglog-bg2.png); background-repeat: no-repeat; background-size: cover;">
      <h1 id="title">Login de cuenta</h1>
      <p id="description">Ponga sus credenciales.</p>
      <form id="survey-form" action="prueba2.php" method="post">
        <label for="name" id="name-label">Nombre</label>
        <input id="name" type="text" placeholder="Ponga su nombre*" name="Cuenta" required>
        <label for="Password" id="name-label">Contraseña</label>
        <input id="name" type="password" placeholder="Ponga su contraseña*" name="Password" required>
        <button type="submit" id="submit">Subir</button>
      </form>
      
    </body>
</html>