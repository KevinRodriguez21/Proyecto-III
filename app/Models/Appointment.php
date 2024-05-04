<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function Patients(){
        return$this->hasMany('App\Models\Patient', foreignKey: 'IdCita');
    }

    public function Doctors(){
        return $this ->belongsTo(related: 'App\Models\Doctor',foreignKey: 'IdDoctor');
    }

}
