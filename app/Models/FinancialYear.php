<?php

namespace App\Models;

use App\Models\ExpenseEntry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialYear extends Model
{
    use SoftDeletes;
    public $table = 'financial_years';

    public $fillable = [
        'name',
        'startDate',
        'endDate'
    ];

    protected $casts = [
        'name' => 'string',
        'startDate' => 'date',
        'endDate' => 'date'
    ];

    public static array $rules = [
        'name' => 'required',
        'startDate' => 'required',
        'endDate' => 'required'
    ];

    public function expense_entries()
    {
        return $this->hasMany(ExpenseEntry::class, 'financial_year_is');
    }
}
