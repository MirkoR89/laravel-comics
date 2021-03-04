<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    /**
     * The comics that belong to the Drawer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
