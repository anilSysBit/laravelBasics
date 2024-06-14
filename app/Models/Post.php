<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Customer;

class Post extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public function customer(){
        return $this->belongsTo(Customer::class, 'user_id', 'customer_id');
    }
}
