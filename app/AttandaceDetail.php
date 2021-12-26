<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttandaceDetail extends Model
{
    protected $guarded = [];
    /**
     * Get the attendance that owns the AttandaceDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attendance()
    {
        return $this->belongsTo(attendance::class);
    }
}
