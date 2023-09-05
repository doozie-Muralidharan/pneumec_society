<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = 'companies';

    public $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required'
    ];

    public function mainLocations()
    {
        return $this->hasMany(MainLocation::class, 'companyId');
    }


}
