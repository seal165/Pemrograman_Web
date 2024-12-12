<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['transportation', 'region', 'date','name', 'from_location', 'to_location', 'time'];
    public $timestamps = false;
}