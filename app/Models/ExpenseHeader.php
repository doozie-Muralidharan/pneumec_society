<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class ExpenseHeader extends Model
{
     use SoftDeletes;    public $table = 'expense_headers';

    public $fillable = [
        'name',
        'code',
        'description'
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'code' => 'required',
        'description' => 'required'
    ];

    
}
