<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];
    
    /**
     * Get all of the detail for the Attendance
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail()
    {
        return $this->hasMany(AttandaceDetail::class);
    }
}
