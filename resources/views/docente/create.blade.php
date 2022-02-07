

<form action="{{ route('docente.store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    
    <div class="modal fade text-left" id="ModalCreateDocente" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                

                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Registrar nuevo Docente') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                      
             
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Nombres</label>
                        <input type="text" class="form-control" name="nombres" required placeholder="Nombres">
                        @if ($errors->has('nombres'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombres') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" required placeholder="Apellidos">
                        @if ($errors->has('apellidos'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('apellidos') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Correo</label>
                        <input type="email" class="form-control" name="email" required unique placeholder="Correo">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class=" col-md-12">
                        <div class="form-group" >
                            <strong>{{ __('Imagen') }}:</strong>
                            <input type="file" class=" form-control" name="image">
                        </div>
                    </div><br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
