<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $dates = ['duedate'];

    public function milestone()
    {
      return $this->belongsTo(Milestone::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
