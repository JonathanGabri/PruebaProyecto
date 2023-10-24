@section('formularioEdit')
<div role="main" class="main">
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <div class="post-block mt-3 post-leave-comment">
                        <div class="centered-form">
                            <h4 class="mb-3">Deja un comentario</h4>
                            <form class="contact-form p-2 rounded bg-color-grey smaller-form" action="{{ route('comentarios.update',$comentario) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="p-2">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-12">
                                        <label class="form-label required font-weight-bold text-dark">Nombre Completo</label>
                                        <input value="{{$comentario->name}}" placeholder="Ingrese su Nombre" type="text" name="name" data-msg-required="Please enter your name." maxlength="100" class="form-control smaller-input" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <label class="form-label required font-weight-bold text-dark">Correo Electronico</label>
                                        <input value="{{$comentario->email}}" placeholder="Email" type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control smaller-input" name="email" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Selecciona el motivo:</label>
                                        <select value="{{$comentario->motivo}}" name="motivo" class="form-select smaller-input" required>
                                            <option value="" disabled selected hidden>Selecciona un motivo</option>
                                            <option value="Comentario">Comentario</option>
                                            <option value="Queja">Queja</option>
                                            <option value="Solicitud de ayuda">Necesito Ayuda</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="form-label required font-weight-bold text-dark">Comentario</label>
                                        <textarea maxlength="1000" data-msg-required="Please enter your message." rows="6" class="form-control smaller-input" name="descripcion" required>{{$comentario->descripcion}}</textarea>
                                    </div>
                                    <div class="form-group col-12 mb-0 text-center">
                                        <input type="submit" class="btn btn-primary btn-modern smaller-button" data-loading-text="Loading">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection