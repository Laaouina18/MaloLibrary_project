<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;
    
protected  $table='artist';
protected $primarykey='id' ;
protected $fillable = ['name', 'image', 'description', 'country', 'birthday', '_token'];
}
