<?php

namespace App\Models;

use Dba\Connection;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    protected $fillable = [
        'tracking_id',
        'country',
        'state',
        'condition',
    ];
    protected $table = 'histories';
    public function tracking()
    {
        return $this->belongsTo(TrackingCode::class, 'tracking_code_id');
    }
}
