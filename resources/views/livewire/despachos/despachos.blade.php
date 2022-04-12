@section('title', 'Despachos')
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>{{$pageTitle}} | {{$ComponentName}}</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#theModal"> Nuevo</button>
</ol>
</div>
</div>
</div>
</section>
<div>
  <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>FECHA</th>
                      <th>ORDEN</th>
                      <th>EXPEDIENTES</th>
                      <th>COPIAS</th>
                      <th>ERRORES</th>
                      <th>OTROS</th>
                      <th>MTOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($despachos as $despacho)
                      <tr>
                        <td>{{$despacho->fecha}}</td>
                        <td>{{$despacho->orden}}</td>
                        <td>{{$despacho->expedientes}}</td>
                        <td>{{$despacho->copias}}</td>
                        <td>{{$despacho->errores}}</td>
                        <td>{{$despacho->otros}}</td>
                        <td>{{$despacho->total}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>FECHA</th>
                      <th>ORDEN</th>
                      <th>EXPEDIENTES</th>
                      <th>COPIAS</th>
                      <th>ERRORES</th>
                      <th>OTROS</th>
                      <th>MTOTAL</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
</div>
@include('livewire.despachos.from')
@section('js')
<script>
$(function () {
$("#example1").DataTable({
  "paging": false,
  "lengthChange": false,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
  "responsive": true, "lengthChange": false, "autoWidth": false,
  "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
@stop
