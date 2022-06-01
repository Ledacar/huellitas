<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/style/img/Logo-sin texto.png">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style/css/index.css">
    <link rel="stylesheet" href="/style/css/allpage.css">
    <title>Huellitas | Inicio</title>
    <!-- JS BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/3e26a1e3ce.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbarr">
        <div class="max-width">
            <div class="logo">
              <a>Huelli<span>tas</span></a>           
            </div>
            <ul class="menu">
                <li><a href="#sobreMi" class="menu-btn">Acerca de nosotros</a></li>
                <li><a href="#expe" class="menu-btn">Catalogo</a></li>
                <li><a href="#skill" class="menu-btn">Agendar cita</a></li>
                <li><a href="#contact" class="menu-btn">Contactanos</a></li>
                <li><a href="gestiondecuentas.php" class="menu-btn">Gestión de cuenta</a></li>
            </ul>
            <div class="menu-btn menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="homes">
        <div class="max-width">
            <div class="home-conten">
                <div class="text-1">Veterinaria</div>
                <div class="text-2">Huellitas</div>
                <div class="text-3">Nos especializamos en <span class="typing">Dar lo mejor para tu mascota</span></div>
            </div>
        </div>
    </section>

    <!--  about me secction start  -->
    <section class="about" id="sobreMi">
        <div class="max-width">
            <h1 class="tittle">Acerca de nosotros</h1>
            <div class="about-conten">
                <div class="column left" data-aos="fade-right">
                    <img src="/style/img/Logo-sin texto.png" alt="">
                </div>
                <div class="column right" data-aos="fade-left">
                    <div class="text">Somos la veterinaria <span>huellitas</span></div>
                    <p>
                        Para prevenir la introducción de enfermedades extranjeras, los veterinarios empleados por agencias gubernamentales ponen en cuarentena e inspeccionan animales traídos al país desde otros países. Supervisan los envíos de animales, evalúan la presencia de enfermedades y gestionan campañas para prevenir y erradicar muchas enfermedades como la tuberculosis, la brucelosis y la rabia, que amenazan la salud humana y animal.

                        Un veterinario en investigación busca mejores formas de prevenir y resolver problemas de salud humana y animal. Muchos problemas, como el cáncer y las enfermedades del corazón, se estudian mediante el uso de animales de laboratorio, que se crían, crían y mantienen cuidadosamente bajo la supervisión de veterinarios.
                    </p>
                    <a href="/masinfo.php" >Más información</a>
                </div>
            </div>
        </div>
    </section>

    <!-- habilidades secction start  -->
    <section class="expe" id="expe">
        <div class="max-width" data-aos="fade-up">
            <h1 class="tittle">Catalogo</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/style/img/banners/banner_huellitas.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/style/img/banners/banner huellitas blue.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href="../style/docs/huellitas catalogo.pdf" download="Catalo huellitas 2022" >Descarga nuestro catalogo</a>
        </div>
    </section>

    <!-- slills secction start -->
    <section class="skill" id="skill">
        <br>
        <br>
        <div class="max-width">
            <div class="skill-content">
                <div class="column left "data-aos="fade-left">
                </div>
                <div class="column right" data-aos="fade-right">
                    <div class="text">Agenda una cita en <span>Huellitas</span></div>
                    <p class="fw-bold">
                        Si deseas agendar una cita en nuesta clinica veterinaria puesdes hacer clik en el boton de abajo y ponerte en contacto con nostros para que disfrutes de la mejor clinica veterinaria del pais.
                    </p>    
                    <div class="button-area">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Agendar cita">Agendar cita</button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-dark" id="exampleModalLabel">Agenda una cita</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label text-dark">Nombre del paciente:</label>
                                    <input type="text" class="form-control" id="message-text">                                    
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label text-dark">¿Que mascota/animal pasara consulta?</label>
                                    <input type="text" class="form-control" id="message-text">                                    
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label text-dark">Edad:</label>
                                    <input type="text" class="form-control" id="message-text">                                    
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label text-dark">Raza:</label>
                                    <input type="text" class="form-control" id="message-text">                                    
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label text-dark">Motivo de la cita:</label>
                                  <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label text-dark">Fecha de la cita:</label>
                                  <input type="date" class="form-control" id="recipient-name">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-primary">Agendar cita</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>            
            </div>
	    </div>
    </section>
    
    <!--  Trabajos secction star  -->
    <section class="contact" id="contact">
        <div class="max-width">
            <br>
            <h2 class="text-center fw-bold overflow-hidden">Contactanos</h2>
            <div class="contact-content">
                <div class="column left" data-aos="fade-right">
                    <div class="text">Ponerse en contacto</div>
                    <p>Puede contactar con nosotros por los siguientes medios:</p>
                    <div class="icons">
                        <div class="row">
                            <div class="d-flex">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Nombre</div>
                                    <div class="sub-title">Huellitas</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Dirección</div>
                                    <div class="sub-title">Managua, Altamira</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Correos</div>
                                    <div class="sub-title">huellitasacompany@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right" data-aos="fade-left">
                    <div class="text">Mensajeame</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nombre" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Correo" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Sujeto" required>
                        </div>
                        <div class="field textarea overflow-hidden">
                            <textarea cols="30" rows="10" placeholder="Mensaje..." required></textarea>
                        </div>
                        <div class="button-area">
                            <button  type="submit">Enviar mensaje</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--  footer  -->
    <footer class="pie-pagina" data-aos="fade-down">
        <div class="grupo-1">
            <div class="box">
                <figure >
                    <img src="../style/img/Logo-sin texto.png" alt="Logo de huellitas">
                </figure>
            </div>
            <div class="box">
                <h2>Un poco más sobre nosotros</h2>
                <p>Somos una compañia que nos dedicamos al trato de mascotas y animales desde el año 2010. Tratamos con los mejores veterinarios
                    del pais, brindando un servicio de calidad y un trato especial para los mas queridos de la casa.
                </p>
            </div>
            <div class="box">
                <h2>Siguenos</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Huellitas S.A</b> - Todos los derechos reservados.</small>
        </div>
    </footer>
    <script src="/style/js/index.js" ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>
</html>