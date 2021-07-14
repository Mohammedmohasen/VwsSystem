<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_to_volunteer_in_initiative_std extends Model
{
    use HasFactory;
     protected $table = 'request_to_volunteer_in_initiative_std';
    protected $primarykey='id';

    public function initiative()
    {
        return $this->belongsTo(initiative::class);
    }

    /**
     * Get the user that owns the request_to_volunteer_in_initiative_std
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(student::class);
    }

}
