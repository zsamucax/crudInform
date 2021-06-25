<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Computador
 *
 * @property $id
 * @property $nome
 * @property $preço
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Computador extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'preço' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','preço'];



}
