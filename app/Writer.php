<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    /**
     * The comics that belong to the Writer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
