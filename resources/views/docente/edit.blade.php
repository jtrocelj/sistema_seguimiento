

<form action="{{ route('docente.update', $d->id) }}" method="post" enctype="multipart/form-data">
    
    {{ method_field('patch') }}
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalEditDocente{{$d->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('EDITAR DOCENTE') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Nombres') }}:</strong>
                            <input type="text" name="nombres" value ="{{$d->nombres}}" class="form-control" required>
                            </div>
                        </div>
                    </div>   

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Apellidos') }}:</strong>
                            <input type="text" name="apellidos" value ="{{$d->apellidos}}" class="form-control" required>
                            </div>
                        </div>
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Correo') }}:</strong>
                            <input type="email" name="email" value ="{{$d->email}}" class="form-control" required>
                            </div>
                        </div>
                    </div> 
                   
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>{{ __('Imagen') }}:</strong>  
                                    <input type="file" name="image"  class="form-control" width="10px" ><br>
                                    <img src="{{ asset('storage/docente/' .$d->image)}}" height="70" width="80px">
                            </div>
                        </div>
                    </div>   
                        
                    <div class="col-xs-12 col-sm-12 col-md-12 ml--30">
                        <button type="submit" class="btn btn-warning">{{ __('Editar') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

