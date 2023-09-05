<?php

namespace App\Models;

use App\Models\FinancialYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseEntry extends Model
{
    use SoftDeletes;
    public $table = 'expense_entries';

    public $fillable = [
        'financial_year_id',
        'paid_from_id',
        'paid_to',
        'voucher_number',
        'voucher_date',
        'expense_date',
        'mode_of_payment',
        'expense_type',
        'type',
        'cheque_ref_id',
        'cheque_ref_date',
        'project_details_id',
        'bill_no',
        'attachment',
        'narration',
        'outward_petty_cash_id',
        'confirm_flag',
        'created_by',
        'updated_by',
        'confirmed_by',
        'confirmed_at'
    ];

    protected $casts = [
        'financial_year_id' => 'integer',
        'paid_from_id' => 'integer',
        'paid_to' => 'string',
        'voucher_date' => 'date',
        'expense_date' => 'date',
        'mode_of_payment' => 'integer',
        'expense_type' => 'integer',
        'type' => 'integer',
        'cheque_ref_id' => 'string',
        'cheque_ref_date' => 'date',
        'project_details_id' => 'integer',
        'bill_no' => 'string',
        'attachment' => 'string',
        'narration' => 'string',
        'outward_petty_cash_id' => 'integer',
        'confirm_flag' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'confirmed_by' => 'integer',
        'confirmed_at' => 'string'
    ];

    public static array $rules = [
        'financial_year_id' => 'required',
        'paid_from_id' => 'required',
        'paid_to' => 'required',
        'voucher_number' => 'required',
        'voucher_date' => 'required',
        'expense_date' => 'required',
        'mode_of_payment' => 'required',
        'expense_type' => 'required',
        'type' => 'required',
        'cheque_ref_id' => 'required',
        'cheque_ref_date' => 'required',
        'project_details_id' => 'required',
        'bill_no' => 'required',
        'attachment' => 'required',
        'narration' => 'required',
        'outward_petty_cash_id' => 'required',
        'confirm_flag' => 'required',
        'created_by' => 'required',
        'updated_by' => 'required',
        'confirmed_by' => 'required',
        'confirmed_at' => 'required'
    ];

    public function financial_year()
    {
        return $this->belongsTo(FinancialYear::class, 'financial_year_id');
    }
}
