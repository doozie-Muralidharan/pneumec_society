<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    public function create()
    {
        return view('company_details.index');
    }
}
