<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = ['title', 'description', 'cover', 'banner', 'available', 'series', 'price', 'on_sale_date', 'volume_issue', 'trim_size', 'page_count', 'rated', 'drawers', 'writers'];

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
