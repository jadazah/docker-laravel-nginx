<?php

namespace App\Livewire\Hnominas;

use App\Models\Hnomina;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $hnominas = Hnomina::paginate();

        return view('livewire.hnomina.index', compact('hnominas'))
            ->with('i', $this->getPage() * $hnominas->perPage());
    }

    public function delete(Hnomina $hnomina)
    {
        $hnomina->delete();

        return $this->redirectRoute('hnominas.index', navigate: true);
    }
}
