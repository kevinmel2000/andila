<?php

namespace App\Models\Indonesia;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'indonesia';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    	'id'
    ];

    /**
     * Get the districts located in the regency.
     */
    public function districts()
    {
        return $this->hasMany('App\Models\Indonesia\District');
    }

    /**
     * Scope a query to only include regencies that are located in specific province, identified by its ID.
     *
     * @return Builder
     */
    public function scopeOfProvince($query, $id)
    {
        return $query->where('province_id', $id);
    }
}
