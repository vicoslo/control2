<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Despacho;
use Livewire\withPagination;
use Carbon\Carbon;


class Despachos extends Component
{
  public $pageTitle, $ComponentName, $selected_id;
  private $pagination = 50;

//inicializar propiedades
  public function mount()
  {
    $this->pageTitle = 'Indice';
    $this->ComponentName = 'Despachos';
  }

    public function render()
    {
      //$date = $date->format('Y-m-d');
      $now = Carbon::now();
      $mes = $now->format('Y-m');
      $hoy = $now->format('Y-m-d');

      //$dia= Despacho::whereDate('created_at', $hoy);
      $dia= Despacho::whereDate('fecha', 'like', $hoy)->orderby('orden', 'DESC')->paginate($this->pagination);
      $data= Despacho::whereDate('fecha', 'like', $mes.'%')->orderby('fecha', 'DESC')->paginate($this->pagination);
        return view('livewire.despachos.despachos', ['despachos'=>$data, 'dias'=> $dia])
            ->extends('layouts.app')
            ->section('content');
    }
}
