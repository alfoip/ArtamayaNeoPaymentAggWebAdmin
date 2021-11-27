
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

    

@endsection

@section('content')
{{-- @dd($userapiList) --}}
@foreach ($clientList as $data) 
    @php ($clientid = $data['clientid'])
    @php ($clientname = $data['clientname'])
    @php ($clientaddress = $data['clientaddress'])
    @php ($clientregion = $data['clientregion'])
    @php ($clientcountryname = $data['clientcountryname'])
    @php ($clientemail = $data['clientemail'])
    @php ($clientphone = $data['clientphone'])
    @php ($clientcurrency = $data['clientcurrency'])
    @php ($picname = $data['picname'])
    @php ($picemail = $data['picemail'])
    @php ($picphone = $data['picphone'])
    @php ($isactiveclient = $data['isactive'])
    @php ($createdate = $data['createdate'])
@endforeach 

@foreach ($userapiList as $data) 
    @php ($username = $data['username'])
    @php ($password = $data['password'])
    @php ($remoteipaddress = $data['remoteipaddress'])
    @php ($apiaccess = $data['apiaccess'])
    @php ($token = $data['token'])
    @php ($tokenexpired = $data['tokenexpired'])
    @php ($createdate = $data['createdate'])
    @php ($isactiveuserapi = $data['isactive'])
@endforeach 



<div class="row no-gutters">
    <div class="col-md-12 ml-0 pl-0 mr-0 pr-0">
        <div class="card overflow-hidden">
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
                                        <p class="mg-b-10" style="font-size:20pt; font-weight:bold;">Informations</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pl-0 ml-0 border-right">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">Company Detail</p>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:92%;">
                                        <tr>
                                            <td style="width:30%;">Client Name</td>
                                            <td style="width:70%;">{{ $clientname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Address</td>
                                            <td>{{ $clientaddress }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Region</td>
                                            <td>{{ $clientregion }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Country</td>
                                            <td>{{ $clientcountryname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Currency</td>
                                            <td>{{ $clientcurrency }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Phone Number</td>
                                            <td>{{ $clientphone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Email</td>
                                            <td>{{ $clientemail }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client Status</td>
                                            @if($isactiveclient == 1)
                                                <td class="text-success" style="font-weight:bold;">ACTIVE</td>
                                            @else  
                                                <td class="text-danger" style="font-weight:bold;">IN-ACTIVE</td>
                                            @endif
                                        </tr>
                                    </table>

                                    <div class="mt-5 mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">Contact Detail</p>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:92%;">
                                        <tr>
                                            <td style="width:30%;">Contact Name</td>
                                            <td style="width:70%;">{{ $picname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Phone Number</td>
                                            <td>{{ $picphone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Email</td>
                                            <td>{{ $picemail }}</td>
                                        </tr>
                                    </table>
                                </div>


                                <div class="col-md-6 pr-0 mr-0">
                                    <div class="mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">API Credential</p>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:92%">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th style="width:30%;">Merchant ID</th>
                                            <th style="width:30%;">Username</th>
                                            <th style="width:30%;">Password</th>
                                            <th style="width:10%;">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(count(collect($userapiList)) > 0)
                                                @foreach($userapiList as $data)
                                                <tr>
                                                    <td class="align-middle">{{ $clientid }}</td>
                                                    <td class="align-middle">{{ $data['username'] }}</td>
                                                    <td class="align-middle">{{ $data['password'] }}</td>
                                                    @if(!empty($data['isactive'])?$data['isactive']:9 == 1)
                                                        <td class="text-success align-middle text-center" style="font-weight:bold;">ACTIVE</td>
                                                    @else
                                                        <td class="text-danger align-middle text-center" style="font-weight:bold;">INACTIVE</td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="text-center" colspan="5">
                                                        <img src="{{URL::asset('assets/img/png/icon-page-blank.png')}}" class="mt-3 mb-3" style="width:75px; height:75px;" alt="">
                                                        <p style="font-size:10pt;">This client have no API Access, click menu "API Access" to add new</p>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                    <div class="mt-5 mb-1">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">Web User List</p>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13 ml-3" id="tableClient" style="width:92%">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th style="width:60%;">Account</th>
                                            <th style="width:25%;">Privilege</th>
                                            <th style="width:15%;">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(count(collect($webuserList)) > 0)
                                                @foreach($webuserList as $data)
                                                <tr>
                                                    <td class="align-middle">{{ $data['email'] }}</td>
                                                    <td class="align-middle" style="font-size:10pt;">{{ $data['privilegeid'] }}</td>
                                                    @if(!empty($data['isactive'])?$data['isactive']:9 == 1)
                                                        <td class="text-success align-middle text-center" style="font-weight:bold;">ACTIVE</td>
                                                    @else
                                                        <td class="text-danger align-middle text-center" style="font-weight:bold;">INACTIVE</td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="text-center" colspan="3">
                                                        <img src="{{URL::asset('assets/img/png/icon-page-blank.png')}}" class="mt-3 mb-3" style="width:75px; height:75px;" alt="">
                                                        <p style="font-size:10pt;">This client have no Web User Access, click menu "Web Access" to add new</p>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
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

@endsection

