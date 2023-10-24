<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
     <!--estilos-->   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    {{-- EN ESTA ES LA PAGINA QUE SE ESTAN MOSTRANDO LOS COMENTARIOS --}}
    
    <!--Nav-->
    @yield('barras_navegacion')
    {{-- ACA VAMOS A MOSTRAR LOS COMENTARIOS. --}}
    @yield('comentariosEstilos')
    
    <!--footer-->
    @yield('footer_navegacion')
    
    <!--script-->

    {{-- Prueba Scr --}}
</body>
</html>
