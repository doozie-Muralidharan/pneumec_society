<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainLocation extends Model
{
    public $table = 'main_locations';

    public $fillable = [
        'name',
        'companyId'
    ];

    protected $casts = [
        'name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'companyId' => 'required'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }
    public function offices()
    {
        return $this->hasMany(Office::class, 'mainLocationId');
    }


}
