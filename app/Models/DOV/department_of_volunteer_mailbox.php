<?php

namespace App\Models\DOV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_of_volunteer_mailbox extends Model
{
    use HasFactory;
        protected $table = 'department_of_volunteer_mailbox';


     public function department_of_volunteer()
    {
        return $this->belongsTo(department_of_volunteer::class);
    }
}
