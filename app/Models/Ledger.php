<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ledger extends Model
{
    use SoftDeletes;
    public $table = 'ledgers';

    public $fillable = [
        'ledger_name',
        'group_id',
        'account_type_id',
        'frozen',
        'balance_must_be',
        'description',
        'editable_flag',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'ledger_name' => 'string',
        'group_id' => 'integer',
        'account_type_id' => 'integer',
        'frozen' => 'integer',
        'balance_must_be' => 'integer',
        'description' => 'string',
        'editable_flag' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    public static array $rules = [
        'ledger_name' => 'required',
        'group_id' => 'required',
        'account_type_id' => 'required',
        'frozen' => 'required',
        'balance_must_be' => 'required',
        'description' => 'required',
        'editable_flag' => 'required',
        'created_by' => 'required',
        'updated_by' => 'required'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
