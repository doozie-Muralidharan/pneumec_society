<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    public $table = 'members';

    public $fillable = [
        'userId',
        'memberId',
        'status',
        'applicationStatus',
        'applicationRemarks',
        'name',
        'fatherName',
        'religion',
        'caste',
        'phoneNumber',
        'externalReferenceNumber',
        'permanentAddress',
        'temporaryAddress',
        'aadharNumber',
        'aadharUrl',
        'panNumber',
        'panUrl',
        'companyId',
        'officeId',
        'mainLocationId',
        'locationId',
        'department',
        'designation',
        'bankDetails',
        'nominee'
    ];





    public function loan_types()
    {
        return $this->hasMany(LoanType::class, 'memberId');
    }
    public function guarantors()
    {
        return $this->hasMany(LoanGuarantors::class, 'memberId');
    }
}
