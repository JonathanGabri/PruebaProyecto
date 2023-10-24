@section('comentariosEstilos')
    

<style>
    .body-comentario{
    margin-top:20px;
    background:#eee;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div>
<ul>
    <br><br><br><br><br>
{{-- PRUEBA DE BARRA DE FILTRACION --}}
       
{{-- FINAL PRUEBA DE BARRA DE FILTRACION --}}

    @foreach ($comentarios as $comentario)
<div class="container ">
<div class="row">
    <div class="col-md-8">
        <div class="media g-mb-30 media-comment">
            
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h3 class="h3 g-color-gray-dark-v1 mb-0"> {{ $comentario->name }}</h3>

            <br>
                <h5 class="h5 g-color-gray-dark-v1 mb-0">Motivo de la consulta: {{$comentario->motivo}}</h5>
                <br>
                <span class="g-color-gray-dark-v4 g-font-size-12">{{$comentario->created_at}}</span>
              </div>
        
              <p> {{$comentario->descripcion}}</p>
        
              <ul class="list-inline d-sm-flex my-0">
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="{{route('comentarios.show', $comentario->id)}}">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                    Editar
                  </a>
                  <form action="{{ route('comentarios.delete', $comentario->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                <a href=""></a>
                </li>
              </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
</ul>

{{ $comentarios->links() }}
</div>
{{-- SCRIPT PARA QUE SE OCULTEN --}}


 {{-- ESTE ES EL CODIGO PARA MOSTRAR LOS COMENTARIOS CREADOS EN LA PAGINA DE COMENTARIOS 
    
    CUIDADO AL BORRAR O EDITAR

    

<div class="comment-box">
    <h1>Comentarios Realizados</h1>
    {{-- ACA COMIENZA EL BUCLE PARA IR IMPRIMIENDO LOS COMENTARIOS REALIZADOS 
    <ul class="comment-list">
        @foreach ($comentarios as $comentario)
            <li class="comment-item">
                <a class="comment-link" href="{{ route('comentarios.show', $comentario->id) }}">
                    {{$comentario->motivo}}
                    <br>
                    {{ $comentario->name }}
                    <hr>
                </a>
            </li>
        @endforeach
    </ul>
    {{ $comentarios->links() }}
</div>
--}}
@endsection