<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table= 'personas';
    protected $primaryKey='persona_id';

    public $timestamps =false;


    public function getLibro(){

        return $this->hasOne(libro::class,'libro_id');
    }
}
