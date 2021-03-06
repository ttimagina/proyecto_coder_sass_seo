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
      <div class="texto_iniciodeseccion">
        <h1 class="font_oswald color-contacto">Gracias por contactarme. ??Me pondr?? en contacto contigo lo antes posible!</h1><br>
        <p class="back color-contacto">Volver a Navegar <a class="font_dancing color-contacto" href="index.html">a Navegar</a>.</p>
      </div>  
    </div>

    <!--INCIO DE FOOTER--> 
    <footer>
      <div class="container-fluid linear-gradient1">
          <div class="row py-2  text-center">
              <div class="col-md-3 d-flex justify-content-center align-items-center mb-3"> <!--py-5 text-center-->
                 
                  <a href="index.html">                      
                    <picture>
                      <source media="(max-width: 975px)" srcset="img/small_logo1.svg">
                      <source media="(min-width: 976px)" srcset="img/logo1.svg">
                      <img src="img/logo1.svg" alt="logo ttimagina" class="img_logo_head">
                    </picture>
                  </a>
                  
              </div>
              <div class="col-md-3 d-flex justify-content-center align-items-center mb-3"> <!--px-5 mb-3-->
                  <section>    
                    <h5 class="font_oswald">SECCIONES</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="branding.html" class="nav-link p-0 ">Branding</a></li>
                        <li class="nav-item mb-2"><a href="animation.html" class="nav-link p-0 ">Animation</a></li>
                        <li class="nav-item mb-2"><a href="website.html" class="nav-link p-0 ">Website</a></li>
                        <li class="nav-item mb-2"><a href="contacto.html" class="nav-link p-0 ">Contacto</a></li>
                      </ul>
                  </section>    
              </div>
              <div class="col-md-3 d-flex justify-content-center align-items-center mb-3">
                <section>
                    <h5 class="font_oswald">CONTACTO</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><h6 class="font_oswald">DIRECCION</h6>
                        Luis Braille 3935</li>
                      <li class="nav-item mb-2"><h6 class="font_oswald">CELULAR</h6>
                        3794886995</li>
                      <li class="nav-item mb-2"><h6 class="font_oswald">EMAIL</h6>
                        martinfrette@gmail.com</li>
                    </ul>
                </section>    
              </div>
              <div class="col-md-3 d-flex justify-content-center align-items-center mb-3">
                <section>
                 <h5 class="font_oswald">SOCIAL MEDIA</h5>
                      <ul class="nav flex-column">   
                          <!-- <a href="https://www.instagram.com/ttimagina/" target="_blank" class="nav-link p-0 "><li><img class="footer_img" src="img/instagram (1).png" alt="instagram"> INSTAGRAM</li></a>
                          <a href="https://www.facebook.com/martinfacundo/" target="_blank" class="nav-link p-0 "><li><img class="footer_img" src="img/facebook (1).png" alt="facebook"> FACEBOOK</li></a>-->
                          <a href="https://www.linkedin.com/in/martinfrette/" target="_blank" class="nav-link p-0 "><li><img class="footer_img" src="img/linkedin.png" alt="linkedin"> LINKEDIN</li></a>
                      </ul>
                </section>      
              </div>
            </div> 
      </div>
      <div class="container-fluid bg-dark">
          <div class="col d-flex justify-content-center color_white">
          <p> ?? 2022 ttimagina, Inc. All rights reserved.</p> 
          </div>
      </div>
  </footer>


    <script src="js/bootstrap.js"></script> 
</body>
</html>



';


?>