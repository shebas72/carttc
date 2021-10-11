<!doctype html>
<html class="fixed has-top-menu">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Car Tech') }}</title>

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="cartech">
		<meta name="author" content="cartech">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.theme.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap4.css') }} " />
        <link rel="stylesheet" href="{{ asset('css/theme.css') }} " />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }} " />
	
        <script src="{{ asset('vendor/modernizr/modernizr.js') }}" defer></script>
       

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header header-nav-menu header-nav-top-line">
				<div class="logo-container">
					<a href="dashboard" class="logo">
						<img src="assets/company_logo.png" width="75" height="35" alt="Cartech" />
					</a>
					<button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
						<i class="fas fa-bars"></i>
					</button>
			
					<!-- start: header nav menu -->
					<div class="header-nav collapse">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
								
									<li>
									    <a class="nav-link" href="{{ route('dashboard') }}">
									        Dashboard
									    </a>
									 
									</li>
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="#">
									        Operations
									    </a>
									    <ul class="dropdown-menu">
									        <li>
									            <a class="nav-link" href="receiving-requests.html">
									               Receiving Requests
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="#">
									                Incoming
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="outgoing.html">
									                Outgoing
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="internal-movements.html">
									                Internal Movements
									            </a>
									        </li>
									    </ul>
									</li>
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="#">
									        Completed Operations
									    </a>
									    <ul class="dropdown-menu">
									      
									        <li>
									            <a class="nav-link" href="completed-incoming.html">
									                Incoming
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="completed-outgoing.html">
									                Outgoing
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="completed-internal-movements.html">
									                Internal Movements
									            </a>
									        </li>
									    </ul>
									</li>

									<li>
									    <a class="nav-link" href="{{ route('user-registration') }}">
									      Users
									    </a>
									  
									</li>

								
									<li class="dropdown">
									    <a class="nav-link dropdown-toggle" href="#">
									        Configuration
									    </a>
									    <ul class="dropdown-menu">
									      
									        <li>
									            <a class="nav-link" href="vehicletype">
									                Vehicle Models
									            </a>
									        </li>
									        <li>
									            <a class="nav-link" href="brands.html">
									                Brands
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="service-types.html">
									               Service Types
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="parking-yards.html">
									              Parking Yards
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="contract-types.html">
									              Contract Types
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="parking-zone.html">
									              Parking Zone
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="parking-lane.html">
									              Parking Lane
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="parking-bay.html">
									              Parking Bay
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="yard-gates.html">
									              Yard Gates
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="checkpoint-category.html">
									              Checkpoint Category
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="vehicle-status.html">
									            Vehicle Status  
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="checkpoints.html">
									              Checkpoints
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="checkpoint-forms.html">
									              Checkpoint Forms
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="vehicle-type.html">
									              Vehicle Type
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="color.html">
									             Color 
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="condition.html">
									            Condition  
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="id-type.html">
									              ID Type
									            </a>
									        </li>
											<li>
									            <a class="nav-link" href="vehicle-tags.html">
									           Vehicle Tags   
									            </a>
									        </li>
									    </ul>
									</li>

									
									<li>
									    <a class="nav-link" href="{{ route('file-import-export') }}">
									      Vendors
									    </a>
									  
									</li>


									        
									
								</ul>
							</nav>
						</div>
					</div>
					<!-- end: header nav menu -->
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
			
				
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Cartech Admin</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>
							
								<li>
									
                                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
                <section role="main" class="content-body">
                {{ $slot }}
                </section>
			</div>

		

		</section>

		<!-- Vendor -->
        <script src="{{ asset('vendor/jquery/jquery.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery-cookie/jquery.cookie.js') }}" defer></script>
        
        <script src="{{ asset('vendor/popper/umd/popper.min.js') }}" defer></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" defer></script>
        <script src="{{ asset('vendor/common/common.js') }}" defer></script>
        <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}" defer></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}" defer></script>
        <script src="{{ asset('vendor/select2/js/select2.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js') }}" defer></script>
        <script src="{{ asset('vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}" defer></script>
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        <script src="{{ asset('js/theme.init.js') }}" defer></script>
        <script src="{{ asset('js/examples/examples.datatables.default.js') }}" defer></script>
        <script src="{{ asset('js/examples/examples.datatables.row.with.details.js') }}" defer></script>
        <script src="{{ asset('js/examples/examples.datatables.tabletools.js') }}" defer></script>
        <script src="{{ asset('js/examples/examples.header.menu.js') }}" defer></script>
	
		<script  src="{{ asset('js/examples/examples.modals.js') }}" defer></script>
		

	</body>
</html>
