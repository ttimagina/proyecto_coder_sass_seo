<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "martinfrette@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
     <!-- SEO -->
     <meta name="keywords" content="correo, contacto, email, forms" />
     <title> ttimagina - Contacto </title>
     <meta name="description" content="formas de contacto" />     
</head>
<body>
    <div class="container">
        <div class="col d-flex justify-content-center my-2">   
          <picture>
            <source media="(max-width: 975px)" srcset="img/small_logo1.svg">
            <source media="(min-width: 976px)" srcset="img/logo1.svg">
            <img src="img/logo1.svg" alt="logo ttimagina" class="img_logo_head">
          </picture>
        </div>
    </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-negro ">
        <div class="container-fluid">
            <button class="mx-auto navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="branding.html">BRANDING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="animation.html">ANIMATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="website.html">WEBISTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contacto.html">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main>
        <!-- comienzo de slider-->
        <div class="container-fluid backgrounBrouwn linear-gradient_motion_contacto">
            <div class="d-flex justify-content-center col-md-10 mx-auto">
                <div class="texto_iniciodeseccion">CONTACTO</div>
            </div>
        </div>
    <div class="container-fluid d-flex">
        <h1 clas="font_oswald color-contacto">Gracias por contactarme. ¡Me pondré en contacto contigo lo antes posible!</h1>
        <p class="back color-contacto">Volver a Navegar <a clas="font_dancing color-contacto" href="index.html">a Navegar</a>.</p>
        
    </div>
</body>
</html>



';


?>