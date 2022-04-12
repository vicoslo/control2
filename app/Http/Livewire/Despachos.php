<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Despacho;
use Livewire\withPagination;

class Despachos extends Component
{
  public $pageTitle, $ComponentName, $selected_id;
  private $pagination = 25;

//inicializar propiedades
  public function mount()
  {
    $this->pageTitle = 'Indice';
    $this->ComponentName = 'Despachos';
  }

    public function render()
    {
      $data= Despacho::all();
        return view('livewire.despachos.despachos', ['despachos'=>$data])
            ->extends('layouts.app')
            ->section('content');
    }
}
