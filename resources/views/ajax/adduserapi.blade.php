<div class="mb-1">
    <div class="row">
        <div class="col-md-12 border-right">
            <p class="mg-b-10 ml-3" style="font-size:14pt; font-weight:bold;">Add New API User</p>
        </div>
    </div>
</div>
<div class="ml-3 mr-5">
    <form name="requestForm" id="requestForm" autocomplete="off">
        <span class="text-dark" style="font-size:9pt; font-weight:bold;">Username</span>
        <p class="validation">
        <input id="username" name="username" type="text" class="form-control" placeholder="API Username">
        </p>

        <span class="text-dark" style="font-size:9pt; font-weight:bold;">Password</span>
        <p class="validation">
        <input id="password" name="password" type="text" class="form-control" placeholder="API Password">
        </p>

        <span class="text-dark" style="font-size:9pt; font-weight:bold;">Remote IP Address</span>
        <p class="validation">
        <input id="remoteipaddress" name="remoteipaddress" type="text" class="form-control" placeholder="Remote IP Address">
        </p>

        <span class="text-dark" style="font-size:9pt; font-weight:bold;">API Access</span>
        <p class="validation">
        <input id="apiaccess" name="apiaccess" type="text" class="form-control" placeholder="API Access">
        </p>
        {{-- <button id="buttonForm" class="btn btn-sm btn-success" type="submit" disabled="true">Submit</button> --}}
        <button id="buttonForm" class="btn btn-sm btn-success" type="submit">Submit</button>
    </form>
</div>