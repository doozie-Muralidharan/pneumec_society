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
        $members = Member::where('status','draft')->get();
        $companies = Company::all();
        return view('member.index')->with('members', $members)->with('companies', $companies);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data

        // $request->validate([
        //     'name' => 'required',
        //     'fatherName' => 'required',
        //     'gender' => 'required',
        //     'religion' => 'required',
        //     'caste' => 'required',
        //     'phoneNumber' => 'required',
        //     'externalReferenceNumber' => 'required',
        //     'permanentAddress' => 'required',
        //     'temporaryAddress' => 'required',
        //     'aadharNumber' => 'required',
        //     'aadharUrl' => 'nullable',
        //     'panNumber' => 'required',
        //     'panUrl' => 'nullable',
        //     'companyId' => 'required',
        //     'officeId' => 'required',
        //     'mainLocationId' => 'required',
        //     'locationId' => 'required',
        //     'department' => 'required',
        //     'designation' => 'required',
        //     'bankDetails' => 'required',
        //     'nominee' => 'required',
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
    public function update(Request $request, $id)
    {
        // Validate the incoming request data

        // dd($request->all());

        $member = Member::find($id);

        // Update the member's attributes
        $member->name = $request->input('edit_name') ?? "";
        $member->fatherName = $request->input('edit_fatherName') ?? "";
        $member->gender = $request->input('edit_gender') ?? "male";
        $member->religion = $request->input('edit_religion') ?? "hindhu";
        $member->caste = $request->input('edit_caste') ?? "";
        $member->phoneNumber = $request->input('edit_phoneNumber') ?? "";
        $member->permanentAddress = $request->input('edit_permanentAddress') ?? "";
        $member->temporaryAddress = $request->input('edit_temporaryAddress') ?? "";
        $member->aadharNumber = $request->input('edit_aadharNumber') ?? "";
        $member->panNumber = $request->input('edit_panNumber') ?? "";
        $member->companyId = $request->input('edit_companyId') ?? null;
        $member->officeId = $request->input('edit_officeId') ?? null;
        $member->mainLocationId = $request->input('edit_mainLocationId') ?? null;
        $member->locationId = $request->input('edit_locationId') ?? null;
        $member->department = $request->input('edit_department') ?? "";
        $member->designation = $request->input('edit_designation') ?? "";
        $member->bankDetails = $request->input('edit_bankDetails') ?? "";
        $member->nominee = $request->input('edit_nominee') ?? "";

        // Upload and update aadharUrl file if provided
        if ($request->hasFile('edit_aadharUrl')) {
            $aadharUrlPath = $request->file('edit_aadharUrl')->store('uploads/aadhar');
            $member->aadharUrl = $aadharUrlPath;
        } else {
            $member->aadharUrl = "";
        }

        // Upload and update panUrl file if provided
        if ($request->hasFile('edit_panUrl')) {
            $panUrlPath = $request->file('edit_panUrl')->store('uploads/pan');
            $member->panUrl = $panUrlPath;
        } else{
            $member->panUrl = "";
        }

        // dd($request->$member);

        // Save the updated member to the database
        $member->save();

        return redirect()->route('members')->with('success', 'Member updated successfully');
    }

    public function send_for_verification(Request $request, $id)
    {
        $member = Member::find($id);

        if($member->status != 'draft')
        {
            return redirect()->back()->with('error', 'Member status should be draft');
        }
        else{
            $member->status = 'under_verification';
            $member->save();
        }
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

    public function getMainLocations()
    {
        $mainLocations = MainLocation::all();
        return response()->json($mainLocations);
    }
    public function getOffices()
    {
        $offices = Office::all();
        return response()->json($offices);
    }
    public function getLocations()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function profile(Request $request)
    {
        $file = $request->file('file');
        $path = $request->input('path');

        if (!$file) {
            return $this->sendError('No file uploaded');
        }

        //Generate unique filename to avoid overwrite
        $filename = uniqid() . '_' . $file->getClientOriginalName();

        //store the file in specified path
        $storePath = $file->storeAs('uploads/' . $path, $filename, 'uploads');

        return $this->sendResponse(['path' => $storePath], 'File uploaded successfully');
    }
}
