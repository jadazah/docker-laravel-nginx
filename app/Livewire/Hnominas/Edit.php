<?php

namespace App\Livewire\Hnominas;

use App\Livewire\Forms\HnominaForm;
use App\Models\Hnomina;
use Livewire\Component;

class Edit extends Component
{
    public HnominaForm $form;

    public function mount(Hnomina $hnomina)
    {
        $this->form->setHnominaModel($hnomina);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('hnominas.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.hnomina.edit');
    }
}
