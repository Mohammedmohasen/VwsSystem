<?php

namespace App\Models\DOV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_of_volunteer extends Model
{
    use HasFactory;
     protected $table = 'department_of_volunteer';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';
    // has many news the column called dov id because multiple admin can add news so the system shoould know whos send or make the news

     public function Volunteer()
    {
        return $this->hasMany(Volunteer::class);
    }

     public function Department_of_Volunteer_MailBox()
    {
        return $this->hasMany(Department_of_Volunteer_MailBox::class);
    }

     public function News_Announcement()
    {
        return $this->hasMany(News_Announcement::class);
    }

     public function Department_of_Volunteer_Seasonal_Statistics()
    {
        return $this->hasMany(Department_of_Volunteer_Seasonal_Statistics::class);
    }

     public function Department_of_Volunteer_Statistics()
    {
        return $this->hasMany(Department_of_Volunteer_Statistics::class);
    }


     public function Institution()
    {
        return $this->hasMany(Institution::class);
    }

      public function Initiative()
    {
        return $this->hasMany(Initiative::class);
    }
}
