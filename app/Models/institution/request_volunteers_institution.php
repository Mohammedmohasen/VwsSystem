<?php

namespace App\Models\institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_volunteers_institution extends Model
{
    use HasFactory;
    protected $table = 'request_volunteers_institution';
    protected $primarykey='id';

    /**
     * Get the user that owns the request_volunteers_institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution()
    {
        return $this->belongsTo(institution::class);
    }
}
