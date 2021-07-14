<?php

namespace App\Models\DOV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_announcement extends Model
{
    use HasFactory;
    protected $table = 'news_announcement';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';
      protected $fillable = [ 
          'news_or_announcement',
          'title',
          'body_text',
    ];
     
    public function department_of_volunteer()
    {
        return $this->belongsTo(department_of_volunteer::class);
    }
    
}
