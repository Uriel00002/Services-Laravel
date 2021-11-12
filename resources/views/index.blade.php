
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/app.css"> 
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    <section class="login">
        <a class="nombre">   / - VAIHERE - /  </a>
        <a class="btn-1" href="./login.php">Iniciar Sesion <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        </a>
    </section>

    <section>
        <div class="contenedorr">
           <nav class="menu">
                <a href="#acerca-de" id="btn-acerca-de">Acerca de</a>
                <a href="#plans" id="btn-menu">Planes</a>
                <a href="#galeria" id="btn-galeria">Galeria</a>
                <a href="#ubicacion" id="btn-ubicacion">Ubicación</a>
                <a href="#contacto" id="btn-menu">Contacto</a>
            </nav>> 
            <div class="textos">
               <h1 class="nombre">Escuela de danzas <span> Vaihere</span></h1>
            </div>
        </div>
    </section>
      

    <section class="main">
        <section class="acerca-de" id="acerca-de">
            <div class="contenedor">
                <div class="foto">
                    <img src="img/acerca-de3.jpg" alt="">
                </div>
                <article>
                    <h3>Acerca de</h3>
                    <p>Somos una escuela que busca compartir el amor por la danza y algunas sus variedades con el fin de crear un vínculo que te lleve a conocer una nueva forma de expresarte, en VaiHere queremos enseñarte la mejor versión de ti así que 
                        Ven con nosotros</p>
                </article>
            </div>
        </section>
        
        <br>
        <br>
        <br>
        <br>
        <br>

        <section id="plans" class="main-plans-container">
                <div class="plans-title">
                    <h2>Escoge el plan que mejor se ajuste a ti</h2>
                    <p>Cualquier plan te da acceso completo a nuestra plataforma</p>
                </div>
                <section class="plans-container--slider">
                   
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza contemporanea nivel basico</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>300</p>
                            <p class="plan-card--saving">Clases de 2 hrs 3 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza contemporanea nivel medio</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>450</p>
                            <p class="plan-card--saving">Clases de 2 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza contemporanea avanzado</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>580</p>
                            <p class="plan-card--saving">Clases de 3 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza clasica nivel basico</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>320</p>
                            <p class="plan-card--saving">Clases de 2 hrs 3 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza clasica nivel medio</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>480</p>
                            <p class="plan-card--saving">Clases de 2 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza clasica avanzado</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>600</p>
                            <p class="plan-card--saving">Clases de 3 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza folclorica nivel basico</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>300</p>
                            <p class="plan-card--saving">Clases de 2 hrs 3 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza folclorica nivel medio</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>450</p>
                            <p class="plan-card--saving">Clases de 2 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>
                    <article class="plans-container--card">
                        <br> 
                        <p>Curso de danza folclorica avanzado</p>
                        <div class="plan-info-container">
                            <h3 class="plan-card--title">Pago mensual</h3>
                            <p class="plan-card--price"><span>$</span>530</p>
                            <p class="plan-card--saving">Clases de 3 hrs 5 dias a la semana</p>
                            <button class="plan-card--ca"></button>
                        </div>
                    </article>

                </section>
            </section>

        <br>
        <br>

        <section class="scrolls" id="galeria">
              
            <div class="barra_scrolls">
                <p>---       Galeria       ---</p>
            </div>

            <section class="horizontal_slider" >
                <div class="slider_container">
                    <div class="item">
                        <img src="resources/img/1.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/2.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/3.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/4.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/5.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/6.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/7.jpg" >
                    </div>
                    <div class="item">
                        <img src="img/8.jpg" >
                    </div>
                    <div class="item">
                        <img src="img/9.jpg" >
                    </div>
                    <div class="item">
                        <img src="img/10.jpg" >
                    </div>
                </div>
            </section>

            <section class="horizontal_slider" >
                <div class="slider_container">
                    <div class="item">
                        <img src="resources/img/11.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/12.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/13.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/14.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/15.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/16.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/17.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/18.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/19.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/20.jpg" >
                    </div>
                </div>
            </section>

            <section class="horizontal_slider" >
                <div class="slider_container">
                    <div class="item">
                        <img src="resources/img/21.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/22.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/23.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/24.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/25.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/26.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/28.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/27.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/29.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/30.jpg" >
                    </div>
                </div>
            </section>

            <section class="horizontal_slider" >
                <div class="slider_container">
                    <div class="item">
                        <img src="resources/img/31.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/32.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/33.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/34.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/35.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/36.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/38.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/37.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/39.jpg" >
                    </div>
                    <div class="item">
                        <img src="resources/img/40.jpg" >
                    </div>
                </div>
            </section>
        </section>

        <section id="ubicacion" class="mapa">
            <iframe src="https://maps.google.com/maps?q=independencia%2060%20tlaxcala&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>


        <section class="contacto" id="contacto">
            <div class="contenedor">
            
                <h3 class="titulo">Contacto</h3>
                <form class="formulario" action="">
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <input type="email" placeholder="Correo" name="correo" required>
                    <textarea name="mensaje" placeholder="Mensaje:"></textarea>
                    <input class="boton" type="submit" value="Enviar">
                </form>
            </div>
        </section>

    </section>


    <section class="redes-sociales" id="redes-sociales">
        <div class="contenedor">
            <a class="youtube" href="https://youtube.com/channel/UCnm9B7Tj03gEP19sTND7Bjw">YouTube<i class="fa fa-youtube-play"></i> </a>
            <a class="facebook" href="https://www.facebook.com/Ury3l.UoU"> Facebook<i class="fa fa-facebook"></i> </a>
            <a class="whatsapp" href="https://wa.me/522214351907?text=Que%20tal,%20me%20interesa%20un%20curso%20de%20tu%20sitio%20web">Whatsapp <i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
            <a class="instagram" href="https://www.instagram.com/ut_tlaxcala/"> Instagram<i class="fa fa-instagram"></i> </a>
        </div>
    </section>


    <footer>
        <div class="copyright">
            <p>"Derechos Reservados - Danzas VAIHERE 2021"</p>
        </div>
    </footer>


    </body>
</html>
