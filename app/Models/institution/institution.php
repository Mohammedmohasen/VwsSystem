<?php

namespace App\Models\institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    use HasFactory;
    protected $table = 'institution';


     public function department_of_volunteer()
    {
        return $this->belongsTo(department_of_volunteer::class);
    }

   /**
    * Get all of the comments for the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function finish_report()
   {
       return $this->hasMany(finish_report::class);
   }

   /**
    * Get the user associated with the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function request_to_volunteer_in_institution_std()
   {
       return $this->hasOne(request_to_volunteer_in_institution_std::class);
   }

   /**
    * Get the user associated with the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function institution_statistics()
   {
       return $this->hasOne(institution_statistics::class);
   }
   /**
    * Get all of the comments for the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function institution_mailbox()
   {
       return $this->hasMany(institution_mailbox::class);
   }

   /**
    * Get all of the comments for the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function request_volunteers_institution()
   {
       return $this->hasMany(request_volunteers_institution::class);
   }

   /**
    * Get the user that owns the institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function type_of_institution()
   {
       return $this->belongsTo(type_of_institution::class);
   }
}
