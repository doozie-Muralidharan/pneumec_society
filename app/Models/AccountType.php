<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountType extends Model
{
    use SoftDeletes;
    public $table = 'account_types';

    public $fillable = [
        'account_type',
        'description'
    ];

    protected $casts = [
        'account_type' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'account_type' => 'required',
        'description' => 'required'
    ];
}
