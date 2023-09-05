<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Location;
use App\Models\MainLocation;
use App\Models\Member;
use App\Models\Office;
use Illuminate\Http\Request;

class MemberRegistrationController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $companies = Company::all();
        return view('member.index')->with('members', $members)->with('companies', $companies);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'fatherName' => 'required|string|max:255',
        //     'gender' => 'required|in:male,female,other',
        //     'religion' => 'required|string|in:hindhu,muslim,christian,sikh,jain,buddhist,parsi,other',
        //     'caste' => 'required|string|max:255',
        //     'phoneNumber' => 'required|string|max:255',
        //     'externalReferenceNumber' => 'required|string|max:255',
        //     'permanentAddress' => 'required|string|max:255',
        //     'temporaryAddress' => 'required|string|max:255',
        //     'aadharNumber' => 'required|string|max:255',
        //     'aadharUrl' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
        //     'panNumber' => 'required|string|max:255',
        //     'panUrl' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
        //     'companyId' => 'required|integer',
        //     'officeId' => 'required|integer',
        //     'mainLocationId' => 'required|integer',
        //     'locationId' => 'required|integer',
        //     'department' => 'required|string|max:255',
        //     'designation' => 'required|string|max:255',
        //     'bankDetails' => 'required|string',
        //     'nominee' => 'required|string',
        // ]);
        // dd($request->all());

        // Create a new Member instance and populate it with the validated data
        $member = new Member([
            'name' => $request->input('name'),
            'fatherName' => $request->input('fatherName'),
            'gender' => $request->input('gender'),
            'religion' => $request->input('religion'),
            'caste' => $request->input('caste'),
            'phoneNumber' => $request->input('phoneNumber'),
            'externalReferenceNumber' => $request->input('externalReferenceNumber'),
            'permanentAddress' => $request->input('permanentAddress'),
            'temporaryAddress' => $request->input('temporaryAddress'),
            'aadharNumber' => $request->input('aadharNumber'),
            'panNumber' => $request->input('panNumber'),
            'companyId' => $request->input('companyId'),
            'officeId' => $request->input('officeId'),
            'mainLocationId' => $request->input('mainLocationId'),
            'locationId' => $request->input('locationId'),
            'department' => $request->input('department'),
            'designation' => $request->input('designation'),
            'bankDetails' => $request->input('bankDetails'),
            'nominee' => $request->input('nominee'),
        ]);

        // Upload and store aadharUrl file if provided
        if ($request->hasFile('aadharUrl')) {
            $aadharUrlPath = $request->file('aadharUrl')->store('uploads/aadhar');
            $member->aadharUrl = $aadharUrlPath;
        }

        // Upload and store panUrl file if provided
        if ($request->hasFile('panUrl')) {
            $panUrlPath = $request->file('panUrl')->store('uploads/pan');
            $member->panUrl = $panUrlPath;
        }

        // Save the member to the database
        $member->save();

        return redirect()->route('members')->with('success', 'Member created successfully');
    }

    public function fetchOffices(Request $request)
    {
        $offices = Office::where('mainLocationId', $request->mainLocationId)->pluck('name', 'id');
        return response()->json($offices);
    }

    public function fetchMainLocations(Request $request)
    {
        $mainLocations = MainLocation::where('companyId', $request->companyId)->pluck('name', 'id');
        return response()->json($mainLocations);
    }

    public function fetchLocations(Request $request)
    {
        $locations = Location::where('officeId', $request->officeId)->pluck('name', 'id');
        return response()->json($locations);
    }
}
