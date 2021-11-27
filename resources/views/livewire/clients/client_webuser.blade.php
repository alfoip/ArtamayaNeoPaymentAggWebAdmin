
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
{{-- @dd($privilegeList) --}}
<div class="row mt-3 no-gutters">
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
                                        <p class="mg-b-10" style="font-size:20pt; font-weight:bold;">Web Access Credential</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 pl-0 ml-0 border-right" id="idWebUserList">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">List of Web User</p>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:98%">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th style="width:10%;">Active</th>
                                            <th style="width:20%;">Username</th>
                                            <th style="width:20%;">Email</th>
                                            <th style="width:20%;">Password</th>
                                            <th style="width:20%;">Privilege</th>
                                            <th style="width:10%;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($webUserList))
                                                @if(count(collect($webUserList)) > 0)
                                                    @php ($i = 0)
                                                    @foreach($webUserList as $data)
                                                    @php ($i++)
                                                    <tr>
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
                                                        <td class="align-middle">{{ $data['name'] }}</td>
                                                        <td class="align-middle">{{ $data['email'] }}</td>
                                                        <td class="align-middle">{{ $data['password'] }}</td>
                                                        <td class="align-middle">{{ $data['privilegeid'] }}</td>
                                                        <td class="align-middle text-center">
                                                            <a  href="#modalEditAccount" 
                                                                id="btnDetail" 
                                                                class="modalEditAccount btn btn-sm btn-primary" 
                                                                data-id="{{ $data['id'] }}" 
                                                                data-name="{{ $data['name'] }}" 
                                                                data-email="{{ $data['email'] }}" 
                                                                data-password="{{ $data['password'] }}" 
                                                                data-privilege="{{ $data['privilege'] }}" 
                                                                data-toggle="modal" data-target="#modalEditAccount" style="width:70px;"><i class="fa fa-md fa-edit mr-1"></i>Edit</a>
                                                            <a  href="#modalDeleteAccount" 
                                                                id="btnDelete" 
                                                                class="modalDeleteAccount btn btn-sm btn-danger" 
                                                                data-id="{{ $data['id'] }}" 
                                                                data-toggle="modal" data-target="#modalDeleteAccount" style="width:70px;"><i class="fa fa-md fa-trash mr-1"></i>Delete</a>
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
                                                id="btnNewClient" data-toggle="modal" data-target="#modalNewAccount">Add Web User</button>
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
{{-- @dd($privilegeList) --}}




<!-- Modal Process Only -->
<div class="modal center-modal fade" id="modalUpdateStatus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Processing
                <input type="text" id="id">
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete Account -->
<div class="modal center-modal fade" id="modalDeleteAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">Delete Web User Access</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                To continue this process, please input your password
                <form class="form-element mt-2" autocomplete="off">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <input class="text-center form-control form-control-sm border border-dark" type="password" id="credentialPassword">
                        <input type="hidden" id="deleteID">
                    </div>
                </form>
            </div>
            <div class="text-center">
                <div class="text-danger" style="font-weight:bold;" id="idStatus"></div>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-danger" id="btnDoDelete">Proceed to delete</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal New Account -->
