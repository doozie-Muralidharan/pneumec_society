<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class GeneralLedger extends Model
{
     use SoftDeletes;    public $table = 'general_ledgers';

    public $fillable = [
        'financial_year_id',
        'ledger_id',
        'opening_balance_debits',
        'opening_balance_credits',
        'debits',
        'credits',
        'closing_balance',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'financial_year_id' => 'integer',
        'ledger_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    public static array $rules = [
        'financial_year_id' => 'required',
        'ledger_id' => 'required',
        'opening_balance_debits' => 'required',
        'opening_balance_credits' => 'required',
        'debits' => 'required',
        'credits' => 'required',
        'closing_balance' => 'required',
        'created_by' => 'required',
        'updated_by' => 'required'
    ];

    
}
