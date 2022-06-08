<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countri extends Model
{
    use HasFactory;
 
        public function user()
        {
            // retorna pertenece a usuario y su id.
            return $this->belongsTo('User', 'user_id');
        }

        /* this function belongsTo user and country manage */

      /*   public function FunctionName(Type $var = null)
        {
            # code...
        } */
    }
