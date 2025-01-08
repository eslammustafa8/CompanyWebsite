<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    // protected $fillable =[''];
   // if the name of the table is different from the model name

    protected $table="subscribers";

   //? to make all fields mass assignable else id
    protected $guarded=['id'];

}
