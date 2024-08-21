<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PartnersModel extends Model
{
   
	
    const PARTNER_ENABLE = 'Enable';

    const PARTNER_DISABLE = 'Disable';
	
	protected $table = 'partners_models';
	
	public function scopePosition($query)
    {
        return $query->orderBy('position', 'desc');
    }
	
	public function scopeStatus($query)
    {
        return $query->where('status', self::PARTNER_ENABLE);
    }
	
	public function getLogoAttribute($value)
    {
        return asset(config('constants.partners') . '' . $value);
    }
}
