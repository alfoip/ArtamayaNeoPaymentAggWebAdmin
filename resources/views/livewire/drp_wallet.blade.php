
@extends('layouts.customapp')

@section('style')

    <!-- Internal Chart-Morris css-->
    <link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

    <!-- Internal Nice-select css  -->
    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

    <!-- Internal News-Ticker css-->
    <link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

    <!-- Jquery-countdown css-->
    <link href="{{URL::asset('assets/plugins/jquery-countdown/countdown.css')}}" rel="stylesheet">

    <!-- Internal News-Ticker css-->
    <link href="{{URL::asset('assets/plugins/newsticker/jquery.jConveyorTicker.css')}}" rel="stylesheet" />

@endsection

@section('content')
    @include('layouts.mainhorizontallayouts.horizontal-main')

    <div class="breadcrumb-header justify-content-between pt-2">
        <div class="left-content">
            <h6 class="content-title mb-2">Welcome {{ session()->get('sessName') }},</h6>
        </div>
    </div>

    <!-- row  -->
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
                <div class="js-conveyor-example">
                    <ul class="news-crypto" id="tickerCrypto">
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="my-auto">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Augur.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX0">REP / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX0Val">$0.0215<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/AquariusCoin.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX1">ARCO / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX1Val">$425.25<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>+12.85%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/BitShares.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX2">BTS / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX2Val">$2.786<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-02.25%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Bytecoin.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX3">BCN / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX3Val">$15.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card" >
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="my-auto">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Dash.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX4">Dash / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX4Val">$5.125<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-11.85%%</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/EOS.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX5">EUR / INR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX5Val">$135.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Decred.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX6">ETH / USDT</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX6Val"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/IOTA.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX7">IOTA / USD</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX7Val">$67.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Litecoin.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX8">LTC / USD</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX8Val">$7.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.42%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="crypto-card">
                                <div class="row">
                                    <div class=" d-flex">
                                        <div class="">
                                            <img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Monero.svg')}}" class="w-6 h-6 mt-0" alt="">
                                        </div>
                                        <div class="ml-3">
                                            <p class="mb-1 tx-13" id="pairX9">XMR / EUR</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX9Val">$4.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Balance</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="table-responsive market-values">
                        <span class="text-info text-sm">Balance Rupiah</span>
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                            <thead>
                            <tr>
                                <th class="text-center">Asset/Currency</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Total Balance</th>
                                <th class="text-center">Available Balance</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr class="border-bottom">
                                <td class="text-center">IDR</td>
                                <td id="idrBalance" class="text-center">Indonesian Rupiah</td>
                                <td id="idrTotalBalance" class="text-right">0.00</td>
                                <td id="idrAvailableBalance" class="text-right">0.00</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive market-values">
                        <span class="text-info text-sm">Balance Assets</span>
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                            <thead>
                            <tr>
                                <th class="text-center">Asset/Currency</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Total Balance</th>
                                <th class="text-center">Available Balance</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr class="border-bottom">
                                <td class="text-center">ADA</td>
                                <td class="text-center">ADA</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">AXS</td>
                                <td class="text-center">AXS</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">BAKE</td>
                                <td class="text-center">BAKE</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">BTC</td>
                                <td class="text-center">BTC</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">DOGE</td>
                                <td class="text-center">DOGE</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">DOT</td>
                                <td class="text-center">DOT</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">ETH</td>
                                <td class="text-center">ETH</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">TLM</td>
                                <td class="text-center">TLM</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">VET</td>
                                <td class="text-center">VET</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="text-center">XRP</td>
                                <td class="text-center">XRP</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-right">0.00000000</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-success mr-2">Top Up</a><a href="#" class="btn btn-sm btn-danger mr-2">Withdraw</a><a href="#" class="btn btn-sm btn-info mr-2">Trade</a><a href="#" class="btn btn-sm btn-warning">Convert</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Balance History</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="market-values">

                        <div class="row">
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="form-group row">
                                            <label for="trxDateTime" class="col-sm-4 col-form-label text-info text-right">Date Time Range</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control pull-right" id="trxDateTime">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="assetId" class="col-sm-4 col-form-label text-info text-right">Assets/Currency</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="assetId">
                                                    <option value="ALL" selected>ALL</option>
                                                    @if(isset($assetData))
                                                        <?php $count = 0; ?>
                                                        @foreach($assetData as $data)
                                                            @if($count == 0)
                                                                <option value="{{trim($data->pair_id)}}">{{ $data->pair_name }}</option>
                                                            @else
                                                                <option value="{{trim($data->pair_id)}}">{{ $data->pair_name }}</option>
                                                            @endif
                                                            <?php $count = $count + 1; ?>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="trxStatus" class="col-sm-4 col-form-label text-info text-right">Status</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="trxStatus">
                                                    <option value="ALL" selected>ALL</option>
                                                    <option value="PENDING">PENDING</option>
                                                    <option value="COMPLETED">COMPLETED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="text-right pull-right">
                                            <button type="submit" class="btn btn-sm btn-success" id="btnView"><i class="fa fa-envelope-o"></i> View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive market-values mt-3">
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                            <thead>
                            <tr>
                                <th class="text-center">Date Time</th>
                                <th class="text-center">Asset/Currency</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Info</th>
                            </tr>
                            </thead>

                            <tbody>
{{--                            <tr class="border-bottom">--}}
{{--                                <td class="text-center"></td>--}}
{{--                                <td class="text-center"></td>--}}
{{--                                <td class="text-right">0.00000000</td>--}}
{{--                                <td class="text-center"></td>--}}
{{--                                <td class="text-left"></td>--}}
{{--                            </tr>--}}


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

    <!-- Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!--Chart bundle min js -->
    <script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

    <!-- JQuery sparkline js -->
    <script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sampledata js -->
    <script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Internal  Flot js-->
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
    <script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>

    <!-- Internal Newsticker js-->
    <script src="{{URL::asset('assets/plugins/newsticker/jquery.jConveyorTicker.js')}}"></script>
    <script src="{{URL::asset('assets/js/newsticker.js')}}"></script>

    <!-- Internal Nice-select js-->
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    <!-- index js -->
    <script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
@endsection

