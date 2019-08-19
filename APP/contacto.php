<html lang="ES">    
    <?php require_once "head.php" ?>

    <body>

        <?php require_once "nav.php" ?>

        <main role="main">

            <!--Section: Contact v.2-->
            <div class="container">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contacto</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna duda? Por favor no dudes en ponerte en contacto con nosotros. Nuestro equipo te ayudará lo antes posible.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Nombre</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Email</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Asunto</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="8" class="form-control md-textarea"></textarea>
                                        <label for="message">Su Duda</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                            <div class="text-center text-md-left">
                            <a class="btn btn-secondary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                        </div>
                        <div class="status"></div>

                        </form>
             
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Zaragoza, CA 94126, España</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </div>
            <!--Section: Contact v.2-->
            
            <?php require_once "footer.php" ?>  

        </main>
              
        <?php require_once "scripts.php"; ?>

    </body>
</html>