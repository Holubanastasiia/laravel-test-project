<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
