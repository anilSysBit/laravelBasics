<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
   //  use SoftDeletes;
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    // mutators
     public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);                                                                                                
     }

    //  accessors
     public function getDobAttribute($value){
        return date("d-M-Y",strtotime($value));
     }

     public function posts()
     {
         return $this->hasMany(Post::class, 'user_id', 'customer_id');
     }

}
