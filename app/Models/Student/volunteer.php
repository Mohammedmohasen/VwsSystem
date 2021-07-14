<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteer';

     protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    
     public function department_of_volunteer()
    {
        return $this->belongsTo(department_of_volunteer::class);
    }
    
    /**
     * Get the user that owns the volunteer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
