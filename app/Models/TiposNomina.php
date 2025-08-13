<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposNomina
 *
 * @property $id
 * @property $nomina
 * @property $descripcio
 * @property $borrado
 * @property $retener
 * @property $recibo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposNomina extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nomina', 'descripcio', 'borrado', 'retener', 'recibo'];


  
}
