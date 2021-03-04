<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    /**
     * The comics that belong to the Specs
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}
