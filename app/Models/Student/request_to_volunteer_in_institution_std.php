<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_to_volunteer_in_institution_std extends Model
{
    use HasFactory;
     protected $table = 'request_to_volunteer_in_institution_std';
     protected $primarykey='id';

    /**
     * Get the user that owns the request_to_volunteer_in_institution_std
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution()
    {
        return $this->belongsTo(institution::class);
    }
     
    /**
     * Get the user that owns the request_to_volunteer_in_institution_std
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    }
