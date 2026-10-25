<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    protected $table = 'innovations';
    protected $fillable = ['category_id', 'title', 'description', 'status'];
}
