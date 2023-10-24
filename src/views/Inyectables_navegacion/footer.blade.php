@section('footer_navegacion')
<!--Estilos de Footer-->
<style>
/* Estilo para el footer */
.p-footer {
  font-size: 18px;
}
html{
height: 100%;
}
body{
  display: flex;
  flex-direction: column;
  min-height: 100%;
}
/*Aca estamos haciendo que el footer se mantenga siempre abajop*/
footer {
   text-align: center;
   bottom: 0;
   width:100%;
   margin-top: auto;
}
</style>
<!-- Footer -->
<!-- Disenio del footer, tipografia, y fondo del footer -->

<footer class="text-center text-lg-start bg-white text-muted p-footer">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
      </div>
    </section>
    
    <!-- Parte donde encontramos los links del footer  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <!--Seccion de quien es la empresa-->
              <i class="fas fa-gem me-3 text-secondary"></i>CyberFuel
            </h6>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sequi adipisci optio doloremque ad ea possimus, beatae ex, dolor ut iure fugiat soluta, quas non. Tenetur ipsam autem tempora ullam.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Productos de la Empresa -->
            <h6 class="text-uppercase fw-bold mb-4">
              Productos
            </h6>
            <p>
              <a href="#!" class="text-reset">Base de Datos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Dominios Web</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Creacion Paginas Web</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel 10</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links de redes/soporte/comentarios -->
            <h6 class="text-uppercase fw-bold mb-4">
              Links de Soporte
            </h6>
            <p>
              <a href="https://www.facebook.com/cyberfuel" class="text-reset">Redes Sociales</a>
            </p>
            <p>
              <a href="http://127.0.0.1:8000/coment" class="text-reset">Comentarios</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contacto</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ayuda</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Parte del contacto -->
            <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Costa Rica, Escazu, Santa Ana</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              CorreoCyberfuel@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> +506 7217 3728</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> +506 7217 8546</p>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #222020; color: #fff;">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="#">Julian Elizondo</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  @endsection