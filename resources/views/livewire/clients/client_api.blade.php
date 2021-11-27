
@extends('layouts.mainapp')

@section('style')

{{--    <!-- Internal Chart-Morris css-->--}}
{{--    <link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">--}}

    <!-- Internal Nice-select css  -->
    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    <!-- Edited NewStyle css  -->
    <link href="{{URL::asset('assets/css/newstyle.css')}}" rel="stylesheet"/>

    <!-- Internal  Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    
@endsection

@section('content')

<div class="row no-gutters">
    <div class="col-md-12 ml-0 pl-0 mr-0 pr-0">
        <div class="card overflow-hidden" style="min-height:80vh;">
            <div class="row">
                <div class="col-md-2 mt-3 pr-0 mr-0 border-right">
                    @include('layouts.menu_client')
                </div>
                <div class="col-md-10 pl-0 ml-0">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-md-12 border-right">
                                        <p class="mg-b-10" style="font-size:20pt; font-weight:bold;">API Credential</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 pl-0 ml-0 border-right" id="idAPIList">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">List of API Credential</p>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:98%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width:4%;">Active</th>
                                                <th style="width:14%;">Username</th>
                                                <th style="width:14%;">Password</th>
                                                <th style="width:29%;">Remote IP</th>
                                                <th style="width:29%;">API Access</th>
                                                <th style="width:10%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($userapiList))
                                                @if(count(collect($userapiList)) > 0)
                                                    @php ($i = 0)
                                                    @foreach($userapiList as $data)
                                                    @php ($i++)
                                                    <tr id="idRowNum{{ $i }}">
                                                        <td class="align-middle text-center">
                                                            <label class="switch mb-0">
                                                                <input  type="checkbox" 
                                                                        class="modalUpdateStatus"
                                                                        data-id="{{ $data['id'] }}"
                                                                        data-toggle="modal"
                                                                        data-target="#modalUpdateStatus"    
                                                                        value="{{ $data['isactive'] }}" {{ $data['isactive'] == true ? "checked" : "" }}>
                                                                <span class="slider round"></span>
                                                           </label>
                                                        </td>
                                                        <td class="align-middle">{{ $data['username'] }}</td>
                                                        <td class="align-middle" id="idPassword{{ $i }}">{{ $data['password'] }}</td>
                                                        <td class="align-middle">{{ $data['remoteipaddress'] }}</td>
                                                        <td class="align-middle">{{ $data['apiaccess'] }}</td>
                                                        <td class="align-middle text-center">
                                                            <a  href="#modalEditAccount"  id="btnedit" 
                                                                class="modalEditAccount btn btn-sm btn-primary" 
                                                                data-id="{{ $data['id'] }}" 
                                                                data-clientid="{{ $data['clientid'] }}" 
                                                                data-username="{{ $data['username'] }}" 
                                                                data-password="{{ $data['password'] }}" 
                                                                data-remoteipaddress="{{ $data['remoteipaddress'] }}" 
                                                                data-apiaccess="{{ $data['apiaccess'] }}" 
                                                                data-toggle="modal" 
                                                                data-target="#modalEditAccount" style="width:70px;"><i class="fa fa-md fa-edit mr-1"></i>Edit</a>
                                                            <a  href="#modalResetAccount" 
                                                                class="modalResetAccount btn btn-sm btn-success mr-1" 
                                                                data-row="{{ $i }}"
                                                                data-id="{{ $data['id'] }}" 
                                                                data-toggle="modal" 
                                                                data-target="#modalResetAccount" style="width:70px;"><i class="fa fa-sm fa-sync mr-1"></i>Reset</button>
                                                            <a  href="#modalDeleteAccount"  id="btnDelete" 
                                                                class="modalDeleteAccount btn btn-sm btn-danger"
                                                                data-rownum="{{ $i }}"
                                                                data-id="{{ $data['id'] }}" 
                                                                data-toggle="modal" 
                                                                data-target="#modalDeleteAccount" style="width:70px;"><i class="fa fa-md fa-trash mr-1"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                <tr>
                                                    <td class="text-center" colspan="7">
                                                        <img src="{{URL::asset('assets/img/png/icon-page-blank.png')}}" class="mt-3 mb-3" style="width:100px; height:100px;" alt="">
                                                        <p style="font-size:10pt;">This client have no API Access, click "Add API Access" button to add new</p>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endif
                                        </tbody>
                                    </table>
                                    
                                    <div class="text-left">
                                        <button type="button" 
                                                class="modalNewAccount btn btn-sm btn-info mt-2 ml-3" 
                                                id="btnNewClient" data-toggle="modal" data-target="#modalNewAccount">Add API Access</button>
                                    </div>                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /row -->


<!-- Modal New Account -->
<div class="modal center-modal fade" id="modalNewAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">New API Access</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-element">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="newUsername" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="newUsername">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newRemoteIPAddress" class="col-sm-4 col-form-label">Remote IP Address</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="newRemoteIPAddress">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newAPIAccess" class="col-sm-4 col-form-label">API Access</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="newAPIAccess">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-primary" id="btnDoSaveNew">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit Account -->
<div class="modal center-modal fade" id="modalEditAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">Edit API Access</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-element">
                    {{ csrf_field() }}
                    <input type="hidden" id="editId">
                    <input type="hidden" id="editClientid">
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="editUsername" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="editUsername" name="editUsername">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editPassword" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" disabled type="text" id="editPassword">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editRemoteIPAddress" class="col-sm-4 col-form-label">Remote IP Address</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="editRemoteIPAddress">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editAPIAccess" class="col-sm-4 col-form-label">API Access</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="editAPIAccess">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <div class="text-danger" style="font-weight:bold;" id="idStatusEdit"></div>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-primary" id="btnDoEdit">Edit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Reset Account -->
<div class="modal center-modal fade" id="modalResetAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">Reset Password API Access</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                To continue this process, please input your password
                <form class="form-element mt-2" autocomplete="off">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <input class="text-center form-control form-control-sm border border-dark" type="password" id="resetPassword">
                        <input type="hidden" id="resetID">
                        <input type="hidden" id="rowReset">
                    </div>
                </form>
            </div>
            <div class="text-center">
                <div class="text-danger" style="font-weight:bold;" id="idStatusReset"></div>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-danger" id="btnDoReset">Proceed to Reset</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete Account -->
<div class="modal center-modal fade" id="modalDeleteAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">Delete API Access</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                To continue this process, please input your password
                <form class="form-element mt-2" autocomplete="off">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <input class="text-center form-control form-control-sm border border-dark" type="password" id="deletePassword">
                        <input type="hidden" id="deleteID">
                        <input type="hidden" id="rowNumID">
                    </div>
                </form>
            </div>
            <div class="text-center">
                <div class="text-danger" style="font-weight:bold;" id="idStatusDelete"></div>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-danger" id="btnDoDelete">Proceed to Delete</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Status Update -->
<div class="modal center-modal fade" id="modalUpdateStatus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Proceesing
                <input type="hidden" id="idStatusUpdate">
            </div>
        </div>
    </div>
</div>

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
        //  Add New
        $(document).on("click", ".modalNewAccount", function () {
            $(".modal-body #newUsername").val('');
            $(".modal-body #newPassword").val('');
            $(".modal-body #newRemoteIPAddress").val('');
            $(".modal-body #newAPIAccess").val('');

            $("#modalNewAccount").on('shown.bs.modal', function(){
                $(this).find('#newtUsername').focus();
            });	
        });

        $('#btnDoSaveNew').on('click', function(e){
            e.preventDefault();
          
            let newUsername         = $('#newUsername').val();
            let newPassword         = $('#newPassword').val();
            let newRemoteIPAddress  = $('#newRemoteIPAddress').val();
            let newAPIAccess        = $('#newAPIAccess').val();

            let btnDoSaveNew = $('#btnDoSaveNew')
                btnDoSaveNew.attr('disabled', true)
                btnDoSaveNew.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Saving')

            $.ajax({
                url     : 	'/ajax/api/add',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "clientid" : "{{ $clientid }}",
                                "username" : newUsername,
                                "password" : newPassword,
                                "remoteipaddress" : newRemoteIPAddress,
                                "apiaccess" : newAPIAccess,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(data) {
                                let btnDoSaveNew = $('#btnDoSaveNew')
                                    btnDoSaveNew.attr('disabled', false)
                                    btnDoSaveNew.html('Save')

                                $("#modalNewAccount").modal('hide');
                                $("#idAPIList").load("/ajax/api/show/{{ $clientid }}");
                            }
            });
        });
       

        //  Edit
        $(document).on("click", ".modalEditAccount", function () {
            let id              = $(this).data('id');
            let clientid        = $(this).data('clientid');
            let username        = $(this).data('username');
            let password        = $(this).data('password');
            let remoteipaddress = $(this).data('remoteipaddress');
            let apiaccess       = $(this).data('apiaccess');

            $(".modal-body #editId").val(id);
            $(".modal-body #editClientid").val(clientid);
            $(".modal-body #editUsername").val(username);
            $(".modal-body #editPassword").val(password);
            $(".modal-body #editRemoteIPAddress").val(remoteipaddress);
            $(".modal-body #editAPIAccess").val(apiaccess);

            $("#modalEditAccount").on('shown.bs.modal', function(){
                $(this).find('#editUsername').focus();
            });	
        });

        $('#btnDoEdit').on('click', function(e){
            e.preventDefault();

            let id              = $('#editId').val();
            let clientid        = $('#editClientid').val();
            let username        = $('#editUsername').val();
            let password        = $('#editPassword').val();
            let remoteipaddress = $('#editRemoteIPAddress').val();
            let apiaccess       = $('#editAPIAccess').val();

            let btnDoEdit = $('#btnDoEdit')
                btnDoEdit.attr('disabled', true)
                btnDoEdit.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Processing')

                $.ajax({
                    url     : 	'/ajax/api/update',
                    data    : 	{
                                    "_token" : "{{ csrf_token() }}",
                                    "id" : id,
                                    "clientid" : clientid,
                                    "username" : username,
                                    "password" : password,
                                    "remoteipaddress" : remoteipaddress,
                                    "apiaccess" : apiaccess,
                                },
                    type    : 	'POST',
                    dataType:   'json',
                    success :   function(status) {
                                    console.log(status);
                                    htmlResponse = ''; 
                                    if(status == "000" ){
                                        $("#modalEditAccount").modal('hide');
                                        $("#idAPIList").load("/ajax/api/show/{{ $clientid }}");
                                    } else {
                                        htmlResponse += "Failed : Those email already taken by another user.";
                                    }

                                    let btnDoEdit = $('#btnDoEdit')
                                        btnDoEdit.attr('disabled', false)
                                        btnDoEdit.html('Save')

                                    $('#idStatusEdit').html(htmlResponse);
                                    $('#idStatusEdit').show();
                                }
                });
            });



        //  Reset
        $(document).on("click", ".modalResetAccount", function () {
            let id = $(this).data('id');
            let row = $(this).data('row');
            
            $(".modal-body #resetID").val(id);
            $(".modal-body #rowReset").val(row);
            $(".modal-body #resetPassword").val('');

            $("#modalResetAccount").on('shown.bs.modal', function(){
                $(this).find('#resetPassword').focus();
            });	
        });

        $('#btnDoReset').on('click', function(e){
            e.preventDefault();
          
            let credentialPassword  = $('#resetPassword').val();
            let id                  = $('#resetID').val();
            let row                 = $('#rowReset').val();

            let btnDoReset = $('#btnDoReset')
                btnDoReset.attr('disabled', true)
                btnDoReset.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Reseting')

            $.ajax({
                url     : 	'/ajax/api/reset',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "credentialpassword" : credentialPassword,
                                "id" : id,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(data) {
                                htmlResponse = ''; 
                                if(data['status'] == "000" ){
                                    $("#modalResetAccount").modal('hide');
                                    $("#idPassword"+row).html(data['password']);
                                } else {
                                    htmlResponse += "Failed : Wrong credential, please try again";
                                }

                                let btnDoReset = $('#btnDoReset')
                                    btnDoReset.attr('disabled', false)
                                    btnDoReset.html('Save')

                                $('#idStatusReset').html(htmlResponse);
                                $('#idStatusReset').show();
                            }
            });
        });


        //  Delete
        $(document).on("click", ".modalDeleteAccount", function () {
            let id      = $(this).data('id');
            let rownum  = $(this).data('rownum');
            
            $(".modal-body #deleteID").val(id);
            $(".modal-body #rowNumID").val(rownum);
            $(".modal-body #deletePassword").val('');

            $("#modalDeleteAccount").on('shown.bs.modal', function(){
                $(this).find('#deletePassword').focus();
            });	
        });

        $('#btnDoDelete').on('click', function(e){
            e.preventDefault();
          
            let credentialPassword  = $('#deletePassword').val();
            let id                  = $('#deleteID').val();
            let rownum              = $('#rowNumID').val();

            let btnDoDelete = $('#btnDoDelete')
                btnDoDelete.attr('disabled', true)
                btnDoDelete.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Deleting')

            $.ajax({
                url     : 	'/ajax/api/delete',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "credentialpassword" : credentialPassword,
                                "id" : id,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(status) {
                                htmlResponse = ''; 
                                if(status == "000" ){
                                    $("#modalDeleteAccount").modal('hide');
                                    $("#idRowNum"+rownum).hide();
                                    
                                    // $("#idAPIList").load("/ajax/api/show/{{ $clientid }}");
                                } else {
                                    htmlResponse += "Failed : Wrong credential, please try again";
                                }

                                let btnDoDelete = $('#btnDoDelete')
                                    btnDoDelete.attr('disabled', false)
                                    btnDoDelete.html('Save')

                                $('#idStatusDelete').html(htmlResponse);
                                $('#idStatusDelete').show();
                            }
            });
        });
       

        //  Update Status
        $(document).on("click", ".modalUpdateStatus", function () {
            let id = $(this).data('id');
            $(".modal-body #idStatusUpdate").val(id);
            
            $("#modalUpdateStatus").on('shown.bs.modal', function(){
                $.ajax({
                    url     :   '/ajax/api/updatestatus',
                    data	:   {
                                    "_token" : "{{ csrf_token() }}",
                                    "id" : id,
                                },
                    type	: 	'POST',
                    dataType:   'json',
                    success :   function(data) {
                                    $('#modalUpdateStatus').modal('hide');
                                }
                });
            });

        });


    </script>








@endsection

