<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Saludo</title>
</head>

<body>
  <h1>Saludos para <?php echo $nombre; ?></h1>

  <header>
    <nav>
      <a href="<?php echo route('home') ?>">Inicio</a>
      <a href="<?php echo route('saludos', 'Jean') ?>">Saludo</a>
      <a href="<?php echo route('contactos') ?>">Contacto</a>
    </nav>
  </header>
</body>

</html>