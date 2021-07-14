<?php

namespace App\Models\DOV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finish_report extends Model
{
    use HasFactory;
     protected $table = 'finish_report';

      public  function student()
      {
        return $this->hasOne(student::class);
      }

       /**
        * Get the user that owns the finish_report
        *
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
       public function institution()
       {
           return $this->belongsTo(institution::class);
       }
}
