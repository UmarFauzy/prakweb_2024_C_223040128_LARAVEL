<?php  

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class post extends Model
{
    protected $fillable = ['tittle', 'author', 'slug', 'body'];
}