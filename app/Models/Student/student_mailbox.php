<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_mailbox extends Model
{
    use HasFactory;
    protected $table = 'student_mailbox';
   protected $primarykey='id';
   /**
    * Get the user that owns the student_mailbox
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function student()
   {
       return $this->belongsTo(student::class);
   }
}