<div class="modal center-modal fade" id="modalNewAccount" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="box-title">New Web User</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-element">
                    <input type="hidden" id="newClientid" value="{{ $clientid }}">

                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="newName" class="col-sm-4 col-form-label">Full Name</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="newName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="newEmail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newPrivilege" class="col-sm-4 col-form-label">Privilege</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 w-p100" id="newPrivilege">
                                    @if(isset($privilegeList))
                                        @foreach($privilegeList as $privilege)
                                            @if($privilege['privilegeid'] === 'PGUSER')
                                                <option value="{{ $privilege['privilegeid'] }}" selected>{{ $privilege['privilegedescription'] }}</option>
                                            @else
                                                <option value="{{ $privilege['privilegeid'] }}">{{ $privilege['privilegedescription'] }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
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
                <h5 class="box-title">Edit Web User</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-element">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="editName" class="col-sm-4 col-form-label">Full Name</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="editName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control form-control-sm border border-dark" type="text" id="editEmail">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="editPrivilege" class="col-sm-4 col-form-label">Privilege</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 w-p100" id="editPrivilege">
                                    @if(isset($privilegeList))
                                        @foreach($privilegeList as $privilege)
                                            @if($privilege['privilegeid'] === 'PGUSER')
                                                <option value="{{ $privilege['privilegeid'] }}" selected>{{ $privilege['privilegedescription'] }}</option>
                                            @else
                                                <option value="{{ $privilege['privilegeid'] }}">{{ $privilege['privilegedescription'] }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <input type="hidden" id="editClientid" value="{{ $clientid }}">
                        <input type="hidden" id="editId">

                </form>
            </div>
            <div class="modal-footer modal-footer-uniform text-center">
                <button type="button" class="btn btn-sm btn-primary" id="btnDoEdit">Save</button>
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
        $(document).ready(function() {
            $('#newPrivilege').select2({
                dropdownParent: $('#modalNewAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });

        });

        //  Add New
        $(document).on("click", ".modalNewAccount", function () {
            $(".modal-body #newName").val('');
            $(".modal-body #newEmail").val('');
            $(".modal-body #newPrivilege").val('');

            $("#modalNewAccount").on('shown.bs.modal', function(){
                $(this).find('#newName').focus();
            });	
        });

        $('#btnDoSaveNew').on('click', function(e){
            e.preventDefault();
          
            let newClientid     = $('#newClientid').val();
            let newName         = $('#newName').val();
            let newEmail        = $('#newEmail').val();
            let newPrivilege    = $('#newPrivilege').val();

            let btnDoSaveNew = $('#btnDoSaveNew')
                btnDoSaveNew.attr('disabled', true)
                btnDoSaveNew.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Saving')

            $.ajax({
                url: 	'/ajax/web/add',
                data: 	{
                            "_token"    : "{{ csrf_token() }}",
                            "clientid"  : "{{ $clientid }}",
                            "name"      : newName,
                            "email"     : newEmail,
                            "privilege" : newPrivilege,
                        },
                type: 	'POST',
                dataType:   'json',
                
                success: function(status) {
                            let btnDoSaveNew = $('#btnDoSaveNew')
                                btnDoSaveNew.attr('disabled', false)
                                btnDoSaveNew.html('Save')
                            $("#modalNewAccount").modal('hide');
                            $("#idWebUserList").load("/ajax/web/show/{{ $clientid }}");
                        }
            });
        });
       

        //  Edit
        $(document).on("click", ".modalEditAccount", function () {
            let id          = $(this).data('id');
            let name        = $(this).data('name');
            let email       = $(this).data('email');
            let privilege   = $(this).data('privilege');

            $(".modal-body #editId").val(id);
            $(".modal-body #editName").val(name);
            $(".modal-body #editEmail").val(email);
            $(".modal-body #editPrivilege").val(privilege);

            $("#modalEditAccount").on('shown.bs.modal', function(){
                $(this).find('#editName').focus();
            });	
        });

        $('#btnDoEdit').on('click', function(e){
            e.preventDefault();

            let id              = $('#editId').val();
            let clientid        = $('#editClientid').val();
            let name            = $('#editName').val();
            let privilege       = $('#editPrivilege').val();

            let btnDoEdit = $('#btnDoEdit')
                btnDoEdit.attr('disabled', true)
                btnDoEdit.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Processing')

                $.ajax({
                    url     : 	'/ajax/web/update',
                    data    : 	{
                                    "_token" : "{{ csrf_token() }}",
                                    "id" : id,
                                    "clientid" : clientid,
                                    "name" : name,
                                    "privilege" : privilege,
                                },
                    type    : 	'POST',
                    dataType:   'json',
                    success :   function(status) {
                                    console.log(status);
                                    htmlResponse = ''; 
                                    if(status == "000" ){
                                        $("#modalEditAccount").modal('hide');
                                        $("#idWebUserList").load("/ajax/web/show/{{ $clientid }}");
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

        //  Delete
        $(document).on("click", ".modalDeleteAccount", function () {
            let id = $(this).data('id');
            
            $(".modal-body #deleteID").val(id);
            $(".modal-body #credentialPassword").val('');

            $("#modalDeleteAccount").on('shown.bs.modal', function(){
                $(this).find('#credentialPassword').focus();
            });	
        });

        $('#btnDoDelete').on('click', function(e){
            e.preventDefault();
          
            let credentialPassword  = $('#credentialPassword').val();
            let id                  = $('#deleteID').val();

            let btnDoDelete = $('#btnDoDelete')
                btnDoDelete.attr('disabled', true)
                btnDoDelete.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Deleting')

            $.ajax({
                url     : 	'/ajax/web/delete',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "credentialpassword" : credentialPassword,
                                "id" : id,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(status) {
                                console.log(status);
                                htmlResponse = ''; 
                                if(status == "000" ){
                                    $("#modalDeleteAccount").modal('hide');
                                    $("#idWebUserList").load("/ajax/web/show/{{ $clientid }}");
                                } else {
                                    htmlResponse += "Failed : Wrong credential, please try again";
                                }
                                
                                let btnDoDelete = $('#btnDoDelete')
                                    btnDoDelete.attr('disabled', false)
                                    btnDoDelete.html('<span class="btn btn-sm btn-primary"></span> Save')

                                $('#idStatus').html(htmlResponse);
                                $('#idStatus').show();
                            }
            });
        });



        //  Update Status
        $(document).on("click", ".modalUpdateStatus", function () {
            let id = $(this).data('id');
            $(".modal-body #id").val(id);
            
            $("#modalUpdateStatus").on('shown.bs.modal', function(){
                $.ajax({
                    url     :   '/ajax/web/updatestatus',
                    data	:   {
                                    "_token"    : "{{ csrf_token() }}",
                                    "clientid"  : "{{ $clientid }}",
                                    "id"        : id,
                                },
                    type	: 	'POST',
                    dataType:   'json',
                    success :   function() {
                                    console.log("Success")
                                    $('#modalUpdateStatus').modal('hide');
                                }
                });
            });

        });



    </script>








@endsection

