<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class Office extends Model
{
     use SoftDeletes;    public $table = 'offices';

    public $fillable = [
        'name',
        'mainLocationId'
    ];

    protected $casts = [
        'name' => 'string',
        'MainLocationId' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required',
        'mainLocationId' => 'required'
    ];

    public function mainLocation()
    {
        return $this->belongsTo(MainLocation::class, 'mainLocationId');
    }
    public function location()
    {
        return $this->hasOne(Location::class, 'officeId');
    }


}
