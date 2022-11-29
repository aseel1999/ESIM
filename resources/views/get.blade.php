<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{{ trans('main.esim') }}</title>
	<!-- Stylesheets -->
    <link rel="icon" href="images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<!-- Responsive -->
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
</head>
<body>
	
	<div class="main-wrapper">
		
        <header id="header">
			<div class="container">
			    <div class="logo-site">
			        <a href="index.blade.php">
			            <img src="{{asset($landing_pages->logo)}}" alt="" />
			        </a>
			    </div>
				<ul class="main_menu clearfix">
					<li class=""><a class="page-scroll" href="index.blade.php">{{ trans('main.Home') }}</a></li>
					<li><a class="page-scroll" href="about.html">{{ trans('main.About Us') }}</a></li>
					<li><a class="page-scroll" href="contact.html">{{ trans('main.Contact Us') }}</a></li>
                    <li><a class="page-scroll" href="contact.html">{{ trans('main.العربية') }}</a></li>
					<li class="get-started"><a href="get.blade.php" class="page-scroll btn-site"><span>{{ trans('main.Get Started') }}</span></a></li>
				</ul>
                <div class="opt-mobail">
                    <button type="button" class="hamburger">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>
                </div>
			</div>
		</header>
		<!--header-->

        <section class="section_inner_page">
            <div class="container">
                <div class="sec_head">
                    <h2>Add your information</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labote irure dolor in reprehenderit in volup</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="cont-get">
                            <ul class="nav nav-tabs wow fadeInUp" id="myTab" role="tablist" >
                                @foreach ($orders as $order) 
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="{{$order->type}}-tab" data-bs-toggle="tab" data-bs-target="#{{ $order->type}}" type="button" role="tab" aria-controls="{{ $order->type }}" aria-selected="true">{{ $order->type}}</button>
                                </li>
                               @endforeach
                            </ul>
                            <div class="tab-content wow fadeInUp animated" id="myTabContent" style="visibility: visible; animation-name: fadeInUp;">
                                @foreach($orders as $order)
                                <div class="tab-pane fade show @if($order->type == 'esim') active" @endif  id="{{$order->type}}" role="tabpanel" aria-labelledby="{{ $order->type}}-tab">
                                    <form class="form-get" action="{{ route('orders.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('post')
                                        @csrf
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label>* {{ trans('main.First Name') }} </label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Write Name"  value="{{old('firstname')}}" />
                                            </div>
                                            <div class="form-group">
                                                <label>* {{ trans('main.Last Name') }}</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Write Last Name" value="{{old('lastname')}}"/>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label>* {{ trans('main.Mobile Type') }}</label>
                                                <input type="number" class="form-control" name="mobile" placeholder="Mobail" value="{{ old('mobile') }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>* {{  trans('main.Email')}}</label>
                                                <input type="email" class="form-control"  name="email"placeholder="Email" value="{{ old('email') }}"  />
                                            </div>
                                        </div>
                                        <div class="form-group-inline">
                                            <label>*{{ trans('main.Choose Package') }}</label>
                                            <div class="row">
                                            @foreach($pakages as $pakage)
                                            
                                                <div class="col-lg-4">
                                                    <div class="item-package">
                                                        <div class="chose-pack-inline">
                                                            <input class="inp-cbx" id="pakage_id" name="pakage_id" value="{{$pakage->id}}" type="checkbox">
                                                            <label class="cbx" for="pakage_id">
                                                                <span><svg width="12px" height="9px" viewBox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <figure><img src="{{asset($pakage->imagepackage)}}" alt="" /></figure>
                                                        <div class="txt-package">
                                                            <div><p>{{ trans('main.Data') }}</p> <span>{{ $pakage->data }}</span></div>
                                                            <div><p>{{ trans('main.Validity') }}</p> <span>{{ $pakage->validity }}</span></div>
                                                            <div><p>{{ trans('main.Price') }}</p> <span>{{ $pakage->price }}</span></div>
                                                        </div>
                                                        <div class="quantity">
                                                            <div class="btn button-count dec jsQuantityDecrease" minimum="1"><i class="fa-solid fa-minus"></i></div>
                                                            <input type="text" name="quantity " class="count-quat" value="{{ $pakage->quantity }}">
                                                            <div class="btn button-count inc jsQuantityIncrease"><i class="fa-solid fa-plus"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            @endforeach
                                        </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label>* {{ trans('main.Passport') }}</label>
                                                <input type="text" class="form-control"name="passport"placeholder="Passport" value="{{ old('passport') }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>* {{ trans('main.Discount Code') }}</label>
                                                <input type="text" class="form-control"name="discount" placeholder="Discount Code" value="{{ old('discount') }}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ trans('main.Chose Type Payment') }}</label>
                                            <div class="chose-pay">  
                                                <div>
                                                    <input data-image="" type="radio" id="type_payment_id1" name="type_payment_id">
                                                    <label for="type_payment_id1">
                                                        <figure><img src="{{ asset('images/mastercard.png')}}"alt="" /></figure>
                                                        <span>{{ trans('main.MasterCard') }}</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input data-image="" type="radio" id="type_payment_id2" name="type_payment_id" >
                                                    <label for="type_payment_id2">
                                                        <figure><img src="{{ asset('images/get-money.png')}}" alt="" /></figure>
                                                        <span>{{ trans('main.Cash on Delivery') }}</span>
                                                    </label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>{{trans ('main.price') }}</th>
                                                    <th>{{ trans('main.discount') }}</th>
                                                    <th>{{  trans('main.totalprice')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody class="order-list">
                                             @foreach ($pakages as $pakage)
                                            <tr>
                                            <td>{{ $pakage->price }}$</td>
                                            <td>{{ $order->discount }}$</td>
                                            <td class="pakage-price">{{ number_format($pakage->price * $pakage->quantity) }}$</td>
                                           </tr>
                                             @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                     
                                        <div class="form-group">
                                            <button class="btn-site btnReg" data-bs-toggle="modal" data-bs-target="#modalSuccess" type="submit"><span>{{ trans('main.Send') }}</span></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="{{ $order->type }}" role="tabpanel" aria-labelledby="{{ $order->type}}-tab">
                                    <form class="form-get" action="{{ route('orders.store') }}" method="post"
                                       enctype="multipart/form-data">
                                        @method('post')
                                         @csrf
                                        <div class="form-group">
                                            <label>*{{ trans('main.Mobile number') }}</label>
                                            <input type="number" class="form-control" placeholder="Write Number"  name="mobile" value="{{ old('mobile') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>* {{ trans('main.Choose Package') }}</label>
                                            <div class="row">
                                                @foreach($pakages as $pakage)
                                                <div class="col-lg-4">
                                                    <div class="item-package">
                                                        <div class="chose-pack">
                                                            <input class="inp-cbx" id="pakage_id" name="pakage_id" value="{{ $pakage->id}}" type="checkbox">
                                                            <label class="cbx" for="pakage_id">
                                                                <span><svg width="12px" height="9px" viewBox="0 0 12 9"><polyline points="1 5 4 8 11 1"></polyline></svg>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <figure><img src="{{asset($pakage->imagepackage)}}" alt="" /></figure>
                                                        <div class="txt-package">
                                                            <div><p>{{ trans('main.Data') }}</p> <span>{{ $pakage->data }}</span></div>
                                                            <div><p>{{ trans('main.Validity') }}</p> <span>{{ $pakage->validity }}</span></div>
                                                            <div><p>{{ trans('main.Price') }}</p> <span>{{ $pakage->price }}</span></div>
                                                        </div>
                                                        <div class="quantity">
                                                            <div class="btn button-count dec jsQuantityDecrease" minimum="1"><i class="fa-solid fa-minus"></i></div>
                                                            <input type="text" name="count-quat1" class="count-quat" value="{{$pakage->quantity }}">
                                                            <div class="btn button-count inc jsQuantityIncrease"><i class="fa-solid fa-plus"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ trans('main.Chose Type Payment') }}</label>
                                            <div class="chose-pay">
                                                <div>
                                                    <input data-image="" type="radio" id="type_payment_id3" name="type_payment_id" value="{{ $order->type_payment_id}}">
                                                    <label for="type_payment_id3">
                                                        <figure><img src="{{ asset('images/mastercard.png')}}" alt="" /></figure>
                                                        <span>MasterCard</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input data-image="" type="radio" id="type_payment_id4" name="type_payment_id"  value="{{ $order->type_payment_id}}">
                                                    <label for="type_payment_id4">
                                                        <figure><img src="{{ asset('images/get-money.png')}}" alt="" /></figure>
                                                        <span>Cash on Delivery</span>
                                                    </label>
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>{{trans ('main.price') }}</th>
                                                    <th>{{ trans('main.discount') }}</th>
                                                    <th>{{  trans('main.totalprice')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody class="order-list">
                                             @foreach ($pakages as $pakage)
                                            <tr>
                                            <td>{{ $pakage->price }}$</td>
                                            <td>{{ $order->discount }}$</td>
                                            <td class="pakage-price">{{ number_format($pakage->price * $pakage->quantity) }}$</td>
                                           </tr>
                                             @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="form-group">
                                            <button class="btn-site btnReg" data-bs-toggle="modal" data-bs-target="#modalSuccess" type="submit"><span>{{ trans('main.Send') }}</span></button>
                                        </div>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		<!--section_home-->
       
		<footer id="footer">
            <div class="container">
                <div class="cont-bt">
                    <p class="copyRight wow fadeInUp">Copyright ©  2022 eSIM All Rights Reserved</p>
                    <ul class="social-media">
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
		</footer>
        <!--footer-->
        
        <div class="contact-whats">
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="modalSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="content-succes">
                            <figure><img src="{{ asset('images/success.png')}}" /></figure>
                            <div class="txt-succes">
                                <h3>Your packages will be shipped in a minute</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labote irure dolor in reprehenderit in volup</p>
                                <a class="btn-site" href="index.blade.php"><span>Go to Home</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
	<!--main-wrapper--> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/all.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/wow.js')}}"></script>
	<script src="{{ asset('js/jquery.easing.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script src="{{ asset('js/script.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	
	
</body>
</html>	