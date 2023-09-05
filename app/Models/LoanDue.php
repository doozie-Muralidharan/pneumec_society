<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanDue extends Model
{
    use SoftDeletes;
    public $table = 'loan_dues';

    public $fillable = [
        'loanId',
        'principalAmount',
        'interestAmount',
        'paidPrincipalAmount',
        'paidInterestAmount',
        'remainingLoanPrincipalAmount',
        'paid',
        'demanded',
        'paymentDate'
    ];

    protected $casts = [
        'loanId' => 'integer',
        'paid' => 'boolean',
        'demanded' => 'boolean',
        'paymentDate' => 'date'
    ];

    public static array $rules = [
        'loanId' => 'required',
        'principalAmount' => 'required',
        'interestAmount' => 'required',
        'paidPrincipalAmount' => 'required',
        'paidInterestAmount' => 'required',
        'remainingLoanPrincipalAmount' => 'required',
        'paid' => 'required',
        'demanded' => 'required',
        'paymentDate' => 'required'
    ];

    public function loan_type()
    {
        return $this->belongsTo(LoanType::class, 'loanId');
    }
}
