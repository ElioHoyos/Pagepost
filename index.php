<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page POST</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- icono -->
    <link rel="shortcut icon" href="img/ia.ico" type="image/x-icon">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <h1><img src="./img/pos.png" width="5%">Sistema POST</h1>
    <div class="container">
        <h2>Enviar datos con PHP</h2>
        <form action="index.php" method="post" id="miFormulario">
            <label for="">Nombre:</label>
            <input type="text" id="name" placeholder="Ingrese su nombre" name="name" required><br>

            <label for="">Correo Electronico:</label>
            <input type="email" id="email" placeholder="Ingrese su correo electronico" name="email" required><br><br>
            <button type="submit" class="btn-lg btn-block">Enviar</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = htmlspecialchars($_POST['name']);
                $email = htmlentities($_POST['email']);
                echo "<h2>Datos enviados</h2>";
                echo "<p>Nombre : $name</p>";
                echo "<p>Email : $email</p>";
            }

            echo "<script>
        Swal.fire({
            title: '¡Éxito!',
            text: 'Formulario enviado correctamente.',
            icon: 'success'
        });
      </script>";
        ?>

    </div>
</body>
<script src="./js/main.js"></script>

</html>