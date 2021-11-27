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