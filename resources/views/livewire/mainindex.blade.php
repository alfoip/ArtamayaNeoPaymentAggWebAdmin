
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
                                        <h4 class="card-title mg-b-10">24 Hours Market</h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                    </div>
                                </div>
                                <div class="table-responsive market-values">
                                    <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Open Price</th>
                                            <th>High Price</th>
                                            <th>Low Price</th>
                                            <th>Close Price</th>
                                            <th>Average Price</th>
                                            <th>Price change 24H</th>
                                            <th>% 24 Hours</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-adc tx-22"></i> ADA/USDT</td>
                                            <td id="adausdtOpenPrice" class="text-right"></td>
                                            <td id="adausdtHighPrice" class="text-right">966.61</td>
                                            <td id="adausdtLowPrice" class="text-right"></td>
                                            <td id="adausdtClosePrice" class="text-right"></td>
                                            <td id="adausdtAveragePrice" class="text-right"></td>
                                            <td id="adausdtChangePrice" class="text-right">-6</td>
                                            <td id="adausdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-adc tx-22"></i> AXS/USDT</td>
                                            <td id="axsusdtOpenPrice" class="text-right"></td>
                                            <td id="axsusdtHighPrice" class="text-right">966.61</td>
                                            <td id="axsusdtLowPrice" class="text-right"></td>
                                            <td id="axsusdtClosePrice" class="text-right"></td>
                                            <td id="axsusdtAveragePrice" class="text-right"></td>
                                            <td id="axsusdtChangePrice" class="text-right">-6</td>
                                            <td id="axsusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-bay tx-22"></i> BAKE/USDT</td>
                                            <td id="bakeusdtOpenPrice" class="text-right"></td>
                                            <td id="bakeusdtHighPrice" class="text-right">966.61</td>
                                            <td id="bakeusdtLowPrice" class="text-right"></td>
                                            <td id="bakeusdtClosePrice" class="text-right"></td>
                                            <td id="bakeusdtAveragePrice" class="text-right"></td>
                                            <td id="bakeusdtChangePrice" class="text-right">-6</td>
                                            <td id="bakeusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-btc tx-22"></i> BTC/USDT</td>
                                            <td id="btcusdtOpenPrice" class="text-right"></td>
                                            <td id="btcusdtHighPrice" class="text-right">966.61</td>
                                            <td id="btcusdtLowPrice" class="text-right"></td>
                                            <td id="btcusdtClosePrice" class="text-right"></td>
                                            <td id="btcusdtAveragePrice" class="text-right"></td>
                                            <td id="btcusdtChangePrice" class="text-right">-6</td>
                                            <td id="btcusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-doge tx-22"></i> DOGE/USDT</td>
                                            <td id="dogeusdtOpenPrice" class="text-right"></td>
                                            <td id="dogeusdtHighPrice" class="text-right">966.61</td>
                                            <td id="dogeusdtLowPrice" class="text-right"></td>
                                            <td id="dogeusdtClosePrice" class="text-right"></td>
                                            <td id="dogeusdtAveragePrice" class="text-right"></td>
                                            <td id="dogeusdtChangePrice" class="text-right">-6</td>
                                            <td id="dogeusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-dot tx-22"></i> DOT/USDT</td>
                                            <td id="dotusdtOpenPrice" class="text-right"></td>
                                            <td id="dotusdtHighPrice" class="text-right">966.61</td>
                                            <td id="dotusdtLowPrice" class="text-right"></td>
                                            <td id="dotusdtClosePrice" class="text-right"></td>
                                            <td id="dotusdtAveragePrice" class="text-right"></td>
                                            <td id="dotusdtChangePrice" class="text-right">-6</td>
                                            <td id="dotusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-eth tx-22"></i> ETH/USDT</td>
                                            <td id="ethusdtOpenPrice" class="text-right"></td>
                                            <td id="ethusdtHighPrice" class="text-right">966.61</td>
                                            <td id="ethusdtLowPrice" class="text-right"></td>
                                            <td id="ethusdtClosePrice" class="text-right"></td>
                                            <td id="ethusdtAveragePrice" class="text-right"></td>
                                            <td id="ethusdtChangePrice" class="text-right">-6</td>
                                            <td id="ethusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-trig tx-22"></i> TLM/USDT</td>
                                            <td id="tlmusdtOpenPrice" class="text-right"></td>
                                            <td id="tlmusdtHighPrice" class="text-right">966.61</td>
                                            <td id="tlmusdtLowPrice" class="text-right"></td>
                                            <td id="tlmusdtClosePrice" class="text-right"></td>
                                            <td id="tlmusdtAveragePrice" class="text-right"></td>
                                            <td id="tlmusdtChangePrice" class="text-right">-6</td>
                                            <td id="tlmusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-vrc tx-22"></i> VET/USDT</td>
                                            <td id="vetusdtOpenPrice" class="text-right"></td>
                                            <td id="vetusdtHighPrice" class="text-right">966.61</td>
                                            <td id="vetusdtLowPrice" class="text-right"></td>
                                            <td id="vetusdtClosePrice" class="text-right"></td>
                                            <td id="vetusdtAveragePrice" class="text-right"></td>
                                            <td id="vetusdtChangePrice" class="text-right">-6</td>
                                            <td id="vetusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td><i class="cf cf-xrp tx-22"></i> XRP/USDT</td>
                                            <td id="xrpusdtOpenPrice" class="text-right"></td>
                                            <td id="xrpusdtHighPrice" class="text-right">966.61</td>
                                            <td id="xrpusdtLowPrice" class="text-right"></td>
                                            <td id="xrpusdtClosePrice" class="text-right"></td>
                                            <td id="xrpusdtAveragePrice" class="text-right"></td>
                                            <td id="xrpusdtChangePrice" class="text-right">-6</td>
                                            <td id="xrpusdtChangePercent" class="text-right">-22.62%</td>
                                            <td class="text-center"><a href="/exchange" class="btn btn-sm btn-success">Trade</a></td>
                                        </tr>
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

        <script>
            // $('#tickerCrypto').empty()

            {{--$('#tickerCrypto').append('<li>' +--}}
            {{--    '<div class="crypto-card">' +--}}
            {{--    '<div class="row">' +--}}
            {{--    '<div class="d-flex">' +--}}
            {{--    '<div class="my-auto">' +--}}
            {{--    '<img src="{{URL::asset('assets/img/crypto-currencies/round-outline/Augur.svg')}}" class="w-6 h-6 mt-0" alt="">' +--}}
            {{--    '</div>' +--}}
            {{--    '<div class="ml-3">' +--}}
            {{--    '<p class="mb-1 tx-13">REP / INR</p>' +--}}
            {{--    '<div class="m-0 tx-13 text-warning">$0.0215<span class="text-danger ml-2">' +--}}
            {{--    '<i class="ion-arrow-down-c mr-1"></i>-0.78%</span>' +--}}
            {{--    '</div>' +--}}
            {{--    '</div></div></div></div></li>')--}}

            let ticker24h = `{
		               "method": "subscribe",
		                "product": "24ticker",
		                "id": 1
		            }`

            if ("WebSocket" in window) {
                // Let us open a web socket
                //let ws = new WebSocket("wss://ws.krapoex.com:8899/ws");
                let ws = new WebSocket("ws://localhost:9008/ws");

                ws.onopen = function() {
                    console.log('Connected to web socket.')

                    // Web Socket is connected, send data using send()
                    ws.send(ticker24h);
                    console.log("Subscription request to 24h ticker is sent.");
                };

                ws.onmessage = function (evt) {
                    let received_msg = evt.data;
                    console.log("Received message: " + received_msg)

                    // Convert to JSON
                    let jsonMsg = JSON.parse(received_msg)

                    // Get ADA USDT
                    let jsonADAUSDT = jsonMsg['ADAUSDT']
                    let adausdtAveragePrice = jsonADAUSDT["averagePrice"]
                    let adausdtPriceChangePercent = jsonADAUSDT["priceChangePerc"]

                    $('#pairX0').text('ADA/USDT')
                    if (adausdtPriceChangePercent >= 0) {
                        $('#pairX0Val').html(adausdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + adausdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX0Val').html(adausdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + adausdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#adausdtOpenPrice').text(jsonADAUSDT["openPrice"])
                    $('#adausdtHighPrice').text(jsonADAUSDT["highPrice"])
                    $('#adausdtLowPrice').text(jsonADAUSDT["lowPrice"])
                    $('#adausdtClosePrice').text(jsonADAUSDT["closePrice"])
                    $('#adausdtAveragePrice').text(jsonADAUSDT["averagePrice"])
                    if (adausdtPriceChangePercent >= 0) {
                        $('#adausdtChangePrice').html('<span class="text-info">' + jsonADAUSDT["priceChangeCurr"] + '</span>')
                        $('#adausdtChangePercent').html('<span class="text-info">' + adausdtPriceChangePercent + '%</span>')
                    } else {
                        $('#adausdtChangePrice').html('<span class="text-danger">' + jsonADAUSDT["priceChangeCurr"] + '</span>')
                        $('#adausdtChangePercent').html('<span class="text-danger">' + adausdtPriceChangePercent + '%</span>')
                    }

                    // Get AXSUSDT
                    let jsonAXSUSDT = jsonMsg['AXSUSDT']
                    let axsusdtAveragePrice = jsonAXSUSDT["averagePrice"]
                    let axsusdtPriceChangePercent = jsonAXSUSDT["priceChangePerc"]

                    $('#pairX1').text('AXS/USDT')
                    if (axsusdtPriceChangePercent >= 0) {
                        $('#pairX1Val').html(axsusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + axsusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX1Val').html(axsusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + axsusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#axsusdtOpenPrice').text(jsonAXSUSDT["openPrice"])
                    $('#axsusdtHighPrice').text(jsonAXSUSDT["highPrice"])
                    $('#axsusdtLowPrice').text(jsonAXSUSDT["lowPrice"])
                    $('#axsusdtClosePrice').text(jsonAXSUSDT["closePrice"])
                    $('#axsusdtAveragePrice').text(jsonAXSUSDT["averagePrice"])
                    if (axsusdtPriceChangePercent >= 0) {
                        $('#axsusdtChangePrice').html('<span class="text-info">' + jsonAXSUSDT["priceChangeCurr"] + '</span>')
                        $('#axsusdtChangePercent').html('<span class="text-info">' + axsusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#axsusdtChangePrice').html('<span class="text-danger">' + jsonAXSUSDT["priceChangeCurr"] + '</span>')
                        $('#axsusdtChangePercent').html('<span class="text-danger">' + axsusdtPriceChangePercent + '%</span>')
                    }

                    // Get BAKEUSDT
                    let jsonBAKEUSDT = jsonMsg['BAKEUSDT']
                    let bakeusdtAveragePrice = jsonBAKEUSDT["averagePrice"]
                    let bakeusdtPriceChangePercent = jsonBAKEUSDT["priceChangePerc"]

                    $('#pairX2').text('BAKE/USDT')
                    if (bakeusdtPriceChangePercent >= 0) {
                        $('#pairX2Val').html(bakeusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + bakeusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX2Val').html(bakeusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + bakeusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#bakeusdtOpenPrice').text(jsonBAKEUSDT["openPrice"])
                    $('#bakeusdtHighPrice').text(jsonBAKEUSDT["highPrice"])
                    $('#bakeusdtLowPrice').text(jsonBAKEUSDT["lowPrice"])
                    $('#bakeusdtClosePrice').text(jsonBAKEUSDT["closePrice"])
                    $('#bakeusdtAveragePrice').text(jsonBAKEUSDT["averagePrice"])
                    if (bakeusdtPriceChangePercent >= 0) {
                        $('#bakeusdtChangePrice').html('<span class="text-info">' + jsonBAKEUSDT["priceChangeCurr"] + '</span>')
                        $('#bakeusdtChangePercent').html('<span class="text-info">' + bakeusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#bakeusdtChangePrice').html('<span class="text-danger">' + jsonBAKEUSDT["priceChangeCurr"] + '</span>')
                        $('#bakeusdtChangePercent').html('<span class="text-danger">' + bakeusdtPriceChangePercent + '%</span>')
                    }

                    // Get BTC USDT
                    let jsonBTCUSDT = jsonMsg['BTCUSDT']
                    let btcusdtAveragePrice = jsonBTCUSDT["averagePrice"]
                    let btcusdtPriceChangePercent = jsonBTCUSDT["priceChangePerc"]

                    $('#pairX3').text('BTC/USDT')
                    if (btcusdtPriceChangePercent >= 0) {
                        $('#pairX3Val').html(btcusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + btcusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX3Val').html(btcusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + btcusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#btcusdtOpenPrice').text(jsonBTCUSDT["openPrice"])
                    $('#btcusdtHighPrice').text(jsonBTCUSDT["highPrice"])
                    $('#btcusdtLowPrice').text(jsonBTCUSDT["lowPrice"])
                    $('#btcusdtClosePrice').text(jsonBTCUSDT["closePrice"])
                    $('#btcusdtAveragePrice').text(jsonBTCUSDT["averagePrice"])
                    if (btcusdtPriceChangePercent >= 0) {
                        $('#btcusdtChangePrice').html('<span class="text-info">' + jsonBTCUSDT["priceChangeCurr"] + '</span>')
                        $('#btcusdtChangePercent').html('<span class="text-info">' + btcusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#btcusdtChangePrice').html('<span class="text-danger">' + jsonBTCUSDT["priceChangeCurr"] + '</span>')
                        $('#btcusdtChangePercent').html('<span class="text-danger">' + btcusdtPriceChangePercent + '%</span>')
                    }

                    // Get DOGEUSDT
                    let jsonDOGEUSDT = jsonMsg['DOGEUSDT']
                    let dogeusdtAveragePrice = jsonDOGEUSDT["averagePrice"]
                    let dogeusdtPriceChangePercent = jsonDOGEUSDT["priceChangePerc"]

                    $('#pairX4').text('DOGE/USDT')
                    if (dogeusdtPriceChangePercent >= 0) {
                        $('#pairX4Val').html(dogeusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + dogeusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX4Val').html(dogeusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + dogeusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#dogeusdtOpenPrice').text(jsonDOGEUSDT["openPrice"])
                    $('#dogeusdtHighPrice').text(jsonDOGEUSDT["highPrice"])
                    $('#dogeusdtLowPrice').text(jsonDOGEUSDT["lowPrice"])
                    $('#dogeusdtClosePrice').text(jsonDOGEUSDT["closePrice"])
                    $('#dogeusdtAveragePrice').text(jsonDOGEUSDT["averagePrice"])
                    if (dogeusdtPriceChangePercent >= 0) {
                        $('#dogeusdtChangePrice').html('<span class="text-info">' + jsonDOGEUSDT["priceChangeCurr"] + '</span>')
                        $('#dogeusdtChangePercent').html('<span class="text-info">' + dogeusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#dogeusdtChangePrice').html('<span class="text-danger">' + jsonDOGEUSDT["priceChangeCurr"] + '</span>')
                        $('#dogeusdtChangePercent').html('<span class="text-danger">' + dogeusdtPriceChangePercent + '%</span>')
                    }

                    // Get DOTUSDT
                    let jsonDOTUSDT = jsonMsg['DOTUSDT']
                    let dotusdtAveragePrice = jsonDOTUSDT["averagePrice"]
                    let dotusdtPriceChangePercent = jsonDOTUSDT["priceChangePerc"]

                    $('#pairX5').text('DOT/USDT')
                    if (dotusdtPriceChangePercent >= 0) {
                        $('#pairX5Val').html(dotusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + dotusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX5Val').html(dotusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + dotusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#dotusdtOpenPrice').text(jsonDOTUSDT["openPrice"])
                    $('#dotusdtHighPrice').text(jsonDOTUSDT["highPrice"])
                    $('#dotusdtLowPrice').text(jsonDOTUSDT["lowPrice"])
                    $('#dotusdtClosePrice').text(jsonDOTUSDT["closePrice"])
                    $('#dotusdtAveragePrice').text(jsonDOTUSDT["averagePrice"])
                    if (dotusdtPriceChangePercent >= 0) {
                        $('#dotusdtChangePrice').html('<span class="text-info">' + jsonDOTUSDT["priceChangeCurr"] + '</span>')
                        $('#dotusdtChangePercent').html('<span class="text-info">' + dotusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#dotusdtChangePrice').html('<span class="text-danger">' + jsonDOTUSDT["priceChangeCurr"] + '</span>')
                        $('#dotusdtChangePercent').html('<span class="text-danger">' + dotusdtPriceChangePercent + '%</span>')
                    }

                    // Get EHTUSDT
                    let jsonETHUSDT = jsonMsg['ETHUSDT']
                    let ethusdtAveragePrice = jsonETHUSDT["averagePrice"]
                    let ethusdtPriceChangePercent = jsonETHUSDT["priceChangePerc"]

                    $('#pairX6').text('ETH/USDT')
                    if (ethusdtPriceChangePercent >= 0) {
                        $('#pairX6Val').html(ethusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + ethusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX6Val').html(ethusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + ethusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#ethusdtOpenPrice').text(jsonETHUSDT["openPrice"])
                    $('#ethusdtHighPrice').text(jsonETHUSDT["highPrice"])
                    $('#ethusdtLowPrice').text(jsonETHUSDT["lowPrice"])
                    $('#ethusdtClosePrice').text(jsonETHUSDT["closePrice"])
                    $('#ethusdtAveragePrice').text(jsonETHUSDT["averagePrice"])
                    if (ethusdtPriceChangePercent >= 0) {
                        $('#ethusdtChangePrice').html('<span class="text-info">' + jsonETHUSDT["priceChangeCurr"] + '</span>')
                        $('#ethusdtChangePercent').html('<span class="text-info">' + ethusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#ethusdtChangePrice').html('<span class="text-danger">' + jsonETHUSDT["priceChangeCurr"] + '</span>')
                        $('#ethusdtChangePercent').html('<span class="text-danger">' + ethusdtPriceChangePercent + '%</span>')
                    }

                    // Get TLMUSDT
                    let jsonTLMUSDT = jsonMsg['TLMUSDT']
                    let tlmusdtAveragePrice = jsonTLMUSDT["averagePrice"]
                    let tlmusdtPriceChangePercent = jsonTLMUSDT["priceChangePerc"]

                    $('#pairX7').text('TLM/USDT')
                    if (tlmusdtPriceChangePercent >= 0) {
                        $('#pairX7Val').html(tlmusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + tlmusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX7Val').html(tlmusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + tlmusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#tlmusdtOpenPrice').text(jsonTLMUSDT["openPrice"])
                    $('#tlmusdtHighPrice').text(jsonTLMUSDT["highPrice"])
                    $('#tlmusdtLowPrice').text(jsonTLMUSDT["lowPrice"])
                    $('#tlmusdtClosePrice').text(jsonTLMUSDT["closePrice"])
                    $('#tlmusdtAveragePrice').text(jsonTLMUSDT["averagePrice"])
                    if (tlmusdtPriceChangePercent >= 0) {
                        $('#tlmusdtChangePrice').html('<span class="text-info">' + jsonTLMUSDT["priceChangeCurr"] + '</span>')
                        $('#tlmusdtChangePercent').html('<span class="text-info">' + tlmusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#tlmusdtChangePrice').html('<span class="text-danger">' + jsonTLMUSDT["priceChangeCurr"] + '</span>')
                        $('#tlmusdtChangePercent').html('<span class="text-danger">' + tlmusdtPriceChangePercent + '%</span>')
                    }

                    // Get VETUSDT
                    let jsonVETUSDT = jsonMsg['VETUSDT']
                    let vetusdtAveragePrice = jsonVETUSDT["averagePrice"]
                    let vetusdtPriceChangePercent = jsonVETUSDT["priceChangePerc"]

                    $('#pairX8').text('VET/USDT')
                    if (vetusdtPriceChangePercent >= 0) {
                        $('#pairX8Val').html(vetusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + vetusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX8Val').html(vetusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + vetusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#vetusdtOpenPrice').text(jsonVETUSDT["openPrice"])
                    $('#vetusdtHighPrice').text(jsonVETUSDT["highPrice"])
                    $('#vetusdtLowPrice').text(jsonVETUSDT["lowPrice"])
                    $('#vetusdtClosePrice').text(jsonVETUSDT["closePrice"])
                    $('#vetusdtAveragePrice').text(jsonVETUSDT["averagePrice"])
                    if (vetusdtPriceChangePercent >= 0) {
                        $('#vetusdtChangePrice').html('<span class="text-info">' + jsonVETUSDT["priceChangeCurr"] + '</span>')
                        $('#vetusdtChangePercent').html('<span class="text-info">' + vetusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#vetusdtChangePrice').html('<span class="text-danger">' + jsonVETUSDT["priceChangeCurr"] + '</span>')
                        $('#vetusdtChangePercent').html('<span class="text-danger">' + vetusdtPriceChangePercent + '%</span>')
                    }

                    // Get XRPUSDT
                    let jsonXRPUSDT = jsonMsg['XRPUSDT']
                    let xrpusdtAveragePrice = jsonXRPUSDT["averagePrice"]
                    let xrpusdtPriceChangePercent = jsonXRPUSDT["priceChangePerc"]

                    $('#pairX9').text('XRP/USDT')
                    if (xrpusdtPriceChangePercent >= 0) {
                        $('#pairX9Val').html(xrpusdtAveragePrice + '<span class="text-success ml-2"><i class="ti ti-arrow-up mr-1"></i>' + xrpusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#pairX9Val').html(xrpusdtAveragePrice + '<span class="text-danger ml-2"><i class="ti ti-arrow-down mr-1"></i>' + xrpusdtPriceChangePercent + '%</span>')
                    }

                    // Market table
                    $('#xrpusdtOpenPrice').text(jsonXRPUSDT["openPrice"])
                    $('#xrpusdtHighPrice').text(jsonXRPUSDT["highPrice"])
                    $('#xrpusdtLowPrice').text(jsonXRPUSDT["lowPrice"])
                    $('#xrpusdtClosePrice').text(jsonXRPUSDT["closePrice"])
                    $('#xrpusdtAveragePrice').text(jsonXRPUSDT["averagePrice"])
                    if (xrpusdtPriceChangePercent >= 0) {
                        $('#xrpusdtChangePrice').html('<span class="text-info">' + jsonXRPUSDT["priceChangeCurr"] + '</span>')
                        $('#xrpusdtChangePercent').html('<span class="text-info">' + xrpusdtPriceChangePercent + '%</span>')
                    } else {
                        $('#xrpusdtChangePrice').html('<span class="text-danger">' + jsonXRPUSDT["priceChangeCurr"] + '</span>')
                        $('#xrpusdtChangePercent').html('<span class="text-danger">' + xrpusdtPriceChangePercent + '%</span>')
                    }

                };

                ws.onclose = function() {
                    // websocket is closed.
                    alert("Connection is closed...");
                };
            } else {
                // The browser doesn't support WebSocket
                alert("WebSocket NOT supported by your Browser!");
            }

        </script>
@endsection

