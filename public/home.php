<?php
require 'includes/header.php';
require 'includes/cabesera.php';
?>

<div class="main">
        <section class="content-productos" id="productos">
            <h3 class="titulos-main">Productos</h3>
            <div class="productos">

                <!--*************** CARDS ***************-->

                <div class="card-producto zoom-card" >
                    <div class="card-producto__img">
                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-producto__info">
                        <h4>Mazda 4</h4>
                        <p>$1.800.000</p>
                    </div>
                    <div class="card-producto__btn">
                        <button type="button" class="btn btn-primary minimoAnchoBtn2">Detalle</button>
                    </div>
                </div>
            
                <div class="card-producto zoom-card">
                    <div class="card-producto__img">
                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-producto__info">
                        <h4>Mazda 4</h4>
                        <p>$1.800.000</p>
                    </div>
                    <div class="card-producto__btn">
                        <button type="button" class="btn btn-primary minimoAnchoBtn2">Detalle</button>
                    </div>
                </div>
            
                <div class="card-producto zoom-card">
                    <div class="card-producto__img">
                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-producto__info">
                        <h4>Mazda 4</h4>
                        <p>$1.800.000</p>
                    </div>
                    <div class="card-producto__btn">
                        <button type="button" class="btn btn-primary minimoAnchoBtn2">Detalle</button>
                    </div>
                </div>
            
                <div class="card-producto zoom-card">
                    <div class="card-producto__img">
                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-producto__info">
                        <h4>Mazda 4</h4>
                        <p>$1.800.000</p>
                    </div>
                    <div class="card-producto__btn">
                        <button type="button" class="btn btn-primary minimoAnchoBtn2">Detalle</button>
                    </div>
                </div>
            

                <!--*************** CAROUSEL ***************-->

               
            </div>

            <div class="productos-carousel">
                <div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center gap-3">
                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mazda 1</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>
                
                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Ford Ranger</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>
                
                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mercedes-Benz S Pullman</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-3">
                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mazda 4</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>

                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mazda 5</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>
                
                                <div class="card producto__card card-content" >
                                    <div class="card-header">
                                        <img src="./assets/img/productos/mazda3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mazda 6</h5>
                                        <p>$1.800.000</p>
                                        <a href="#" class="btn btn-primary btn-card">Detalle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev" style="color: black; ">
                        <i class="fa fa-angle-left" aria-hidden="true" ></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next" style="color: black;">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            
        </section>

        <section class="content-contacto" id="contacto">
            <h3 class="titulos-main">Contáctanos</h3>
            <div class="contacto">
                <div class="contacto__form mt-2">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" class="form-control contacto__form-input">
                            </div>
            
                            <div class="col-md-6 mt-3">
                                <label for="telefono" class="form-label">Telefono / WhatsApp</label>
                                <input type="text" name="telefono" id="telefono" placeholder="Tu Telefono o WhatsApp" class="form-control contacto__form-input telefono">
                            </div>
                        </div>
            
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea name="mensaje" id="mensaje" class="form-control contacto__form-input" placeholder="Mensaje" rows="7"></textarea>
                            </div>
                        </div>
            
                        <div class="row mt-3">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btnEnviarMensaje">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <hr style="margin-top: 2rem;">
                </div>
            
                <div class="contacto__info">
                    <h4>Informacion de contacto</h4>
                    <p><span><i class="fas fa-phone-volume fa-xl fa-fw"></i></span> <span style="font-size: 1.8rem;"> 317-711-65-06</span> </p>
                    <p><span><i class="fas fa-mail-bulk fa-xl fa-fw"></i></span> <span style="font-size: 1.8rem;"> vidriosautosr@gmail.com</span> </p>

                    <div class="content-ubicacion">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7969.267478215259!2d-75.2867290253126!3d2.921224618424959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7478e29fcca9:0x42852985e287b27e!2sVidrio%20Autos%20R!5e0!3m2!1ses!2sco!4v1748649340133!5m2!1ses!2sco" width="100%" height="200" style="border:0; border-radius: 1rem;" allowfullscreen="" loading="lazy";  referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <a class="whatsapp-float" target="_blank" title="Chatea con nosotros por WhatsApp" onclick="whatsapp(event)">
            <i class="fab fa-whatsapp"></i>
        </a>



        <?php require 'includes/footer.php'; ?>

        <script src="./assets/js/app.js"></script>
    </body>