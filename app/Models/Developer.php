<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Developer
 *
 * @property $id
 * @property $name
 * @property $document_number
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Developer extends Model
{
    
    static $rules = [
		'name' => 'required',
		'document_number' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','document_number','phone'];



}
