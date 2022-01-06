
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>HIT cms - Student Dashboard</title>
  
	<!-- Vendors Style-->
    
	<link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">

</head>
<body class="hold-transition dark-skin fixed sidebar-mini theme-primary sidebar-collapse">
<div class="wrapper">

  <header class="main-header">
  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-check-box"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-calendar"></i>
			    </a>
			</li>
		  </ul>
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		  <!-- Notifications -->
		  
		  
	      <!-- User Account-->
          
		  
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  @php
 $prefix = Request::route()->getPrefix();
 $route = Route::current()->getName();

 @endphp


 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/hu.png')}}" alt="">
						  <h3><b>HU</b> CMS</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		  
		
    
       
        
		  
       





















		
        
		 
		
		 
		  
		 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
    
      
		  
		
		  
		
        
      
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
  
  <section class="content-wrapper">
		
       
			<div class="box">
				
				
				
				  <div class="form-group">
						<textarea id="compose-textarea" class="form-control" style="height: 300px">
						
						</textarea>
				  </div>
				  

		</section>
    
		<!-- /.right content -->	  
  </div>
  <!-- /.content-wrapper -->
   
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="www.haramaya.edu.et">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2021<a href="#">HU</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{asset('backend/icons/feather-icons/feather.min.js')}}"></script>	<script src="{{asset('backend/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js')}}"></script>
	<script src="{{asset('backend/vendor_plugins/iCheck/icheck.js')}}"></script>
	<script src="{{asset('backend/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/form-compose.js')}}"></script>
	
	<!-- Sunny Admin App -->
	<script src="js/template.js"></script>
	
</body>
</html>
