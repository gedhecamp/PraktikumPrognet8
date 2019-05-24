<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="/front" class="c-logo">
                        <img src="../../assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo">
                        <img src="../../assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse">
                        <img src="../../assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-mobile-logo">
                    </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                    <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                </div>
                <!-- END: BRAND -->				
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->	
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav"> 
                        @foreach ($dataKategori as $category)
                            <li >
                                <a href="{{url('/category/'.$category->id)}}" class="c-link dropdown-toggle">{{$category->category_name}}<span class="c-arrow c-toggler"></span></a>
                            </li>
                        @endforeach
                        {{-- <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Shoulder Bag<span class="c-arrow c-toggler"></span></a>
                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Sling Bag<span class="c-arrow c-toggler"></span></a>
                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Waist Bag<span class="c-arrow c-toggler"></span></a>
                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Tote Bag<span class="c-arrow c-toggler"></span></a>
                        </li> --}}
                        <li class="c-quick-sidebar-toggler-wrapper">
                            <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                        </li>
                        @if(!empty(Auth::user()->id))
                            <li class="c-cart-toggler-wrapper">
                                <a  href="#" class="c-btn-icon c-cart-toggler">
                                    <i class="icon-bell c-cart-icon"></i>
                                    <span class="c-cart-number c-theme-bg">2</span>
                                </a>
                            </li>
                            <div class="c-cart-menu">
                                <ul class="c-cart-menu-items">
                                    {{-- {{Auth::user()->name}} --}}
                                    @foreach (Auth::user()->unreadNotifications as $n)
                                    <li>
                                        <div class="c-cart-menu-content">
                                            <p>{{$n->data}}</p>
                                            <a href="#" class="c-item-name c-font-sbold">{{$n->created_at}}</a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <li class="c-quick-sidebar-toggler-wrapper">
								<a  href="{{url('/cart')}}" class="c-btn-icon">
									<i class="icon-handbag c-cart-icon"></i>
                                    {{-- <span class="c-cart-number c-theme-bg">2</span> --}}
                                </a>
							</li>
							<li class="c-quick-sidebar-toggler-wrapper">
								<a href="{{url('/profile')}}" class="c-btn-icon">
									<i class="icon-user c-cart-icon"></i>
								</a>
							</li>
                            <li class="c-quick-sidebar-toggler-wrapper">
								<a href="{{url('/user/logout')}}" class="c-btn-icon">
									<i class="icon-logout c-cart-icon"></i>
								</a>
                            </li>
                        @else
							<li class="c-quick-sidebar-toggler-wrapper">
								<a href="{{url('/login')}}" class="c-btn-icon">
									<i class="icon-login c-cart-icon"></i>
								</a>
                            </li>
                        @endif
                        <li class="c-quick-sidebar-toggler-wrapper">	
                            <a href="#" class="c-quick-sidebar-toggler">		     		
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->		
            </div>			
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                <!-- BEGIN: CART MENU -->  
                {{-- ni yang muncil di card --}}
                
                <!-- END: CART MENU -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER -->