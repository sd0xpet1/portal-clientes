

    <!-- Video de fondo -->
    <video id="video-background" autoplay muted loop>
        <source src="modelo/assets/videos/fondo-video.mp4" type="video/mp4">
        Tu navegador no admite el elemento de video.
    </video>

    <div class="container mt-5"> <!-- Agrega margen superior -->
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 rounded-lg"> <!-- Agrega redondez a las esquinas -->
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" id="imageSlider" ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="">
                                        <img src="modelo/assets/img/marca/looo-nature-wardify.png" alt="" class="img-fluid h-auto" style="max-width: 100%; max-height: 100%; margin-bottom: 5px;">
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu email...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ingresa tu contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar Contraseña</label>
                                            </div>
                                        </div>
                                        <a href="vista/home.php" class="btn btn-primary btn-user btn-block">Iniciar Sesión</a>
                                        
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block"><i class="fab fa-google fa-fw"></i> Ingresa Con Google</a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block"><i class="fab fa-facebook-f fa-fw"></i> Ingresa Con Facebook</a>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">¿Olvidaste tú Contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">¡Registrate!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>