<?php

namespace App\Models\Personas;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function user(){
        $user = User::find($this->user_id);

        return $this->belongsTo(User::class);
    }
}
