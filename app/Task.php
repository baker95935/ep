<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function milestone(){

      return $this->belongsTo(Milestone::class);

    }
}
