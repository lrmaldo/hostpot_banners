 {{-- modal de creacion  --}}
 <div class="modal fade" id="Modalconfig" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Configuracion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formfile" class="form-horizontal" role="form" method="POST"
                action="{{ route('usuario.store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <small><strong></strong></small>
                    {{-- <input type="hidden" name="_method" value="DELETE">
                    --}}
                    {!! method_field('put') !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Nombre de la empresa</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre..." required>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email..." required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Telefono..." required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Dirección</label>
                        <textarea  class="form-control" name="Dirección" placeholder="..." required></textarea>
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
