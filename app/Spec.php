<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    /**
     * The comic that belong to the Specs
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsTo(Comic::class);
    }
}
