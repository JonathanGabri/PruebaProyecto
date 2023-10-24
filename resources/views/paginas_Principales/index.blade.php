
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
     <!--estilos-->
     
   
</head>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <!--Aca estamos llamando a los inyectables-->
     <!--header-->
      <!--barra de nav-->
    @yield('barras_navegacion')
    <!--Ingresando un carousel-->
    @yield('header')
<!--Ingresando los circulos con imagenes-->
    @yield('secciones')
<!--Ingresando imagenes ilustrativas de los servicios-->
    @yield('secciones_imagenes')
    
    <!--footer-->
    @yield('footer_navegacion')
    <!--script-->
</body>
</html>