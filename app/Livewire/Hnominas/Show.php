<?php

namespace App\Livewire\Hnominas;

use App\Livewire\Forms\HnominaForm;
use App\Models\Hnomina;
use Livewire\Component;

class Show extends Component
{
    public HnominaForm $form;

    public function mount(Hnomina $hnomina)
    {
        $this->form->setHnominaModel($hnomina);
    }

    public function render()
    {
        return view('livewire.hnomina.show', ['hnomina' => $this->form->hnominaModel]);
    }
}
