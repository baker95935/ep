<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Milestone extends Model
{
    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    protected $dates = ['duedate'];
}
