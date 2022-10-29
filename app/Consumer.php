<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consumer extends Model
{
    use SoftDeletes;
    
    protected $table = 'consumer';

    protected $fillable = ['id', 'name', 'age', 'andress', 'age_up'];
}
