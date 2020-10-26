@extends('layouts.app')

@section('content')
<div class=" col-12 justify-content-center" style="width: 100%" >
    
    <div class="card ">
        <div class="card-header">
        
          <div class="container">
            <div class="row">
                <div class="col">
                       <a data-target="#ModalCreateBanners" data-toggle="modal" class="btn btn-success" >Crear Imagen de Banner</a>
                </div>
                <div class="col" style="position: relative;
                padding: 1rem">
                {{--  <a href="#" class="badge badge-primary">Primary</a>
                 <a href="#" class="badge badge-secondary">Secondary</a> --}}
                </div>
                <div class="col">
          
                </div>
              </div>
          </div>
          <div>
              
          </div>
        </div>
        
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
            {{-- tabla --}}
    
            <div class="table-responsive-lg">
                <table class="table " id="myTable"  cellspacing="0">
                    <thead class="">
                        <tr>
                            <th>Id</th>
                            <th>Imagen</th>
                            {{-- <th>Titulo</th> --}}
                            
                            
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td><img class="img-tabla" src="{{$item->url_imagen}}" alt="" ></td>
                        <td><div class="row">
                              <a data-target="#ModalEdit{{$item->id}}" data-toggle="modal" class="btn btn-outline-primary btn-lg" ><i class="fa fa-edit"></i></ion-icon></a>
                              <p  style="margin-right: 10%"></p>
                              <a data-target="#ModalEliminar-{{$item->id}}" data-toggle="modal" class="btn btn-outline-danger btn-lg"> <i class="fa fa-trash" style="color:rgb(230, 8, 8)"></i></a>
                           </div>
                       </td>
                            @include('banners.modal.modal_edit') 
                            @include('banners.modal.modal_eliminar') 
                    </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                <style>
                    .img-tabla {
      width: 40%; /* Set width to 100% */
      max-height: 350px;
    }
                </style>
        </div>
      </div>
</div>
@include('banners.modal.Modal_create')
<script>
   $(document).ready( function () {
  $('#myTable').DataTable({          
    "language": {
       
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
    },                     
  
   
  });

 /*  $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } ); */
});
    </script>
  
@endsection
