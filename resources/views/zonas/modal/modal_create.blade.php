 {{-- modal de creacion  --}}
 <div class="modal fade" id="ModalCreate" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Crear zonas </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formfile" class="form-horizontal" role="form" method="POST"
                action="{{ route('zonas.store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                  
                    <small><strong></strong></small>
                    {{-- <input type="hidden" name="_method" value="DELETE">
                    --}}
                    {{-- {!! method_field('put') !!} --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de la zona" required>
                    </div>

                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input class="btn btn-primary btn-xs" type="submit" value="Crear" />

                </div>
            </form>
        </div>
    </div>
</div>
