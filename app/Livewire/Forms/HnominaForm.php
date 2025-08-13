<?php

namespace App\Livewire\Forms;

use App\Models\Hnomina;
use Livewire\Form;

class HnominaForm extends Form
{
    public ?Hnomina $hnominaModel;
    
    public $udp = '';
    public $ct = '';
    public $filiacio = '';
    public $curp = '';
    public $nombre = '';
    public $plaza = '';
    public $mot_pla = '';
    public $stat_pla = '';
    public $desde = '';
    public $hasta = '';
    public $cheque = '';
    public $importe = '';
    public $ufecmov = '';
    public $usuario = '';
    public $vstatus = '';
    public $nomina = '';
    public $quincena = '';
    public $area = '';
    public $tipocheque = '';
    public $sede = '';
    public $banco = '';
    public $fpago = '';
    public $imprimir = '';
    public $estadop = '';
    public $tiponomina = '';
    public $numnomina = '';
    public $quincena2 = '';

    public function rules(): array
    {
        return [
			'udp' => 'required',
			'ct' => 'required',
			'filiacio' => 'required',
			'curp' => 'required',
			'nombre' => 'required',
			'plaza' => 'required',
			'mot_pla' => 'required',
			'stat_pla' => 'required',
			'desde' => 'required',
			'hasta' => 'required',
			'cheque' => 'required',
			'importe' => 'required',
			'usuario' => 'required',
			'vstatus' => 'required',
			'nomina' => 'required',
			'quincena' => 'required',
			'area' => 'required',
			'tipocheque' => 'required',
			'sede' => 'required',
			'banco' => 'required',
			'fpago' => 'required',
			'imprimir' => 'required',
			'estadop' => 'required',
			'tiponomina' => 'required',
			'numnomina' => 'required',
			'quincena2' => 'required',
        ];
    }

    public function setHnominaModel(Hnomina $hnominaModel): void
    {
        $this->hnominaModel = $hnominaModel;
        
        $this->udp = $this->hnominaModel->udp;
        $this->ct = $this->hnominaModel->ct;
        $this->filiacio = $this->hnominaModel->filiacio;
        $this->curp = $this->hnominaModel->curp;
        $this->nombre = $this->hnominaModel->nombre;
        $this->plaza = $this->hnominaModel->plaza;
        $this->mot_pla = $this->hnominaModel->mot_pla;
        $this->stat_pla = $this->hnominaModel->stat_pla;
        $this->desde = $this->hnominaModel->desde;
        $this->hasta = $this->hnominaModel->hasta;
        $this->cheque = $this->hnominaModel->cheque;
        $this->importe = $this->hnominaModel->importe;
        $this->ufecmov = $this->hnominaModel->ufecmov;
        $this->usuario = $this->hnominaModel->usuario;
        $this->vstatus = $this->hnominaModel->vstatus;
        $this->nomina = $this->hnominaModel->nomina;
        $this->quincena = $this->hnominaModel->quincena;
        $this->area = $this->hnominaModel->area;
        $this->tipocheque = $this->hnominaModel->tipocheque;
        $this->sede = $this->hnominaModel->sede;
        $this->banco = $this->hnominaModel->banco;
        $this->fpago = $this->hnominaModel->fpago;
        $this->imprimir = $this->hnominaModel->imprimir;
        $this->estadop = $this->hnominaModel->estadop;
        $this->tiponomina = $this->hnominaModel->tiponomina;
        $this->numnomina = $this->hnominaModel->numnomina;
        $this->quincena2 = $this->hnominaModel->quincena2;
    }

    public function store(): void
    {
        $this->hnominaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->hnominaModel->update($this->validate());

        $this->reset();
    }
}
