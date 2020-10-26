@extends('layouts.app')

@section('content')
<div class=" col-12 justify-content-center" style="width: 100%" >
    
    <div class="card ">
        <div class="card-header">
        
          <div class="container">
            <div class="row">
                <div class="col">
                       <a data-target="#ModalCreate" data-toggle="modal" class="btn btn-success" >Crear usuario</a>
                </div>
                <div class="col" style="position: relative;
                padding: 1rem">
                {{--  <a href="#" class="badge badge-primary">Primary</a>
                 <a href="#" class="badge badge-secondary">Secondary</a> --}}
                </div>
                <div class="col">
            {{--     <form action="{{route('limite.actualizar')}}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group col-10">
                    <input type="text" class="form-control" placeholder="limite de vistas" aria-label="limite de vistas" name="limite" id="limite" style="text-align: right"   value="{!!$limite->limite!!}" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit">Actualizar</button>
                        </div>
                      </div>
                
                </form> --}}
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
                            <th>Nombre</th>
                            <th>Email</th>
                            
                            
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td><div class="row">
                              <a data-target="#ModalEdit{{$item->id}}" data-toggle="modal" class="btn btn-outline-primary btn-lg" ><i class="fa fa-edit"></i></ion-icon></a>
                              <p  style="margin-right: 2%"></p>
                              <a data-target="#ModalEliminar{{$item->id}}" data-toggle="modal" class="btn btn-outline-danger btn-lg"> <i class="fa fa-trash" style="color:rgb(230, 8, 8)"></i></a>
                           </div>
                       </td>
                            @include('usuarios.modal.modal_edit') 
                            @include('usuarios.modal.modal_eliminar') 
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
@include('usuarios.modal.modal_create')
<script src="{{asset('js/tabla.js')}}"></script>
<script>
 

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
