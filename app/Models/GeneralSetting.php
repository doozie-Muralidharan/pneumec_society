<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class GeneralSetting extends Model
{
     use SoftDeletes;    public $table = 'general_settings';

    public $fillable = [
        'registration_share_amnount',
        'registration_amount',
        'share_fee',
        'compulsory_deposit_amount'
    ];

    protected $casts = [
        'registration_share_amnount' => 'string',
        'share_fee' => 'string',
        'compulsory_deposit_amount' => 'string'
    ];

    public static array $rules = [
        'registration_share_amnount' => 'required',
        'registration_amount' => 'required',
        'share_fee' => 'required',
        'compulsory_deposit_amount' => 'required'
    ];


}
