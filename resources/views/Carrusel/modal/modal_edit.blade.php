 {{-- modal de importacion de excel --}}
 <div class="modal fade" id="ModalEditCarrusel-{{ $item->id }}" role="dialog" aria-labelledby="ModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ModalLabel">Editar Imagen Carrusel</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form id="formfile" class="form-horizontal" role="form" method="POST"
                 action="{{ route('Carrusel.update', $item->id) }}" enctype="multipart/form-data">
                 <div class="modal-body">
                     Sube una nueva imagen de publicidad para el Carrusel
                     <small><strong> solo imagenes</strong></small>
                     {{-- <input type="hidden" name="_method" value="DELETE">
                     --}}
                     {!! method_field('put') !!}
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{-- activar --}}
                        <div class="form-check">
                            <div class="custom-control custom-checkbox ">
                              <input type="checkbox" name="activar{{$item->id}}" id="activar{{$item->id}}" value="1"  class="form-check-input" {{ ($item->activo == 1 ? 'checked' : '') }} >
                              
                              <label class="form-check-label" for="customCheck">  <strong>Activar</strong> </label>
    
                            </div>
                          </div>
                     <div class="form-group">


                         <input type="file" class="form-control" name="file" accept="image/png, image/jpeg">
                     </div>
                       {{-- select de zons --}}
                       <div class="form-group ">
                        <label for="exampleFormControlSelect1">Selecciona la zona donde aparecerá esta imagen</label>.
                        <div class="col-md-12">
                            <select class="form-control md-12" id="zona{{$item->id}}" name="zona{{$item->id}}" required>

                             {{--    <option disabled  hidden>Seleccionar</option> --}}
                                @foreach ($zonas as $zona)

                                    <option {{$item->zona->id==$zona->id ? 'selected': null}} value="{{ $zona->id }}">{{ $zona->nombre }}</option>

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
