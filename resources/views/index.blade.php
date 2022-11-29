<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>eSIM</title>
	<!-- Stylesheets -->
    <link rel="icon" href="images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- Responsive -->
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="main-wrapper">
		
        <header id="header">
			<div class="container">
			    <div class="logo-site">
			        <a href="index.blade.php">
			            <img src="{{asset($landing_pages->logo)}}"alt="" />
			        </a>
			    </div>
				<ul class="main_menu clearfix">
					<li class="active"><a class="page-scroll" href="index.blade.php">{{ trans('main.Home') }}</a></li>
					<li><a class="page-scroll" href="about.html">{{ trans('main.About Us') }}</a></li>
					<li><a class="page-scroll" href="contact.html">{{ trans('main.Contact Us') }}</a></li>
                    <li class="nav-itemdropdown">
                        
                        <a class ="nav-link dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="hidden-md-down">{{ LaravelLocalization::getCurrentLocaleName() }}</span> 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                        </ul>
                      </a></li>
					<li class="get-started"><a href="get.blade.php" class="page-scroll btn-site"><span>{{ trans('main.GET STARTED') }}</span></a></li>
                    
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

        <section class="section_home" style="background:url({{asset($landing_pages->file_image)}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_txt">
                            <h1>{{ $landing_pages->hide_text }}</h1>
                            <p>{{ $landing_pages->hide_description }}.</p>
                            <a href="" class="btn-site"><span>{{ trans('main.GET STARTED') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		<!--section_home-->
        
        <section class="section_features">
            <div class="container">
                <div class="row">
                  @foreach($slices as $slice)
                    <div class="col-lg-3">
                        
                        <div class="item-features wow fadeInUp">
                            <figure><img src="{{ $slices->image }}" alt="Image Features" /></figure>
                            <div class="txt-features">
                                <h4>{{ $slices->name }}</h4>
                                <p>{{ $slices->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--section_features-->
        
        <section class="section_about">
		    <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="txt-about wow fadeInUp">
                            <span>{{ $landing_pages->about_text }}</span>
                            <h2>{{ $landing_pages->about_title}}.</h2>
                            <p>{{ $landing_pages->about_first }}.</p>
                            <p>{{ $landing_pages->about_last }}.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb-about wow fadeInUp">
                            <figure><img src="{{asset($landing_pages->image)}}" alt="Images About"></figure>
                            <div class="shape-experience">
                                <strong>{{$landing_pages->yearsofexperience}}</strong>
                                <span>{{ $landing_pages->experience}}</span>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</section>
        <!--section_about-->
        
        <section class="section_available_devices">
            <div class="container">
                
                <div class="sec_head wow fadeInUp">
                    <h2>{{ $landing_pages->available_text }}</h2>
                    <p>{{ $landing_pages->available_lorem}}.</p>
                </div>
                <div class="content-availabel">
                    <ul class="nav nav-tabs wow fadeInUp" id="myTab" role="tablist" >
                         @foreach ($companys as $company)  
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="{{$company->name}}-tab" data-bs-toggle="tab" data-bs-target="#{{$company->name}}" type="button" role="tab" aria-controls="{{$company->name}}" aria-selected="true">{{$company->name}}</button>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content wow fadeInUp animated" id="myTabContent" style="visibility: visible; animation-name: fadeInUp;">
                          @foreach ($companys as $company)  
                        <div class="tab-pane fade show @if($company->id == 3) active @endif " id="{{$company->name}}" role="tabpanel" aria-labelledby="{{$company->name}}-tab">
                           <div class="d-flex cont-devices">
                                
                                @foreach($devices->where('company_device_id',$company->id) as $one) 
                               <div class="item-devic">
                                   <div><p title="{{$one->name}}">{{$one->name}}</p></div>
                               </div>
                               @endforeach
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--section_available_devices-->
        
        <section class="section_activates">
            <div class="container">
                <div class="sec_head wow fadeInUp">
                    <h2>{{ $landing_pages->activate}}</h2>
                </div>
                <div class="content-videos">
                    <div class="owl-carousel car-videos">
                        
                        <div class="item">
                            <div class="item-videos">
                                <a href="" data-src="https://www.youtube.com/watch?v=v1LZg48n78I" data-fancybox="gallery">
                                    <img src="{{ $landing_pages->file_path}}" alt="uuu" />
                                    <span><i class="fa-solid fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-videos">
                                <a href="" data-src="https://www.youtube.com/watch?v=v1LZg48n78I" data-fancybox="gallery">
                                    <img src="{{ $landing_pages->file_path}}" alt="uuu" />
                                    <span><i class="fa-solid fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-videos">
                                <a href="" data-src="https://www.youtube.com/watch?v=v1LZg48n78I" data-fancybox="gallery">
                                    <img src="{{ $landing_pages->file_path}}" alt="" />
                                    <span><i class="fa-solid fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!--section_activates-->
        
        <section class="section_customers">
            <div class="container">
                <div class="sec_head wow fadeInUp">
                    <h2>{{$landing_pages->customer_say}}</h2>
                    <a href="" class="btn-rating" data-bs-toggle="modal" data-bs-target="#modalRating">Rating now</a>
                </div>
                
                <div class="owl-carousel coloum3">
                    @foreach($customers as $customer)
                    <div class="item">
                        <div class="item-customers">
                            <p>{{ $customer->opinion }}</p>
                            <div class="own-cust">
                                <figure><img src="{{asset($customer->image)}}" alt="yyyy" /></figure>
                                <div class="txt-cust">
                                    <h5>{{ $customer->name }}</h5>
                                    <span>{{ $customer->company }}</span>
                                </div>
                            </div>
                        </div>
                     </div>
                     @endforeach
                </div>
             </div>
        </section>
        <!--section_customers-->
        
        <section class="section_contact">
            <div class="container">
                <div class="sec-contact">
                    <div class="ls-contact">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item-contact">
                                    <figure><i class="fa-solid fa-phone"></i></figure>
                                    <p>{{ $landing_pages->phone }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item-contact">
                                    <figure><i class="fa-solid fa-envelope"></i></figure>
                                    <p>{{ $landing_pages->email}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item-contact">
                                    <figure><i class="fa-solid fa-location-dot"></i></figure>
                                    <p>{{ $landing_pages->location}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont-contact">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="thumb-contact">
                                    <img src="{{asset($landing_pages->contact)}}" alt="contact" />
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <form class="form-contact" action="{{ route('contacts.store') }}" method="post"
                                      enctype="multipart/form-data">@csrf
                                    <div class="d-flex">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"name="email"value="{{ old('email')}}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Masseges" name="message"value="{{ old('message')}}}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-site" type="submit"><span>{{ trans('main.SEND') }}</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--section_contact-->
		
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
        <div class="modal fade" id="modalRating" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="content-rating">
                            <h3>Rating Now</h3>
                            <form class="form-rating">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Write Here…"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn-site"><span>Send</span></button>
                                </div>
                            </form>
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