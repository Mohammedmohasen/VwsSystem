<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
     protected $table = 'student';
    protected $primarykey='id';

       public  function finish_report()
      {
        return $this->belongsTo(finish_report::class);
      }
    /**
     * Get all of the comments for the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student_mailbox()
    {
        return $this->hasMany(student_mailbox::class);
    }

    /**
     * Get the user associated with the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function suggest_initiative()
    {
        return $this->hasOne(suggest_initiative::class);
    }

    /**
     * Get the user associated with the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function volunteer()
    {
        return $this->hasOne(volunteer::class);
    }
    /**
     * Get the user associated with the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function request_to_volunteer_in_institution_std()
    {
        return $this->hasOne(request_to_volunteer_in_institution_std::class);
    }

    /**
     * Get the user associated with the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function request_to_volunteer_in_initiative_std()
    {
        return $this->hasOne(request_to_volunteer_in_initiative_std::class);
    }

    }
