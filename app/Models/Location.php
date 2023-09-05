<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class Location extends Model
{
     use SoftDeletes;    public $table = 'locations';

    public $fillable = [
        'name',
        'officeId'
    ];

    protected $casts = [
        'name' => 'string',
        'officeId' => 'integer'
    ];

    public static array $rules = [
        'name' => 'required',
        'officeId' => 'required'
    ];

    public function office()
    {
        return $this->belongsTo(Office::class, 'officeId');
    }


}
