<?php

namespace App\Models\institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution_mailbox extends Model
{
    use HasFactory;
    protected $table = 'institution_mailbox';
   protected $primarykey='id';
   /**
    * Get the user that owns the institution_mailbox
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function institution()
   {
       return $this->belongsTo(institution::class);
   }

}
