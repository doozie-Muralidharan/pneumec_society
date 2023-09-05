<?php

namespace App\Models;

use App\Models\LoanType;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanGuarantors extends Model
{
    use SoftDeletes;
    public $table = 'loan_guarantors';

    public $fillable = [
        'memberId',
        'loanId',
        'fromDate',
        'toDate'
    ];

    protected $casts = [
        'memberId' => 'integer',
        'loanId' => 'integer',
        'fromDate' => 'date',
        'toDate' => 'date'
    ];

    public static array $rules = [
        'memberId' => 'required',
        'loanId' => 'required',
        'fromDate' => 'required',
        'toDate' => 'required'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'memberId');
    }
    public function loan_type()
    {
        return $this->belongsTo(LoanType::class, 'loanId');
    }
}
