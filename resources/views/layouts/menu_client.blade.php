<div class="card overflow-hidden">
    <div class="card-body">
        <div class="mb-4">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10"><i class="fa fa-lg fa-md fa-wallet mr-2"></i>Client</h4>
            </div>
        </div>
        <div class="table-responsive market-values">
            <table class="table">
                <tbody>
                    @if ($menuid === "detail")
                        <tr class="bg-dark">
                            <td class="text-light">
                                <i class="fa fa-md fa-list-ul pr-1" style="width:20px;"></i><b>Detail</b>
                            </td>
                        </tr>
                    @else    
                        <tr>
                            <td class="text-dark" onclick="document.location = '/clients/detail/{{ $clientid }}';" style="cursor:pointer;">
                                <i class="fa fa-md fa-list-ul pr-1" style="width:20px;"></i>Detail
                            </td>
                        </tr>
                    @endif

                    @if ($menuid === "apiaccess")
                        <tr class="bg-dark">
                            <td class="text-light">
                                <i class="fa fa-md fa-wifi pr-1" style="width:20px;"></i><b>API Access</b>
                            </td>
                        </tr>
                    @else    
                        <tr>
                            <td class="text-dark" onclick="document.location = '/clients/api/{{ $clientid }}';" style="cursor:pointer;">
                                <i class="fa fa-md fa-wifi pr-1" style="width:20px;"></i>API Access
                            </td>
                        </tr>
                    @endif

                    @if ($menuid === "webaccess")
                        <tr class="bg-dark">
                            <td class="text-light">
                                <i class="fa fa-md fa-globe pr-1" style="width:20px;"></i><b>Web Access</b>
                            </td>
                        </tr>
                    @else    
                        <tr>
                            <td class="text-dark" onclick="document.location = '/clients/web/{{ $clientid }}';" style="cursor:pointer;">
                                <i class="fa fa-md fa-globe pr-1" style="width:20px;"></i>Web Access
                            </td>
                        </tr>
                    @endif


                    @if ($menuid === "routing")
                        <tr class="bg-dark">
                            <td class="text-light">
                                <i class="fa fa-md fa-map-signs pr-1" style="width:20px;"></i><b>Routing</b>
                            </td>
                        </tr>
                    @else    
                        <tr>
                            <td class="text-dark" onclick="document.location = '/clients/routing/{{ $clientid }}';" style="cursor:pointer;">
                                <i class="fa fa-md fa-map-signs pr-1" style="width:20px;"></i>Routing
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
