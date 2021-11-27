
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
    
    <!-- row -->
    <div class="row mt-3 no-gutters">
        <div class="col-md-12 ml-0 pl-0 mr-0 pr-0">
            <div class="card overflow-hidden" style="min-height:80vh;">
                <div class="card-body" id="idClientList">
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-md-12 border-right">
                                <p class="mg-b-10" style="font-size:20pt; font-weight:bold;">Client Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive market-values">
                        <button type="button" class="btn btn-info btn-sm mb-2" id="btnNewClient" data-toggle="modal" data-target="#modalNewAccount">New Account</button>
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" id="tableClient">
                            <thead class="thead-dark">
                            <tr>
                                <th style="width:5%;">Active</th>
                                <th style="width:8%;">Client ID</th>
                                <th style="width:20%;">Name</th>
                                <th style="width:10%;">Country</th>
                                <th style="width:8%;">Currency</th>
                                <th style="width:15%;">Contact</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:19%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($clientList))
                                    @php ($i = 0)
                                    @foreach($clientList as $data)
                                    @php ($i++)
                                    <tr id="idRowNum{{ $i }}">
                                        <td class="align-middle text-center">
                                            <label class="switch mb-0">
                                                <input  type="checkbox" 
                                                        class="modalUpdateStatus"
                                                        data-clientid="{{ $data['clientid'] }}"
                                                        data-toggle="modal"
                                                        data-target="#modalUpdateStatus"    
                                                        value="{{ $data['isactive'] }}" {{ $data['isactive'] == true ? "checked" : "" }}>
                                                <span class="slider round"></span>
                                           </label>
                                        </td>
                                        <td class="align-middle">{{ $data['clientid'] }}</td>
                                        <td class="align-middle">{{ $data['clientname'] }}</td>
                                        <td class="align-middle">{{ $data['clientcountryname'] }}</td>
                                        <td class="align-middle">{{ $data['clientcurrency'] }}</td>
                                        <td class="align-middle">{{ $data['clientemail'] }}</td>
                                        <td class="align-middle">{{ $data['picname'] }}</td>
                                        <td class="align-middle text-center">
                                            <a href="/clients/detail/{{ $data['clientid'] }}" class="btn btn-sm btn-primary" style="width:75px;"><i class="fa fa-md fa-cogs mr-1"></i>Setting</a>
                                            <a  href="#modalEditAccount" id="btnedit"
                                                class="modalEditAccount btn btn-sm btn-info" 
                                                data-clientid="{{ $data['clientid'] }}" 
                                                data-toggle="modal" 
                                                data-target="#modalEditAccount" style="width:75px;"><i class="fa fa-md fa-edit mr-1"></i>Edit</a>
                                            <a  href="#modalDeleteAccount"  id="btnDelete" 
                                                class="modalDeleteAccount btn btn-sm btn-danger"
                                                data-rownum="{{ $i }}"
                                                data-clientid="{{ $data['clientid'] }}" 
                                                data-toggle="modal" 
                                                data-target="#modalDeleteAccount" style="width:70px;"><i class="fa fa-md fa-trash mr-1"></i>Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
    
                            </tbody>
                        </table>
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
                    <h5 class="box-title">New Client</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-element" id="formNewAccount">
                        <div class="box-body">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="newFullName" class="col-sm-4 col-form-label">Client Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newFullName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newAddress">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newRegion" class="col-sm-4 col-form-label">Region</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newRegion">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newCountry" class="col-sm-4 col-form-label">Country</label>
                                <div class="col-sm-8">
                                    <select class="form-control border border-dark select2 w-p100" id="newCountry">
                                        @if(isset($countryList))
                                            @foreach($countryList as $data)
                                                @if($data['countryName'] === 'Indonesia')
                                                    <option value="{{ $data['countryCode'] }}" selected>{{ $data['countryName'] }}</option>
                                                @else
                                                    <option value="{{ $data['countryCode'] }}">{{ $data['countryName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newCountry" class="col-sm-4 col-form-label">Currency</label>
                                <div class="col-sm-8">
                                    <select class="form-control border border-dark select2 w-p100" id="newCurrency">
                                        @if(isset($currencyList))
                                            @foreach($currencyList as $data)
                                                @if($data['currencyId'] === 'IDR')
                                                    <option value="{{ $data['currencyId'] }}" selected>{{ $data['currencyName'] }}</option>
                                                @else
                                                    <option value="{{ $data['currencyId'] }}">{{ $data['currencyName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="email" id="newEmail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPICName" class="col-sm-4 col-form-label">PIC Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newPICName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPICPhoneNumber" class="col-sm-4 col-form-label">PIC Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newPICPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="newPICEmail" class="col-sm-4 col-form-label">PIC Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="newPICEmail">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="text-center">
                    <div class="text-danger" style="font-weight:bold;" id="idStatusAdd"></div>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-sm btn-primary float-right" id="btnDoSaveNew">Save</button>
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
                            <div class="form-group row">
                                <label for="editFullName" class="col-sm-4 col-form-label">Client Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editFullName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editAddress">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editRegion" class="col-sm-4 col-form-label">Region</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editRegion">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editCountry" class="col-sm-4 col-form-label">Country</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 w-p100" id="editCountry" style="border:2px solid #000;">
                                        @if(isset($countryList))
                                            @foreach($countryList as $data)
                                                @if($data['countryName'] === 'Indonesia')
                                                    <option value="{{ $data['countryCode'] }}" selected>{{ $data['countryName'] }}</option>
                                                @else
                                                    <option value="{{ $data['countryCode'] }}">{{ $data['countryName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editCountry" class="col-sm-4 col-form-label">Currency</label>
                                <div class="col-sm-8">
                                    <select class="form-control border border-dark select2 w-p100" id="editCurrency">
                                        @if(isset($currencyList))
                                            @foreach($currencyList as $data)
                                                @if($data['currencyId'] === 'IDR')
                                                    <option value="{{ $data['currencyId'] }}" selected>{{ $data['currencyName'] }}</option>
                                                @else
                                                    <option value="{{ $data['currencyId'] }}">{{ $data['currencyName'] }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPhoneNumber" class="col-sm-4 col-form-label">Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="email" id="editEmail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPICName" class="col-sm-4 col-form-label">PIC Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editPICName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPICPhoneNumber" class="col-sm-4 col-form-label">PIC Phone Number</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editPICPhoneNumber">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editPICEmail" class="col-sm-4 col-form-label">PIC Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control border border-dark" type="text" id="editPICEmail">
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="editClientID">
                    </form>
                </div>
                <div class="text-center">
                    <div class="text-danger" style="font-weight:bold;" id="idStatusEdit"></div>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-sm btn-primary float-right" id="btnDoEdit">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Delete Account -->
    <div class="modal center-modal fade" id="modalDeleteAccount" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="box-title">Delete Client</h5>
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

            $('#newCountry').select2({
                dropdownParent: $('#modalNewAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });

            $('#newCurrency').select2({
                dropdownParent: $('#modalNewAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });

            
            $('.modal-body #newFullName').val('')
            $('.modal-body #newAddress').val('')
            $('.modal-body #newRegion').val('')
            $('.modal-body #newCountry').val('Indonesia')
            $('.modal-body #newCurrency').val('IDR')
            $('.modal-body #newPhoneNumber').val('')
            $('.modal-body #newEmail').val('')
            $('.modal-body #newPICName').val('')
            $('.modal-body #newPICPhoneNumber').val('')
            $('.modal-body #newPICEmail').val('')

            $("#modalNewAccount").on('shown.bs.modal', function(){
                $(this).find('#newFullName').focus();
            });	
        });

        $('#btnDoSaveNew').on('click', function(e){
            e.preventDefault();
          
            let clientname      = $('#newFullName').val();
            let clientaddress   = $('#newAddress').val();
            let clientregion    = $('#newRegion').val();
            let clientcountryid = $('#newCountry').val();
            let clientcurrency  = $('#newCurrency').val();
            let clientphone     = $('#newPhoneNumber').val();
            let clientemail     = $('#newEmail').val();
            let picname         = $('#newPICName').val();
            let picphone        = $('#newPICPhoneNumber').val();
            let picemail        = $('#newPICEmail').val();

            let btnDoSaveNew = $('#btnDoSaveNew')
                btnDoSaveNew.attr('disabled', true)
                btnDoSaveNew.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Saving')

            $.ajax({
                url     : 	'/ajax/client/add',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "clientname" : clientname,
                                "clientaddress" : clientaddress,
                                "clientregion" : clientregion,
                                "clientcountryid" : clientcountryid,
                                "clientcurrency" : clientcurrency,
                                "clientphone" : clientphone,
                                "clientemail" : clientemail,
                                "picname" : picname,
                                "picphone" : picphone,
                                "picemail" : picemail,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(response) {    
                                htmlResponse = ''; 
                                if(response == "000" ) {
                                    $("#modalNewAccount").modal('hide');
                                    $("#idClientList").load("/ajax/client/show");
                                } else if(response == "208" ) {
                                    htmlResponse += "Failed : Mandatory field cannot be empty";
                                } else {
                                    htmlResponse += "Failed : Error to create new client, please try again";
                                }
                                
                                let btnDoSaveNew = $('#btnDoSaveNew')
                                    btnDoSaveNew.attr('disabled', false)
                                    btnDoSaveNew.html('Save')

                                $('#idStatusAdd').html(htmlResponse);
                                $('#idStatusAdd').show();
                            }
            });
        });
       
            
        //  Edit
        $(document).on("click", ".modalEditAccount", function () {

            $('#editCountry').select2({
                dropdownParent: $('#modalEditAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });

            $('#editCurrency').select2({
                dropdownParent: $('#modalEditAccount > .modal-dialog > .modal-content > .modal-body'),
                width: '100%'
            });


            let clientid    = $(this).data('clientid');

            $.ajax({
                url     :   '/ajax/client/loaddata',
                data    :   {
                                "_token" : "{{ csrf_token() }}",
                                "clientid" : clientid,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(dataX) {
                                let clientid = dataX[0]['clientid'];
                                let clientname = dataX[0]['clientname'];
                                let clientaddress = dataX[0]['clientaddress'];
                                let clientregion = dataX[0]['clientregion'];
                                let clientcountryname = dataX[0]['clientcountryname'];
                                let clientemail = dataX[0]['clientemail'];
                                let clientphone = dataX[0]['clientphone'];
                                let clientcurrency = dataX[0]['clientcurrency'];
                                let picname = dataX[0]['picname'];
                                let picemail = dataX[0]['picemail'];
                                let picphone = dataX[0]['picphone'];

                                $('#editClientID').val(clientid);
                                $('#editFullName').val(clientname);
                                $('#editAddress').val(clientaddress);
                                $('#editRegion').val(clientregion);
                                $('#editCountry').change();
                                $('#editCurrency').change();
                                $('#editPhoneNumber').val(clientphone);
                                $('#editEmail').val(clientemail);
                                $('#editPICName').val(picname);
                                $('#editPICPhoneNumber').val(picphone);
                                $('#editPICEmail').val(picemail);
                            }
            })
        })

        $('#btnDoEdit').on('click', function (e) {
            e.preventDefault()

            let clientid            = $('#editClientID').val();
            let clientname          = $('#editFullName').val();
            let clientaddress       = $('#editAddress').val();
            let clientregion        = $('#editRegion').val();
            let clientcountryname   = $('#editCountry').val();
            let clientcurrency      = $('#editCurrency').val();
            let clientphone         = $('#editPhoneNumber').val();
            let clientemail         = $('#editEmail').val();
            let picname             = $('#editPICName').val();
            let picphone            = $('#editPICPhoneNumber').val();
            let picemail            = $('#editPICEmail').val();


            let btnDoEdit = $('#btnDoEdit')
                btnDoEdit.attr('disabled', true)
                btnDoEdit.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Processing')


                $.ajax({
                url     : 	'/ajax/client/update',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "clientid" : clientid,
                                "clientname" : clientname,
                                "clientaddress" : clientaddress,
                                "clientregion" : clientregion,
                                "clientcountryname" : clientcountryname,
                                "clientcurrency" : clientcurrency,
                                "clientphone" : clientphone,
                                "clientemail" : clientemail,
                                "picname" : picname,
                                "picphone" : picphone,
                                "picemail" : picemail,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(status) {
                                console.log(status);
                                htmlResponse = ''; 
                                if(status == "000" ){
                                    $("#modalEditAccount").modal('hide');
                                    $("#idClientList").load("/ajax/client/show");
                                } else {
                                    htmlResponse += "Failed : Please check your input.";
                                }

                                let btnDoEdit = $('#btnDoEdit')
                                    btnDoEdit.attr('disabled', false)
                                    btnDoEdit.html('Save')

                                $('#idStatusEdit').html(htmlResponse);
                                $('#idStatusEdit').show();
                            }
            });
        })
      

        //  Delete
        $(document).on("click", ".modalDeleteAccount", function () {
            let clientid    = $(this).data('clientid');
            let rownum      = $(this).data('rownum');
            
            $(".modal-body #deleteID").val(clientid);
            $(".modal-body #rowNumID").val(rownum);
            $(".modal-body #deletePassword").val('');

            $("#modalDeleteAccount").on('shown.bs.modal', function(){
                $(this).find('#deletePassword').focus();
            });	
        });

        $('#btnDoDelete').on('click', function(e){
            e.preventDefault();
          
            let credentialPassword  = $('#deletePassword').val();
            let clientid            = $('#deleteID').val();
            let rownum              = $('#rowNumID').val();

            let btnDoDelete = $('#btnDoDelete')
                btnDoDelete.attr('disabled', true)
                btnDoDelete.html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span> Deleting')

            $.ajax({
                url     : 	'/ajax/client/delete',
                data    : 	{
                                "_token" : "{{ csrf_token() }}",
                                "credentialpassword" : credentialPassword,
                                "clientid" : clientid,
                            },
                type    : 	'POST',
                dataType:   'json',
                success :   function(status) {
                                htmlResponse = ''; 
                                if(status == "000" ){
                                    $("#modalDeleteAccount").modal('hide');
                                    $("#idRowNum"+rownum).hide();
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
            let clientid = $(this).data('clientid');
            $(".modal-body #idStatusUpdate").val(clientid);
            
            $("#modalUpdateStatus").on('shown.bs.modal', function(){
                $.ajax({
                    url     :   '/ajax/client/updatestatus',
                    data	:   {
                                    "_token" : "{{ csrf_token() }}",
                                    "clientid" : clientid,
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

