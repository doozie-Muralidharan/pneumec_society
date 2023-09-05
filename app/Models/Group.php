<?php

namespace App\Models;

use App\Models\Ledger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;
    public $table = 'groups';

    public $fillable = [
        'group_name',
        'parent',
        'alias',
        'description',
        'nature_of_accounts_id',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'group_name' => 'string',
        'parent' => 'string',
        'alias' => 'string',
        'description' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    public static array $rules = [
        'group_name' => 'required',
        'parent',
        'alias' => 'required',
        'description' => 'required',
        'nature_of_accounts_id' => 'required',
        'created_by' => 'required',
        'updated_by' => 'required'
    ];

    public function ledgers()
    {
        return $this->hasMany(Ledger::class, 'group_id');
    }
}
