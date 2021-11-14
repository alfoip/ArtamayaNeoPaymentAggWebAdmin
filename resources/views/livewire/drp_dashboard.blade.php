
@extends('layouts.mainapp')

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
                                            <p class="mb-1 tx-13" id="pairX0">Total User</p>
                                            <div class="m-0 tx-13 text-warning" id="totalUser">{{ $dataUserCount }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> accounts</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX1">New User Today</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX1Val">{{ $todayNewUserCount }}<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i> accounts</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX2">Traffics This Month</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX2Val">{{ $dataMonthTransactionCount }}<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i> traffics</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX3">Traffics Today</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX3Val">{{ $todayTransactionCount }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> traffics</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX4">Trx Value This Month</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX4Val">{{ $dataMonthTransactionValue }}<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i> IDR</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX5">Trx Value today</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX5Val">{{ $todayTransactionValue }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> IDR</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX7">Top up This Month</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX7Val">{{ $dataMonthTopupValue }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> IDR</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX8">Top Up Today</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX8Val">{{ $dataTodayTopUpValue }}<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i> IDR</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX9">Withdrawal This Month</p>
                                            <div class="m-0 tx-13 text-warning" id="pairX9Val">{{ $dataMonthWithdrawalValue }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> IDR</span></div>
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
                                            <p class="mb-1 tx-13" id="pairX9">Withdrawal Today</p>
                                            <div class="m-0 tx-13 text-warning" id="withdrawalValueToday">{{ $dataTodayWithdrawalValue }}<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i> IDR</span></div>
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
                            <h4 class="card-title mg-b-10">Last 10 New Accounts</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                    <div class="table-responsive market-values">
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" id="tableNewUser">
                            <thead>
                            <tr>
                                <th>Created At</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Region</th>
                                <th>Email Verified At</th>
                                <th>Phone Verified At</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($data10Users))
                                    @foreach($data10Users as $data)
                                        <tr class="border-bottom">
                                            <td class="text-center">{{ $data['created_at'] }}</td>
                                            <td class="text-left">{{ $data['name'] }}</td>
                                            <td class="text-left">{{ $data['email'] }}</td>
                                            <td class="text-center">{{ $data['phone_number'] }}</td>
                                            <td class="text-center">{{ $data['region'] }}</td>
                                            <td class="text-center">{{ $data['email_verified_at'] }}</td>
                                            <td class="text-center">{{ $data['phone_verified_at'] }}</td>
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

