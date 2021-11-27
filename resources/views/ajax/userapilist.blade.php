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