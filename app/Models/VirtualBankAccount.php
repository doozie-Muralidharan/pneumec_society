<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualBankAccount extends Model
{
    use SoftDeletes;
    public $table = 'virtual_bank_accounts';

    public $fillable = [
        'accountId',
        'type',
        'amount',
        'workingClosingBalance',
        'imperestClosingBalance',
        'remarks'
    ];

    protected $casts = [
        'type' => 'string',                // Enum-like field, keep as string
        'amount' => 'float',               // Use float for numeric fields
        'workingClosingBalance' => 'float',
        'imperestClosingBalance' => 'float',
        'remarks' => 'string',
    ];

    public static array $rules = [
        'accountId' => 'required',
        'type' => 'required',
        'amount' => 'required',
        'workingClosingBalance' => 'required',
        'imperestClosingBalance' => 'required',
        'remarks' => 'required'
    ];
}
