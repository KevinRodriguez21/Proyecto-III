<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function Appointments(){
        return $this ->belongsTo(related: 'App\Models\Appointment',foreignKey: 'IdCita');
    }
}
