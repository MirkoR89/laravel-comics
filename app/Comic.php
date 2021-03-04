<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    /**
     * The specs that belong to the Comic
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function specs()
    {
        return$this->hasOne(Spec::class);
    }

    /**
     * The writers that belong to the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function writers()
    {
        return $this->belongsToMany(Writer::class);
    }

    /**
     * The drawers that belong to the Comic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function drawers()
    {
        return $this->belongsToMany(Drawer::class);
    }


}
