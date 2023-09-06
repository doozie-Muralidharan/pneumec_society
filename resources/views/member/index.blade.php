@extends('home.layouts.main')
@section('content')
    <div class="h-100 flex-1 p-6 mt-16 bg-gray-100">
        <div class="flex justify-between items-center">
            <!-- Left Side (Search Input and Button) -->
            <div class="flex-1 pr-4">
                <div class="relative flex items-center space-x-4">
                    <input type="text"
                        class="w-1/2 h-10 px-16 py-6 rounded-lg border border-gray-300 focus:outline-none focus:border-primary"
                        placeholder="Search">
                    <button
                        class="px-12 py-3 rounded-lg bg-gray-800 hover:bg-gray-400 text-white font-bold focus:outline-none">search</button>

                </div>
            </div>

            <!-- Right Side (Buttons) -->
            <div class="flex space-x-4">
                <button type="button" id="myBtn"
                    class="px-12 py-3 rounded-lg bg-green-500 hover:bg-green-300 text-white font-bold focus:outline-none"
                    data-modal-target="defaultModal" data-modal-toggle="defaultModal">Add
                    User</button>
                <button
                    class="px-12 py-3 rounded-lg bg-yellow-500 hover:bg-yellow-300 text-white font-bold focus:outline-none">Export
                    to Excel</button>
            </div>
        </div>

        <div class="flex items-center py-4">
            <!-- Table -->
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 text-left">SI No</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Display Name</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">User Name</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Profile Picture</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">User Type</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Status</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $item)
                        <tr>
                            <td class="px-4 py-2">{{ $item->id }}</td>
                            <td class="px-4 py-2">{{ $item->fatherName }}</td>
                            <td class="px-4 py-2">{{ $item->phoneNumber }}</td>
                            <td class="px-4 py-2">{{ $item->aadharNumber }}</td>
                            <td class="px-4 py-2">{{ $item->panNumber }}</td>
                            <td class="px-4 py-2">
                                <span
                                    class="px-2 py-1 rounded-lg bg-gray-500 text-white font-bold">{{ $item->status }}</span>
                            </td>
                            <td class="px-4 py-2">
                                <a href="#"
                                    class="edit_btn px-2 py-1 rounded-lg bg-blue-700 hover:bg-blue-500 text-white font-bold focus: outline-none"
                                    data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                    data-fatherName="{{ $item->fatherName }}" data-gender="{{ $item->gender }}"
                                    data-religion="{{ $item->religion }}" data-caste="{{ $item->caste }}"
                                    data-phoneNumber="{{ $item->phoneNumber }}"
                                    data-permanentAddress="{{ $item->permanentAddress }}"
                                    data-temporaryAddress="{{ $item->temporaryAddress }}"
                                    data-aadharNumber="{{ $item->aadharNumber }}" data-panNumber="{{ $item->panNumber }}"
                                    data-companyId="{{ $item->companyId }}"
                                    data-mainLocationId="{{ $item->mainLocationId }}"
                                    data-officeId="{{ $item->officeId }}" data-locationId="{{ $item->locationId }}"
                                    data-department="{{ $item->department }}" data-designation="{{ $item->designation }}"
                                    data-bankDetails="{{ $item->bankDetails }}"
                                    data-nominee="{{ $item->nominee }}">Edit</a>

                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows here -->
                </tbody>
            </table>

        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <form id="memberForm">
            @csrf

            <div class="modal-content w-1/2">
                <div class="flex justify-around  bg-gray-300 text-black">

                    <h2 class="p-4 mt-4 text-xl font-semibold float-left">Add Member</h2>



                    <div class="flex justify-between py-2 space-x-2 mt-4 mr-8">
                        <span
                            class="close px-3 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg mr-2">Cancel</span>
                        <button type="submit"
                            class="px-3 py-2 bg-gray-600 hover:bg-gray-500 text-white font-semibold rounded-lg">Save</button>

                    </div>
                </div>
                <div class="modal-body">

                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="fatherName" class="block text-gray-700 font-bold mb-2">Father's Name:</label>
                            <input type="text" id="fatherName" name="fatherName"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2">
                            <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                            <select id="gender" name="gender" class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="religion" class="block text-gray-700 font-bold mb-2">Religion:</label>
                            <select id="religion" name="religion" class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Choose Religion</option>
                                <option value="hindhu">Hindhu</option>
                                <option value="muslim">Muslim</option>
                                <option value="christian">Christian</option>
                                <option value="sikh">Sikh</option>
                                <option value="jain">Jain</option>
                                <option value="buddhist">Buddhist</option>
                                <option value="parsi">Parsi</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="caste" class="block text-gray-700 font-bold mb-2">Caste:</label>
                            <input type="text" id="caste" name="caste"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="phoneNumber" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
                            <input type="text" id="phoneNumber" name="phoneNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="permanenttemporaryAddress" class="block text-gray-700 font-bold mb-2">Permanent
                                Address:</label>
                            <textarea id="permanentAddress" name="permanentAddress" class="border border-gray-400 rounded-lg p-2 w-full"
                                rows="3"></textarea>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="temporaryAddress" class="block text-gray-700 font-bold mb-2">Temproary
                                Address:</label>
                            <textarea id="temporaryAddress" name="temporaryAddress" class="border border-gray-400 rounded-lg p-2 w-full"
                                rows="3"></textarea>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="aadharNumber" class="block text-gray-700 font-bold mb-2">Aadhar Number:</label>
                            <input type="text" id="aadharNumber" name="aadharNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="panNumber" class="block text-gray-700 font-bold mb-2">PAN Number:</label>
                            <input type="text" id="panNumber" name="panNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="aadharUrl" class="block text-gray-700 font-bold mb-2">Upload Aadhar:</label>
                            <input type="file" id="aadharUrl" name="aadharUrl"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                        <div> <label for="panUrl" class="block text-gray-700 font-bold mb-2">Upload Pan Card:</label>
                            <input type="file" id="panUrl" name="panUrl"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="companyId" class="block text-gray-700 font-bold mb-2">Choose Company:</label>
                            <select id="companyId" name="companyId" class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Select Company</option>
                                @foreach ($companies as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="officeId" class="block text-gray-700 font-bold mb-2">Choose Office:</label>
                            <select id="officeId" name="officeId" class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="mainLocationId" class="block text-gray-700 font-bold mb-2">Choose Main
                                Location:</label>
                            <select id="mainLocationId" name="mainLocationId"
                                class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="locationId" class="block text-gray-700 font-bold mb-2">Choose Location:</label>
                            <select id="locationId" name="locationId"
                                class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="department" class="block text-gray-700 font-bold mb-2">Department:</label>
                            <input type="text" id="department" name="department"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="designation" class="block text-gray-700 font-bold mb-2">Designation:</label>
                            <input type="text" id="designation" name="designation"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="bankDetails" class="block text-gray-700 font-bold mb-2">Bank Details:</label>
                            <input type="text" id="bankDetails" name="bankDetails"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="nominee" class="block text-gray-700 font-bold mb-2">Nominee:</label>
                            <input type="text" id="nominee" name="nominee"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2"> <label for="profile" class="block text-gray-700 font-bold mb-2">Upload Profile:</label>
                            <input type="file" id="profile" name="profile"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                    </div>
                    <!-- Add more form fields as needed -->
        </form>
    </div>
    </div>




    </div>
    <!-- The Modal -->
    <div id="edit_modal" class="modal">
        <form id="edit_memberForm">
            @csrf

            <div class="modal-content w-1/2">
                <div class="flex justify-around  bg-gray-300 text-black">

                    <h2 class="p-4 mt-4 text-xl font-semibold float-left">Add Member</h2>



                    <div class="flex justify-between py-2 space-x-2 mt-4 mr-8">
                        <span
                            class="edit_close px-3 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg mr-2">Cancel</span>
                        <button type="submit"
                            class="px-3 py-2 bg-gray-600 hover:bg-gray-500 text-white font-semibold rounded-lg">Save
                            Draft</button>
                        <button type="submit"
                            class="verify_btn px-3 py-2 bg-green-600 hover:bg-green-500 text-white font-semibold rounded-lg">Send
                            for
                            verification</button>
                    </div>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_memberId" name="edit_memberId">
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_name" class="block text-gray-700 font-bold mb-2">Name:</label>

                            <input type="text" id="edit_name" name="edit_name"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_fatherName" class="block text-gray-700 font-bold mb-2">Father's Name:</label>
                            <input type="text" id="edit_fatherName" name="edit_fatherName"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2">
                            <label for="edit_gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                            <select id="edit_gender" name="edit_gender"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_religion" class="block text-gray-700 font-bold mb-2">Religion:</label>
                            <select id="edit_religion" name="edit_religion"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Choose Religion</option>
                                <option value="hindhu">Hindhu</option>
                                <option value="muslim">Muslim</option>
                                <option value="christian">Christian</option>
                                <option value="sikh">Sikh</option>
                                <option value="jain">Jain</option>
                                <option value="buddhist">Buddhist</option>
                                <option value="parsi">Parsi</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_caste" class="block text-gray-700 font-bold mb-2">Caste:</label>
                            <input type="text" id="edit_caste" name="edit_caste"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_phoneNumber" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
                            <input type="text" id="edit_phoneNumber" name="edit_phoneNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_permanentAddress" class="block text-gray-700 font-bold mb-2">Permanent
                                Address:</label>
                            <textarea id="edit_permanentAddress" name="edit_permanentAddress"
                                class="border border-gray-400 rounded-lg p-2 w-full" rows="3"></textarea>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_temporaryAddress" class="block text-gray-700 font-bold mb-2">Temproary
                                Address:</label>
                            <textarea id="edit_temporaryAddress" name="edit_temporaryAddress"
                                class="border border-gray-400 rounded-lg p-2 w-full" rows="3"></textarea>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_aadharNumber" class="block text-gray-700 font-bold mb-2">Aadhar
                                Number:</label>
                            <input type="text" id="edit_aadharNumber" name="edit_aadharNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_panNumber" class="block text-gray-700 font-bold mb-2">PAN Number:</label>
                            <input type="text" id="edit_panNumber" name="edit_panNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_aadharUrl" class="block text-gray-700 font-bold mb-2">Upload Aadhar:</label>
                            <input type="file" id="edit_aadharUrl" name="edit_aadharUrl"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                        <div> <label for="edit_panUrl" class="block text-gray-700 font-bold mb-2">Upload Pan Card:</label>
                            <input type="file" id="edit_panUrl" name="edit_panUrl"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_companyId" class="block text-gray-700 font-bold mb-2">Choose Company:</label>
                            <select id="edit_companyId" name="edit_companyId"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                                <option value="">Select Company</option>
                                @foreach ($companies as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_officeId" class="block text-gray-700 font-bold mb-2">Choose Office:</label>
                            <select id="edit_officeId" name="edit_officeId"
                                class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_mainLocationId" class="block text-gray-700 font-bold mb-2">Choose Main
                                Location:</label>
                            <select id="edit_mainLocationId" name="edit_mainLocationId"
                                class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_locationId" class="block text-gray-700 font-bold mb-2">Choose
                                Location:</label>
                            <select id="edit_locationId" name="edit_locationId"
                                class="border border-gray-400 rounded-lg p-2 w-full">

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_department" class="block text-gray-700 font-bold mb-2">Department:</label>
                            <input type="text" id="edit_department" name="edit_department"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_designation" class="block text-gray-700 font-bold mb-2">Designation:</label>
                            <input type="text" id="edit_designation" name="edit_designation"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="edit_bankDetails" class="block text-gray-700 font-bold mb-2">Bank Details:</label>
                            <input type="text" id="edit_bankDetails" name="edit_bankDetails"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="edit_nominee" class="block text-gray-700 font-bold mb-2">Nominee:</label>
                            <input type="text" id="edit_nominee" name="edit_nominee"
                                class="border border-gray-400 rounded-lg p-2 w-full">
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2"> <label for="edit_profile" class="block text-gray-700 font-bold mb-2">Upload Pan Card:</label>
                            <input type="file" id="edit_profile" name="edit_profile"
                                class="border border-gray-400 rounded-lg p-2 w-full" accept="image/*">

                        </div>
                    </div>
                    <!-- Add more form fields as needed -->
        </form>
    </div>

    </div>




    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black with opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 0px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }






        .modal-header {
            padding: 40px;
            border-bottom: 1px solid #ede2e2;
            /* text-align: center; */
        }

        .modal-body {
            padding: 30px;
        }

        .modal-footer {
            padding: 10px 0;
            border-top: 1px solid #ddd;
            text-align: center;
        }
    </style>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the modal
            var modal = document.getElementById("edit_modal");

            // Get the button that opens the modal (assuming you have multiple edit buttons, not just one)
            var editButtons = document.querySelectorAll(".edit_btn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("edit_close")[0];

            // Loop through all edit buttons and attach a click event listener to each one
            editButtons.forEach(function(btn) {
                btn.onclick = function() {
                    modal.style.display = "block";
                }
            });

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle Office selection and fetch Main Location options
            $('#companyId').on('change', function() {
                var companyId = $(this).val();
                if (companyId) {
                    $.get('/fetch_main_location', {
                        companyId: companyId
                    }, function(data) {
                        $('#mainLocationId').empty();
                        $('#mainLocationId').append(
                            '<option value="">Select Main Location</option>');
                        $.each(data, function(key, value) {
                            $('#mainLocationId').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    });
                } else {
                    $('#mainLocationId').empty();
                }
            });

            // dropdown for edit modal

            $('#edit_companyId').on('change', function() {
                var companyId = $(this).val();
                if (companyId) {
                    $.get('/fetch_main_location', {
                        companyId: companyId
                    }, function(data) {
                        $('#edit_mainLocationId').empty();
                        $('#edit_mainLocationId').append(
                            '<option value="">Select Main Location</option>');
                        $.each(data, function(key, value) {
                            $('#edit_mainLocationId').append('<option value="' + key +
                                '">' +
                                value + '</option>');
                        });
                    });
                } else {
                    $('#mainLocationId').empty();
                }
            });

            // Handle Office selection and fetch Main Location options
            $('#mainLocationId').on('change', function() {
                var mainLocationId = $(this).val();
                if (mainLocationId) {
                    $.get('/fetch_office', {
                        mainLocationId: mainLocationId
                    }, function(data) {
                        $('#officeId').empty();
                        $('#officeId').append('<option value="">Select Office</option>');
                        $.each(data, function(key, value) {
                            $('#officeId').append('<option value="' + key + '">' + value +
                                '</option>');
                        });
                    });
                } else {
                    $('#officeId').empty();
                }
            });

            // dropdown for edit modal
            $('#edit_mainLocationId').on('change', function() {
                var mainLocationId = $(this).val();
                if (mainLocationId) {
                    $.get('/fetch_office', {
                        mainLocationId: mainLocationId
                    }, function(data) {
                        $('#edit_officeId').empty();
                        $('#edit_officeId').append('<option value="">Select Office</option>');
                        $.each(data, function(key, value) {
                            $('#edit_officeId').append('<option value="' + key + '">' +
                                value +
                                '</option>');
                        });
                    });
                } else {
                    $('#officeId').empty();
                }
            });

            $('#officeId').on('change', function() {
                var officeId = $(this).val();
                if (officeId) {
                    $.get('/fetch_location', {
                        officeId: officeId
                    }, function(data) {
                        $('#locationId').empty();
                        $('#locationId').append('<option value="">Select  Location</option>');
                        $.each(data, function(key, value) {
                            $('#locationId').append('<option value="' + key + '">' + value +
                                '</option>');
                        });
                    });
                } else {
                    $('#locationId').empty();
                }
            });

            // dropdown for edit modal

            $('#edit_officeId').on('change', function() {
                var officeId = $(this).val();
                if (officeId) {
                    $.get('/fetch_location', {
                        officeId: officeId
                    }, function(data) {
                        $('#edit_locationId').empty();
                        $('#edit_locationId').append('<option value="">Select  Location</option>');
                        $.each(data, function(key, value) {
                            $('#edit_locationId').append('<option value="' + key + '">' +
                                value +
                                '</option>');
                        });
                    });
                } else {
                    $('#edit_locationId').empty();
                }
            });

            $('#memberForm').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(button); // Use FormData to serialize the form data
                formData.append('_token', "{{ csrf_token() }}"); // Add CSRF token to FormData

                $.ajax({
                    type: 'POST',
                    url: '{{ route('members.store') }}',
                    data: formData, // Send FormData object
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting the content type
                    success: function(response) {
                        console.log(response);
                        window.location.reload()
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

            // Assuming you have a file input with the id 'fileInput' and a button with the id 'uploadButton'
            $('#save_btn').on('click', function() {
                var fileInput = document.getElementById('profile');
                var file = fileInput.files[0];
                var path = 'profiles'; // Replace with the desired path

                if (!file) {
                    alert('Please select a file to upload.');
                    return;
                }

                var formData = new FormData();
                formData.append('file', file);
                formData.append('path', path);

                $.ajax({
                    type: 'POST',
                    url: '{{ route('members.store_profile') }}', // Replace with your actual endpoint URL
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log('File uploaded successfully:', response);
                        // Handle success, e.g., display a success message or update UI
                    },
                    error: function(xhr, status, error) {
                        console.error('Error uploading file:', error);
                        // Handle error, e.g., display an error message or handle specific errors
                    }
                });
            });



            $('#edit_memberForm').on('submit', function(e) {
                e.preventDefault();

                var id = $('#edit_memberId').val()
                console.log('member id:', id)

                var formData = new FormData(this); // Use FormData to serialize the form data
                formData.append('_token', "{{ csrf_token() }}"); // Add CSRF token to FormData

                $.ajax({
                    type: 'POST',
                    url: '{{ route('members.update', ':id') }}'.replace(':id', id),
                    data: formData, // Send FormData object
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting the content type
                    success: function(response) {
                        console.log(response);
                        window.location.reload()
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

            $('.verify_btn').on('click', function(e) {
                e.preventDefault();

                var id = $('#edit_memberId').val()
                console.log('member id:', id)

                var formData = new FormData($('#edit_memberForm')[
                    0]); // Use FormData to serialize the form data
                formData.append('_token', "{{ csrf_token() }}"); // Add CSRF token to FormData

                $.ajax({
                    type: 'POST',
                    url: '{{ route('members.sent_fot_verification', ':id') }}'.replace(':id', id),
                    data: formData, // Send FormData object
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Prevent jQuery from setting the content type
                    success: function(response) {
                        console.log(response);
                        window.location.reload()
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

            var button

            function populate_members(button) {
                var memberId = $(button).data('id')
                var name = $(button).data('name')
                var father_name = $(button).data('fathername')
                var gender = $(button).data('gender')
                var religion = $(button).data('religion')
                var caste = $(button).data('caste')
                var phoneNumber = $(button).data('phonenumber')
                var permanentAddress = $(button).data('permanentaddress')
                var temporaryAddress = $(button).data('temporaryaddress')
                var aadharNumber = $(button).data('aadharnumber')
                var panNumber = $(button).data('pannumber')
                var companyId = $(button).data('companyid')
                var officeId = $(button).data('officeid')
                var mainLocationId = $(button).data('mainlocationid')
                var locationId = $(button).data('locationid')
                var department = $(button).data('department')
                var designation = $(button).data('designation')
                var bankDetails = $(button).data('bankdetails')
                var nominee = $(button).data('nominee')

                console.log(memberId, father_name, gender, religion, caste, phoneNumber, permanentAddress)
                // Log values for debugging
                console.log('mainLocationId:', mainLocationId);
                console.log('officeId:', officeId);
                console.log('locationId:', locationId);
                console.log('memberId:', memberId);

                $('#edit_memberId').val(memberId)
                $('#edit_name').val(name)
                $('#edit_fatherName').val(father_name)
                $('#edit_gender').val(gender)
                $('#edit_religion').val(religion)
                $('#edit_caste').val(caste)
                $('#edit_phoneNumber').val(phoneNumber)
                $('#edit_permanentAddress').val(permanentAddress)
                $('#edit_temporaryAddress').val(temporaryAddress)
                $('#edit_aadharNumber').val(aadharNumber)
                $('#edit_panNumber').val(panNumber)
                $('#edit_companyId').val(companyId)
                $('#edit_mainLocationId').val(mainLocationId)
                $('#edit_officeId').val(officeId)
                $('#edit_department').val(department)
                $('#edit_designation').val(designation)
                $('#edit_bankDetails').val(bankDetails)
                $('#edit_nominee').val(nominee)

                $.ajax({
                    type: 'get',
                    url: '{{ route('getMainLocations') }}',
                    success: function(response) {
                        var location_id = locationId;

                        $('#edit_mainLocationId').empty();
                        $('#edit_mainLocationId').append(
                            '<option value="">Select Main Location</option>');

                        $.each(response, function(index, location) {
                            console.log(location.id, location_id)
                            if (location.id === location_id) {
                                $('#edit_mainLocationId').append('<option value="' +
                                    location.id + '" selected>' + location.name +
                                    '</option>');
                            } else {
                                $('#edit_mainLocationId').append('<option value="' +
                                    location.id + '">' + location.name + '</option>'
                                );
                            }
                        });
                    }
                });


                $.ajax({
                    type: 'get',
                    url: '{{ route('getOffices') }}',
                    success: function(response) {
                        var main_location_id = mainLocationId;

                        $('#edit_officeId').empty();
                        $('#edit_officeId').append(
                            '<option value="">Select Office</option>');

                        $.each(response, function(index, main_location) {
                            console.log(main_location.id, main_location_id)
                            if (main_location.id === main_location_id) {
                                $('#edit_officeId').append('<option value="' +
                                    main_location.id + '" selected>' + main_location
                                    .name +
                                    '</option>');
                            } else {
                                $('#edit_officeId').append('<option value="' +
                                    main_location.id + '">' + main_location.name +
                                    '</option>'
                                );
                            }
                        });
                    }
                });


                $.ajax({
                    type: 'get',
                    url: '{{ route('getLocations') }}',
                    success: function(response) {
                        var location_id = locationId;

                        $('#edit_locationId').empty();
                        $('#edit_locationId').append(
                            '<option value="">Select  Location</option>');

                        $.each(response, function(index, location) {
                            console.log(location.id, location)
                            if (location.id === location_id) {
                                $('#edit_locationId').append('<option value="' +
                                    location.id + '" selected>' + location.name +
                                    '</option>');
                            } else {
                                $('#edit_locationId').append('<option value="' +
                                    location.id + '">' + location.name + '</option>'
                                );
                            }
                        });
                    }
                });

            }

            $('.edit_btn').on('click', function() {
                populate_members(this)
            })

        })
    </script>
@endsection
