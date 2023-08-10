<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
    protected $connection = 'mongodb'; 
    protected $collection = 'tasks';  

    protected $fillable = ['title', 'description', 'status', 'owner_id'];
}