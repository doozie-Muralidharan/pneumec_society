<?php

namespace App\Models;

use App\Models\LoanDue;
use App\Models\LoanRemark;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanType extends Model
{
    use SoftDeletes;
    public $table = 'loan_types';

    public $fillable = [
        'loan_type',
        'memberId',
        'sanctionDate',
        'principalAmount',
        'loanDurationInMonths',
        'interestRatePerAnnum',
        'interestAmount',
        'totalAmount',
        'remainingTenureInMonths',
        'remainingPrincipalAmount',
        'remainingInterestAmount',
        'status',
        'maximumNumberOfGuarantors',
        'minimumNumberOfGuarantors',
        'purposeOfLoan'
    ];

    protected $casts = [
        'loan_type' => 'string',
        'memberId' => 'integer',
        'sanctionDate' => 'date',
        'principalAmount' => 'integer',
        'loanDurationInMonths' => 'integer',
        'interestRatePerAnnum' => 'integer',
        'interestAmount' => 'integer',
        'totalAmount' => 'integer',
        'remainingTenureInMonths' => 'integer',
        'status' => 'string',
        'maximumNumberOfGuarantors' => 'integer',
        'minimumNumberOfGuarantors' => 'integer',
        'purposeOfLoan' => 'integer'
    ];

    public static array $rules = [
        'loan_type' => 'required',
        'memberId' => 'required',
        'sanctionDate' => 'required',
        'principalAmount' => 'required',
        'loanDurationInMonths' => 'required',
        'interestRatePerAnnum' => 'required',
        'interestAmount' => 'required',
        'totalAmount' => 'required',
        'remainingTenureInMonths' => 'required',
        'remainingPrincipalAmount' => 'required',
        'remainingInterestAmount' => 'required',
        'status' => 'required',
        'maximumNumberOfGuarantors' => 'required',
        'minimumNumberOfGuarantors' => 'required',
        'purposeOfLoan' => 'required'
    ];

    public function loan_remarks()
    {
        return $this->hasMany(LoanRemark::class, 'loanId');
    }
    public function loan_dues()
    {
        return $this->hasMany(LoanDue::class, 'loanId');
    }
    public function loan_guarantors()
    {
        return $this->hasMany(LoanGuarantors::class, 'loanId');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'memberId');
    }
}
