<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrasiImg extends Model
{

    protected $table = 'registrasi_image';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable  = ['id', 'nama'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Promo(){ 
        return $this->hasMany('App\Models\Promo', 'idmotor'); 
    }
        
    }