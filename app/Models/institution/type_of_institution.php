<?php

namespace App\Models\institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_of_institution extends Model
{
    use HasFactory;
    protected $table = 'type_of_institution';
    protected $primarykey='id';

    /**
     * Get all of the comments for the type_of_institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function institution()
    {
        return $this->hasMany(institution::class);
    }
}
