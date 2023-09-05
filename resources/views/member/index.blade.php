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
                        <th class="px-4 py-2 bg-gray-200 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $item)
                        <tr>
                            <td class="px-4 py-2">{{ $item->id }}</td>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">{{ $item->name }}</td>
                            <td class="px-4 py-2">
                                <a href=""
                                    class="px-2 py-1 rounded-lg bg-blue-700 hover:bg-blue-500 text-white font-bold focus: outline-none"
                                    data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                    data-father_name="{{ $item->father_name }}" data-gender="{{ $item->gender }}"
                                    data-religion="{{ $item->religion }}" data-caste="{{ $item->caste }}"
                                    data-phone_number="{{ $item->phone_number }}"
                                    data-permanent_address="{{ $item->permanentAddress }}"
                                    data-tem_address="{{ $item->temporaryAddress }}"
                                    data-aadhar_number="{{ $item->aadharNumber }}"
                                    data-pan_number="{{ $item->panNumber }}" data-company_id="{{ $item->companyId }}"
                                    data-mainLocation_id="{{ $item->mainLocationId }}"
                                    data-office_id="{{ $item->officeId }}" data-mainLocation_id="{{ $item->locationId }}"
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

        <div class="modal-content w-1/2">
            <div class="modal-header bg-gray-400 text-white">
                <span class="close">&times;</span>
                <h2 class="text-xl font-semibold">Add Member</h2>
            </div>
            <div class="modal-body">
                <form id="memberForm">
                    @csrf
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="fatherName" class="block text-gray-700 font-bold mb-2">Father's Name:</label>
                            <input type="text" id="fatherName" name="fatherName"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2">
                            <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                            <select id="gender" name="gender" class="border border-gray-400 rounded-lg p-2 w-full"
                                required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="religion" class="block text-gray-700 font-bold mb-2">Religion:</label>
                            <select id="religion" name="religion" class="border border-gray-400 rounded-lg p-2 w-full"
                                required>
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
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="phoneNumber" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
                            <input type="text" id="phoneNumber" name="phoneNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="permanenttemporaryAddress" class="block text-gray-700 font-bold mb-2">Permanent
                                Address:</label>
                            <textarea id="permanentAddress" name="permanentAddress" class="border border-gray-400 rounded-lg p-2 w-full"
                                rows="3" required></textarea>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="temporaryAddress" class="block text-gray-700 font-bold mb-2">Temproary
                                Address:</label>
                            <textarea id="temporaryAddress" name="temporaryAddress" class="border border-gray-400 rounded-lg p-2 w-full"
                                rows="3" required></textarea>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="aadharNumber" class="block text-gray-700 font-bold mb-2">Aadhar Number:</label>
                            <input type="text" id="aadharNumber" name="aadharNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="panNumber" class="block text-gray-700 font-bold mb-2">PAN Number:</label>
                            <input type="text" id="panNumber" name="panNumber"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
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
                            <select id="companyId" name="companyId" class="border border-gray-400 rounded-lg p-2 w-full"
                                required>
                                <option value="">Select Company</option>
                                @foreach ($companies as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="officeId" class="block text-gray-700 font-bold mb-2">Choose Office:</label>
                            <select id="officeId" name="officeId" class="border border-gray-400 rounded-lg p-2 w-full"
                                required>

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="mainLocationId" class="block text-gray-700 font-bold mb-2">Choose Main
                                Location:</label>
                            <select id="mainLocationId" name="mainLocationId"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>

                            </select>

                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="locationId" class="block text-gray-700 font-bold mb-2">Choose Location:</label>
                            <select id="locationId" name="locationId"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>

                            </select>

                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="department" class="block text-gray-700 font-bold mb-2">Department:</label>
                            <input type="text" id="department" name="department"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="designation" class="block text-gray-700 font-bold mb-2">Designation:</label>
                            <input type="text" id="designation" name="designation"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                    </div>
                    <div class="mb-4 flex">
                        <div class="w-1/2 pr-2">
                            <label for="bankDetails" class="block text-gray-700 font-bold mb-2">Bank Details:</label>
                            <input type="text" id="bankDetails" name="bankDetails"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                        <div class="w-1/2 pl-2">
                            <label for="nominee" class="block text-gray-700 font-bold mb-2">Nominee:</label>
                            <input type="text" id="nominee" name="nominee"
                                class="border border-gray-400 rounded-lg p-2 w-full" required>
                        </div>
                    </div>
                    <!-- Add more form fields as needed -->


                    <div class="modal-footer bg-gray-200 p-4">
                        <button
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg mr-2">Cancel</button>
                        <button type="submit"
                            class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg">Submit</button>

                    </div>
                </form>
            </div>
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
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        /* The Close Button */
        .close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #888;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .modal-body {
            padding: 20px 0;
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

            $('#memberForm').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this); // Use FormData to serialize the form data
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

        })
    </script>
@endsection
