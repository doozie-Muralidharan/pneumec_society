<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class LongTermLoanSetting extends Model
{
     use SoftDeletes;    public $table = 'long_term_loan_settings';

    public $fillable = [
        'long_term_loan_interest',
        'min_loan_amount',
        'max_loan_amount',
        'number_of_guarantors'
    ];

    protected $casts = [
        'long_term_loan_interest' => 'string',
        'min_loan_amount' => 'string',
        'max_loan_amount' => 'string',
        'number_of_guarantors' => 'string'
    ];

    public static array $rules = [
        'long_term_loan_interest' => 'required',
        'min_loan_amount' => 'required',
        'max_loan_amount' => 'required',
        'number_of_guarantors' => 'required'
    ];

    
}
