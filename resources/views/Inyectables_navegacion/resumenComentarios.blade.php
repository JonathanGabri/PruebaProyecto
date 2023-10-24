
@section('resumenComentarios')
<br>
<br>
<br>
<br>
<h4>{{$comentario->name}}</h4>
<h5 class="h5 g-color-gray-dark-v1 mb-0">Motivo de la consulta: {{$comentario->motivo}}</h5>
<br>
</div>

<p> {{$comentario->descripcion}}</p>

<a href="{{route('comentarios.home')}}">Volver a los cursos</a>
<a href="{{route('comentarios.edit', $comentario)}}">Editar curso</a>
@endsection