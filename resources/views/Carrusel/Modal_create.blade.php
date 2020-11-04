 {{-- modal de importacion de excel --}}
 <div class="modal fade" id="ModalCreateCarrusel" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Crear Carrusel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formfile" class="form-horizontal" role="form" method="POST"
                action="{{ route('Carrusel.store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    Sube una imagen de publicidad  para el Carrusel
                    <small><strong> solo imagenes</strong></small>
                    {{-- <input type="hidden" name="_method" value="DELETE">
                    --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                       
                        
                        <input type="file" class="form-control" name="file" 
                        accept="image/png, image/jpeg">
                    </div>
                    
                     {{-- select de zonas --}}
                     <div class="form-group ">
                        <label for="exampleFormControlSelect1">Selecciona la zona donde aparecerá esta imagen</label>.
                        <div class="col-md-12">
                            <select class="form-control md-12" id="zona" name="zona" required>

                             {{--    <option disabled  hidden>Seleccionar</option> --}}
                                @foreach ($zonas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>

                                @endforeach

                            </select>
                            <small>Si no aparece ninguna zona agregalo <a
                                    href="{{ route('zonas.index') }}">aquí</a> </small>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input class="btn btn-primary btn-xs" type="submit" value="Subir" />

                </div>
            </form>
        </div>
    </div>
</div>