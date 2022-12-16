<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportes</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>


    <header class="main-header">
        <div class="container container--flex">
            <h1 class="main-header__title">Transportes Rojas</h1>
        </div>
        <br>
            <p class="ayuda">¿Necesitas ayuda?</p>
            <p class="llama_al"><i class="fa-solid fa-phone"></i> Llama al 8787349123</p>
        </div>
    </div>
    </header>
    <div class="cabeza">
    <a class="boton1" href="index.html">Inicio  </a><a class="boton2" href="quienes.html">¿Quienes somos?  </a><a class="boton3" href="servicios.html">Nuestros servicios  </a><a class="boton3" href="">Contacto  </a>
</div>

<style>
    body{
        background-color:darkslategray;
    }
    h1{
        background-color: blue;
        color: white;
        padding: 15px 25px;
        text-decoration: none;
        text-align: center;
    }
    form {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }   

    form input {
        width: 90%;
        height: 30px;
        margin: 0.5rem;
        }

    form button {
        padding: 0.5em 1em;
        border: none;
        background: rgb(100, 200, 255);
        cursor: pointer;
        }
        .boton{
        text-align: center;
        background-color: #5c5561;
        color: white;
        padding: 15px 25px;
        text-decoration: none;
        align-content: center;
        border-radius: 25px;
    }
        .boton:hover {
        background-color: #999ec2;
    }
</style>

<body class="body1">
    <form action="registro.php" method="post">
        <h1>Inserta tus datos para que te contactemos!</h1>
        <br>
        <label class="label" for="titulo1">Nombre Completo</label><br>
        <input type="text" name="titulo" required><br>
        <label class="label" for="imagen1">¿Qué necesitas?</label><br>
        <input type="text" name="imagen" required><br>
        <label class="label" for="descripcion1">Correo electrónico</label><br>
        <input type="text" name="descripcion" required><br>
        <label class="label" for="autor1">Teléfono</label><br>
        <input type="text" name="autor" required><br><br>
        <input type="submit" value="Enviar">
    </form>
    <a class="boton" href="index.html">Regresar al inicio</a>



<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="img/LogoTR.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Transportes Rojas. Fundado en 2019</p>
            <p>Ciudad del Carmen, Tabasco</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/people/Transportes-Rojas/100042952583747/" class="fa-brands fa-facebook"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b>SLee Dw</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</body>
</html>