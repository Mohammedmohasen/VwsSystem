<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suggest_initiative extends Model
{
    use HasFactory;
    protected $table = 'suggest_initiative';
    protected $primarykey='id';
    /**
     * Get the user that owns the suggest_initiative
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
