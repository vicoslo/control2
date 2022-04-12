<div whire:ignore.self class="modal fade" id="theModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title text-white">
 <b>{{$ComponentName}}</b> | {{$selected_id > 0 ? 'Editar' : 'Crear'}}
</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h6class="text-center text-warning" wire:loading> Procesando</h6>
</div>
<div class="modal-body">
