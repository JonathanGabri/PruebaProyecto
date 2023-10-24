
@section('barras_navegacion')

<style>
    .a-nav{
      font-size: 18px;
    }
    .button-nav{
        font-size: 18px;
    }
    .navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000; /* Asegura que el nav esté por encima de otros elementos */
  background-color: #333; /* Color de fondo del nav */
}
/*Aca colocamos el espaciado dentro de los textos*/
.nav-item {
    margin-right: 80px; /* Ajusta el valor según la separación deseada */
}
.container {
  margin-top: 10px; /* Ajusta la parte superior del contenido principal para dejar espacio para el nav */
}
/*Aca editamos lo que es el de contacto o el boton mejor dicho*/
#contact {
  width: 110px;
  height: 37px;
  line-height: 20px;
  text-align: center;
  cursor: pointer;
}

#contact:active {
  background: #444;
}

/*Aca es la ventana emergente del comentario*/
/*Por si algun momento se quiere editar*/
#contactForm {
  display: none;

  border: 6px solid 3324be;
  padding: 2em;
  width: 400px;
  text-align: center;
  background: #c1c8d4;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  border-radius: 16px;
}

input,
textarea {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  border-radius: 15px;
}
.textarea-form {
  height: 80px;
  resize: none;
}
    </style>
    
    
<div class="container mt-0">

</div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mx-auto a-nav">
        <!-- Container wrapper -->
        <div class="container d-flex justify-content-between">
            <!-- Navbar brand -->
                                  <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
            <a class="navbar-brand" href="{{route('home')}}">
                <!-- Logo -->
                <img src="/img/imgPruebas/imagen.png" height="50" alt="Logo" loading="lazy" />
            </a>
                <!-- Links de las navs -->
                <ul class="navbar-nav mb-0 mb-lg-0">
                    <li class="nav-item">
                                            <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
                        <a class="nav-link" href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                                              <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
                        <a class="nav-link" href="{{route('comentarios.home')}}">Comentarios</a>
                    </li>
                    
                </ul>

                <!-- Botones de inicio de sesion y registrarse-->
                                    <div class="d-flex align-items-center">
                    <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
                    {{-- Creacion del formulario --}}


                    <div id="contact" class=" btn btn-primary me-3">Contactanos</div>
                        <div id="contactForm">
                        <h1  style="margin-bottom: 10px;">Comentarios</h1>

                        {{-- Aca estamos creando en el 'name='' ' va como se llaman las tablas donde se van a ingresar los datos.--}}
                        {{-- En el form va la vinculacion de los datos, necesita tener el metodo "POST" y en el 'action' estaria yendo la ruta del controlador. --}}

                        {{-- Esta ruta me esta devolviendo la ruta de GenerarComentarios --}}
                        <form class="container mt-4" action="{{route('comentarios.generar')}}" method="POST">
                            
                            @csrf  {{-- GENERA UN TOKEN PARA QUE PUEDA FUNCIONAR. --}}

                            <input placeholder="Nombre" type="text" name="name" required class="form-control mt-3" />

                            <input placeholder="Email" type="email" name="email" required class="form-control mt-3" />

                            <label>
                              
                              Selecciona el motivo:

                              <select name="motivo" class="form-select" required>
                                <option value="" disabled selected hidden>Selecciona un motivo</option>
                                <option value="Comentario">Comentario</option>
                                <option value="Queja">Queja</option>
                                <option value="Solicitud de ayuda">Necesito Ayuda</option>

                            </select>

                            </label>

                            
                            <input maxlength="1000" placeholder="Mensaje" type="text" name="descripcion" class="form-control mt-3"/>
                            <button class="btn btn-primary mt-3" type="submit">Enviar</button>
                        </form>
                        </div>


                        {{-- Fin del formulario --}}


                        
                    <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
                    <button type="button" class="btn btn-primary me-3">Login</button>
                    <button type="button" class="btn btn-primary me-3">Sign up</button>
                </div>
            </div>
        </div>
    </nav>
 <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
    <script src="/js/main.js"></script>

    <script>
        $(function() {
  $('#contact').click(function() {
    $('#contactForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target)
        && container.has(e.target).length === 0)
    {
        container.fadeOut();
    }
  });
});
    </script>

@endsection 