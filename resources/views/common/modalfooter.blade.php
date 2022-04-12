</div>
<div class="modal-footer justify-content-between">
<button type="button" wire:click.prevent="resetUI()" class="btn btn-default close-btn" data-dismiss="modal">Cerrar</button>
@if($selected_id < 1)
<button type="button" wire:clickprevent="Store()" class="btn btn-primary"  data-dismiss="modal">Guardar</button>
@else
<button type="button" wire:clickprevent="Update()" class="btn btn-primary"  data-dismiss="modal">Actualizar</button>
@endif
</div>
</div>
</div>
</div>
