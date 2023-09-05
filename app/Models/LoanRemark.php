<?php

namespace App\Models;

use App\Models\LoanType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanRemark extends Model
{
    use SoftDeletes;
    public $table = 'loan_remarks';

    public $fillable = [
        'loanId',
        'status_from',
        'status_to',
        'remark'
    ];

    protected $casts = [
        'loanId' => 'integer',
        'status_from' => 'string',
        'status_to' => 'string',
        'remark' => 'string'
    ];

    public static array $rules = [
        'loanId' => 'required',
        'status_from' => 'required',
        'status_to' => 'required',
        'remark' => 'required'
    ];

    public function loan_type()
    {
        return $this->belongsTo(LoanType::class, 'loanId');
    }
}
