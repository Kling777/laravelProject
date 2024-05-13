<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $tables = 'industries';
    protected $primaryKey = 'id';
    protected $fillable = ['company','address','leader'];
}
