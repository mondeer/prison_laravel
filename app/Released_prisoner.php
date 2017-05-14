<?php

namespace prison;

use Illuminate\Database\Eloquent\Model;

class Released_prisoner extends Model
{
    protected $fillable = ['prisoner_id'];

    public function prisoners() {
      return $this->belongsTo('prison\Prisoner', 'prisoner_id');
    }
}
