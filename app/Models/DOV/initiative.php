<?php

namespace App\Models\DOV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class initiative extends Model
{
    use HasFactory;
     protected $table = 'initiative';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';


    public function Request_to_Volunteer_in_Initiative_std()
    {
        return $this->hasOne(Request_to_Volunteer_in_Initiative_std::class);
    }

    public function department_of_volunteer()
    {
        return $this->belongsTo(department_of_volunteer::class);
    }

}
