<?php

namespace App\Models;

use App\Http\Controllers\Bookables;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // we need to tell laravel that this model is not using a primary key 
    //that is autoincrementing, but uuid
    public function getIncrementing()
    {
        return false; // So laravel knows that is not autoincementing
    }
    //redefining the key type  with the below method
    public function getKeyType()
    {
        return 'string';
    }

    public function bookable(){
        return $this->belongsTo(Bookable::class);
    }
    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}
