<?php

namespace App\Models\institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution_statistics extends Model
{
    use HasFactory;
     protected $table = 'institution_statistics';
     protected $primarykey='id';
     
     /**
      * Get the user that owns the institution_statistics
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function institution()
     {
         return $this->belongsTo(institution::class);
     }
}
