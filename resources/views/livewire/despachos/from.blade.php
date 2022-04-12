@include('common.modalhead')
<div class="row">
  <div class="col-sm-12">
    <div class="card-body">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-calendar-alt">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="fecha" class="form-control" placeholder="Fecha">
      </div>
      @error ('fecha') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-barcode">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="orden" class="form-control" placeholder="Orden">
      </div>
      @error ('orden') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-file-alt">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="expedientes" class="form-control" placeholder="Expedientes">
      </div>
      @error ('expedientes') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-copy">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="copias" class="form-control" placeholder="Copias">
      </div>
      @error ('copias') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-remove-format">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="errores" class="form-control" placeholder="errores">
      </div>
      @error ('errores') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-file-alt">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="otros" class="form-control" placeholder="otros">
      </div>
      @error ('otros') <span class="text-danger"{{$message }} </span> @enderror


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fas fa-dollar-sign">
            </span>
          </span>
        </div>
      <input type="text" wire:model.lazy="total" class="form-control" placeholder="Total">
      </div>
      @error ('total') <span class="text-danger"{{$message }} </span> @enderror

    </div>
  </div>
</div>
@include('common.modalfooter')
