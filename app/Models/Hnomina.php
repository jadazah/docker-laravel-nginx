<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hnomina
 *
 * @property $id
 * @property $udp
 * @property $ct
 * @property $filiacio
 * @property $curp
 * @property $nombre
 * @property $plaza
 * @property $mot_pla
 * @property $stat_pla
 * @property $desde
 * @property $hasta
 * @property $cheque
 * @property $importe
 * @property $ufecmov
 * @property $usuario
 * @property $vstatus
 * @property $nomina
 * @property $quincena
 * @property $area
 * @property $tipocheque
 * @property $sede
 * @property $banco
 * @property $fpago
 * @property $imprimir
 * @property $estadop
 * @property $tiponomina
 * @property $numnomina
 * @property $quincena2
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hnomina extends Model
{
    
    protected $perPage = 15;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['udp', 'ct', 'filiacio', 'curp', 'nombre', 'plaza', 'mot_pla', 'stat_pla', 'desde', 'hasta', 'cheque', 'importe', 'ufecmov', 'usuario', 'vstatus', 'nomina', 'quincena', 'area', 'tipocheque', 'sede', 'banco', 'fpago', 'imprimir', 'estadop', 'tiponomina', 'numnomina', 'quincena2'];

    

}
