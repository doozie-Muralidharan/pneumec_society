<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class GeneralTransaction extends Model
{
     use SoftDeletes;    public $table = 'general_transactions';

    public $fillable = [
        'project_detail_id',
        'financial_year_id',
        'party_type',
        'party_id',
        'type',
        'source_id',
        'voucher_no',
        'voucher_date',
        'transaction_date',
        'narration',
        'ledger_id',
        'opening_balance_debits',
        'opening_balance_credits',
        'debits',
        'credits',
        'closing_balance',
        'isConfirmed',
        'created_by'
    ];

    protected $casts = [
        'project_detail_id' => 'integer',
        'financial_year_id' => 'integer',
        'party_type' => 'integer',
        'party_id' => 'integer',
        'type' => 'integer',
        'source_id' => 'integer',
        'voucher_date' => 'date',
        'voucher_no' => 'string',
        'transaction_date' => 'date',
        'narration' => 'string',
        'ledger_id' => 'integer',
        'isConfirmed' => 'integer',
        'created_by' => 'integer'
    ];

    public static array $rules = [
        'project_detail_id' => 'required',
        'financial_year_id' => 'required',
        'party_type' => 'required',
        'party_id' => 'required',
        'type' => 'required',
        'source_id' => 'required',
        'voucher_date' => 'required',
        'voucher_no' => 'required',
        'transaction_date' => 'required',
        'narration' => 'required',
        'ledger_id' => 'required',
        'opening_balance_debits' => 'required',
        'opening_balance_credits' => 'required',
        'debits' => 'required',
        'credits' => 'required',
        'closing_balance' => 'required',
        'isConfirmed' => 'required',
        'created_by' => 'required'
    ];


}
