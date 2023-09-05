<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShortTermLoanSetting extends Model
{
    use SoftDeletes;
    public $table = 'short_term_loan_settings';

    public $fillable = [
        'short_term_loan_interest',
        'min_loan_amount',
        'max_loan_amount'
    ];

    protected $casts = [
        'short_term_loan_interest' => 'string',
        'min_loan_amount' => 'string',
        'max_loan_amount' => 'string'
    ];

    public static array $rules = [
        'short_term_loan_interest' => 'required',
        'min_loan_amount' => 'required',
        'max_loan_amount' => 'required'
    ];
}
