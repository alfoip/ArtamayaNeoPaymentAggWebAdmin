
@extends('layouts.mainapp')

@section('style')

{{--    <!-- Internal Chart-Morris css-->--}}
{{--    <link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">--}}

    <!-- Internal Nice-select css  -->
    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    <!-- Internal  Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('content')
    <!-- Modal New Account -->
    <div class="modal center-modal fade" id="modalNewAccount" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="box-title">New Client Account</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-element">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="newFullName" class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newFullName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="email" id="newEmail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newIDCardType" class="col-sm-4 col-form-label">ID Card Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="newIDCardType">
                                        <option value="KTP" selected>KTP</option>
                                        <option value="Passport">Passport</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newIDCard" class="col-sm-4 col-form-label">ID Card #</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newIDCard">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPassword01" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="password" id="newPassword01">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPassword02" class="col-sm-4 col-form-label">Password Confirmation</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="password" id="newPassword02">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newBirthDate" class="col-sm-4 col-form-label">Birth Date</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="newBirthDate" placeholder="YYYY-MM-DD" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newGender" class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="newGender">
                                        <option value="M" selected>Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newAddress">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newCity" class="col-sm-4 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newCity">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newRegion" class="col-sm-4 col-form-label">Region</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newRegion">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newCountry" class="col-sm-4 col-form-label">Country</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="newCountry">
                                        @if(isset($countrylist))
                                            @foreach($countrylist as $country)
                                                @if($country['countryName'] === 'Indonesia')
                                                    <option value="{{ $country['countryISO'] }}" selected>{{ $country['countryName'] }}</option>
                                                @else
                                                    <option value="{{ $country['countryISO'] }}">{{ $country['countryName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newUplineReferral" class="col-sm-4 col-form-label">Referral Code</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="newUplineReferral">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right" id="btnSaveNew">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Account -->
    <div class="modal center-modal fade" id="modalEditAccount" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="box-title">Edit Client Account</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-element">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <input type="hidden" id="editRefEmail" />

                            <div class="form-group row">
                                <label for="editFullName" class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editFullName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="email" id="editEmail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editIDCardType" class="col-sm-4 col-form-label">ID Card Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="editIDCardType">
                                        <option value="KTP" selected>KTP</option>
                                        <option value="Passport">Passport</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editIDCard" class="col-sm-4 col-form-label">ID Card #</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editIDCard">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPassword01" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="password" id="editPassword01">
                                    <span class="text-danger text-sm">Please let the password empty if you  do not want to change it.</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPassword02" class="col-sm-4 col-form-label">Password Confirmation</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="password" id="editPassword02">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editBirthDate" class="col-sm-4 col-form-label">Birth Date</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="editBirthDate" placeholder="YYYY-MM-DD" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editGender" class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="editGender">
                                        <option value="M" selected>Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editAddress">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editCity" class="col-sm-4 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editCity">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editRegion" class="col-sm-4 col-form-label">Region</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editRegion">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editCountry" class="col-sm-4 col-form-label">Country</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="editCountry">
                                        @if(isset($countrylist))
                                            @foreach($countrylist as $country)
                                                @if($country['countryName'] === 'Indonesia')
                                                    <option value="{{ $country['countryISO'] }}" selected>{{ $country['countryName'] }}</option>
                                                @else
                                                    <option value="{{ $country['countryISO'] }}">{{ $country['countryName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editUplineReferral" class="col-sm-4 col-form-label">Upline Referral Code</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="editUplineReferral">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right" id="btnSaveEdit">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Del Account -->
    <div class="modal center-modal fade" id="modalDelAccount" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="box-title">Delete Account</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-element">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <input type="hidden" id="delEmail">
                            <div id="delNotificationInModal"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-right" id="btnDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Create New Account</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="table-responsive market-values">
                        <button type="button" class="btn btn-info btn-sm mb-2" id="btnNewClient" data-toggle="modal" data-target="#modalNewAccount">New Account</button>
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" id="tableClient">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Birthdate</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Region</th>
                                <th>Country</th>
                                <th>Created At</th>
                                <th>Email Verified At</th>
                                <th>Phone Verified At</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /row -->

@endsection

@section('script')
    <!-- Perfect-scrollbar js -->
    <script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Internal jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

    <script>
        $("#newBirthDate").mask("9999-99-99")

        $(document).ready(function () {
            $('#newCountry').select2({
                dropdownParent: $('#modalNewAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });

            let tableAccount = $('#tableClient').DataTable({
                processing: true,
                serverSide: true,
                searching: false,
                pageLength: 200,
                lengthMenu: [[10, 25, 50, 100, 200], [10, 25, 50, 100, 200]],
                ajax: {
                    'type': 'POST',
                    'url': '/tblAccount',
                    'data': function(x) {
                        x._token = '{{ csrf_token() }}'
                    }
                },
                order: [[0, 'desc']],
                columns: [
                    { data: 'name', name: 'name'},
                    { data: 'email', name: 'email'},
                    { data: 'birthdate', name: 'birthdate'},
                    { data: 'gender', name: 'gender'},
                    { data: 'address', name: 'address'},
                    { data: 'city', name: 'city'},
                    { data: 'region', name: 'region'},
                    { data: 'country_name', name: 'country_name'},
                    { data: 'created_at', name: 'created_at'},
                    { data: 'email_verified_at', name: 'email_verified_at'},
                    { data: 'phone_verified_at', name: 'phone_verified_at'},
                    { data: 'active', name: 'Is Active'},
                    { data: 'action', name: 'action'}
                ],
                columnDefs: [
                    { "targets": [2, 3, 4, 5, 7, 8, 9, 10, 11, 12], "className": "text-center"}
                ]}
            )

            function viewData() {
                tableAccount.ajax.reload(null, false)
            }

            $('#modalNewAccount').on('show.bs.modal', function (event) {
                $('#newFullName').val('')
                $('#newEmail').val('')
                $('#newPhoneNumber').val('')
                $('#newIDCardType').val('KTP')
                $('#newIDCard').val('')
                $('#newPassword01').val('')
                $('#newPassword02').val('')
                $('#newBirthDate').val('____-__-__')
                $('#newGender').val('M')
                $('#newAddress').val('')
                $('#newCity').val('')
                $('#newRegion').val('')
                $('#newUplineReferral').val('')
            })

            $('#btnSaveNew').on('click', function (e) {
                e.preventDefault()

                let modalNewAccount = $('#modalNewAccount')

                let btnSaveNew = $('#btnSaveNew')
                btnSaveNew.attr('disabled', true)
                btnSaveNew.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Saving')

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })

                let newCountry = $('#newCountry')
                let formData = new FormData()
                formData.append('name', $('#newFullName').val())
                formData.append('email', $('#newEmail').val())
                formData.append('phoneNumber', $('#newPhoneNumber').val())
                formData.append('idCard', $('#newIDCard').val())
                formData.append('idCardType', $('#newIDCardType').val())
                formData.append('password01', $('#newPassword01').val())
                formData.append('password02', $('#newPassword02').val())
                formData.append('birthdate', $('#newBirthDate').val())
                formData.append('gender', $('#newGender').val())
                formData.append('address', $('#newAddress').val())
                formData.append('city', $('#newCity').val())
                formData.append('region', $('#newRegion').val())
                formData.append('countryiso', newCountry.val())
                formData.append('countryname', newCountry.text())
                formData.append('uplineReferralCode', $('#newUplineReferral').val())

                $.ajax({
                    type: 'POST',
                    url: '/dosavenewaccount',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(dataX) {
                        console.log(dataX)
                        if (dataX === '0') {
                            alert('Data new account is saved.')
                        } else if (dataX === '-204') {
                            alert('Data email is already used. Please do forget password if you already registered.')
                        } else {
                            alert('Failed to save data new account.')
                        }

                        btnSaveNew.attr('disabled', false)
                        btnSaveNew.html('Save')

                        viewData()

                        modalNewAccount.modal('toggle')
                    },
                    fail: function(){
                        btnSaveNew.attr('disabled', false)
                        btnSaveNew.html('Save')

                        alert('Failed to save data new account.')

                        viewData()

                        modalNewAccount.modal('toggle')
                    },
                    error: function(){
                        btnSaveNew.attr('disabled', false)
                        btnSaveNew.html('Save')

                        alert('Failed to save data new account.')

                        viewData()

                        modalNewAccount.modal('toggle')
                    }
                })
            })

            $('#modalEditAccount').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget)
                let refEmail = button.attr('data-email')

                let btnSaveEdit = $('#btnSaveEdit')
                btnSaveEdit.attr('disabled', true)      // Disable white querying detail data

                let modalEdit = $('#modalEditAccount')

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })

                let formData = new FormData()
                formData.append('refemail', refEmail)

                $.ajax({
                    type: 'POST',
                    url: '/getdetailaccount',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(dataX) {
                        console.log(dataX)
                        let jsonData = JSON.parse(dataX)

                        // console.log(jsonData)
                        console.log(jsonData['idCardType'])

                        $('#editFullName').val(jsonData['name'])
                        $('#editEmail').val(jsonData['email'])
                        $('#editPhoneNumber').val(jsonData['phonenumber'])
                        $('#editIDCard').val(jsonData['idCardNumber'])
                        if (jsonData['idCardType'] != '') {
                            $('#editIDCardType').val(jsonData['idCardType'])
                        } else {
                            $('#editIDCardType').prop('selectedIndex', '0')
                        }
                        $('#editIDCardType').change()
                        $('#editBirthDate').val(jsonData['birthdate'])
                        $('#editGender').val(jsonData['gender'])
                        $('#editAddress').val(jsonData['address'])
                        $('#editCity').val(jsonData['city'])
                        $('#editRegion').val(jsonData['region'])
                        $('#editCountry').val(jsonData['countryISO'])
                        $('#editCountry').change()
                        $('#editUplineReferral').val(jsonData['uplineReferralID'])

                        btnSaveEdit.attr('disabled', false)
                    },
                    fail: function(){
                        alert('Failed to load data account.')
                        modalEdit.modal('toggle')
                    },
                    error: function(){
                        alert('Failed to load data account.')
                        modalEdit.modal('toggle')
                    }
                })
            })

            $('#btnSaveEdit').on('click', function (e) {
                e.preventDefault()

                let modalEdit = $('#modalEditAccount')

                let btnSaveEdit = $('#btnSaveEdit')
                btnSaveEdit.attr('disabled', true)
                btnSaveEdit.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Saving')

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })

                let formData = new FormData()
                formData.append('refemail', $('#editRefEmail').val())
                formData.append('name', $('#editFullName').val())
                formData.append('email', $('#editEmail').val())
                formData.append('phoneNumber', $('#editPhoneNumber').val())
                formData.append('idCard', $('#editIDCard').val())
                formData.append('idCardType', $('#editIDCardType').val())
                formData.append('password01', $('#editPassword01').val())
                formData.append('password02', $('#editPassword02').val())
                formData.append('birthdate', $('#editBirthDate').val())
                formData.append('gender', $('#editGender').val())
                formData.append('address', $('#editAddress').val())
                formData.append('city', $('#editCity').val())
                formData.append('region', $('#editRegion').val())
                formData.append('countryiso', $('#editCountry').val())
                formData.append('countryname', $('#editCountry').text())
                formData.append('uplineReferralCode', $('#editUplineReferral').val())

                $.ajax({
                    type: 'POST',
                    url: '/dosaveeditaccount',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(dataX) {
                        console.log(dataX)
                        if (dataX === '0') {
                            alert('Data new account is updated.')
                        } else if (dataX === '-204') {
                            alert('Data email is already used. Please do forget password if you already registered.')
                        } else {
                            alert('Failed to update data new account.')
                        }

                        btnSaveEdit.attr('disabled', false)
                        btnSaveEdit.html('Save')

                        viewData()

                        modalEdit.modal('toggle')
                    },
                    fail: function(){
                        btnSaveEdit.attr('disabled', false)
                        btnSaveEdit.html('Save')

                        alert('Failed to update account.')

                        viewData()

                        modalEdit.modal('toggle')
                    },
                    error: function(){
                        btnSaveEdit.attr('disabled', false)
                        btnSaveEdit.html('Save')

                        alert('Failed to update account.')

                        viewData()

                        modalEdit.modal('toggle')
                    }
                })
            })

            $('#modalDelAccount').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget)
                let accEmail = button.attr('data-email')
                let accName = button.attr('data-name')

                $('#delEmail').val(accEmail)
                $('#delNotificationInModal').html('<span>Are you sure want to delete Account <span style="color:red">' + accName + ' (email: ' + accEmail + ') ' + '</span>? Deleting data can not be reversed.</span>')
            })

            $('#btnDelete').on('click', function (e) {
                e.preventDefault()

                let btnDelete = $('#btnDelete')
                let modalDelete = $('#modalDelAccount')

                btnDelete.attr('disabled', true)
                btnDelete.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Deleting')

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })

                let formData = new FormData()
                formData.append('email', $('#delEmail').val())

                $.ajax({
                    type: 'POST',
                    url: '/dodeleteaccount',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(dataX) {
                        console.log(dataX)
                        if (dataX === '0') {
                            alert('Data account is deleted.')
                        } else {
                            alert('Failed to delete data account.')
                        }

                        btnDelete.attr('disabled', false)
                        modalDelete.modal('toggle')
                        btnDelete.html('Delete')

                        tableAccount.ajax.reload(null, false)
                    },
                    fail: function(){
                        //console.log('failed.')
                        alert('Failed to delete data account.')
                        btnDelete.attr('disabled', false)
                        modalDelete.modal('toggle')
                        btnDelete.html('Delete')
                    },
                    error: function(){
                        //console.log('failed.')
                        alert('Failed to delete data account.')
                        btnDelete.attr('disabled', false)
                        modalDelete.modal('toggle')
                        btnDelete.html('Delete')
                    }
                })
            })
        })
    </script>
@endsection

