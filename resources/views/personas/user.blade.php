@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
<div class="col-md-12"><br>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Empleados</h3>
      </div>
      <div class="card-body">
          <div class="card-content">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#Registro_usu">
                <i class="fas fa-plus"></i>
                Nuevo Registro jonathan idaz
                jonahan
              </button>                         
              <br>
              <br>
          </div>                    
        <table id="tabla_empleados" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No°</th>
                    <th>Nombre</th>
                    <th>dirección</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><span class="badge badge-success">Activo</span></td>
                    <td>
                        <a class="btn btn-warning" href="#">
                            <i class="far fa-edit">
                            </i>
                        </a>
                        <a class="btn btn-danger" onclick="mensaje_eliminado()">
                            <i class="fas fa-trash-alt">
                            </i>
                        </a>
                    </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
   $(document).ready(function() {
    $('#tabla_usuarios').DataTable({
      select:true,
    dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'pdfHtml5'
            ]
    });
} );
    </script>
    <script>
        function mensaje_eliminado() {
Swal.fire({
title: 'Estas Seguro?',
text: "No se podrá Revertir esto",
icon: 'warning',
showCancelButton: false,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si'
}).then((result) => {
if (result.isConfirmed) {
  Swal.fire(
    'Eliminado',
    'Tu registro ha sido eliminado.',
    'Completado'
  )
}
})
}
    </script>
@stop