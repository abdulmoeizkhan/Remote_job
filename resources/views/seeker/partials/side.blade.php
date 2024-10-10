<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
		<div class="user-profile px-20 py-10">
			<div class="d-flex align-items-center">			
				<div class="image">
				     
				  <img src="<?php if(!empty($seekers->image)){?> {{asset('uploads/seeker/image/')}}/{{$seekers->image}} <?}else{?> {{asset('6.jpg')}} <?php }?>" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
				</div>
				<div class="info">
					<a class=" px-20" href="#"> 
					{{$seekers->firstname . " ".$seekers->lastname}}
					</a>
					
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">		
				<li class="treeview">
				  <a href="#">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('job-seeker-dashboard')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard </a></li>
				  </ul>
				</li>	
				<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Job Board Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('/seeker-job-view')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Jobs</a></li>
						<li><a href="{{url('/seeker/saved-jobs')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Saved Jobs</a></li>
					</ul>
				</li>
					<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>My Account</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('/job-seeker-profile')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Profile</a></li>
					</ul>
				</li>
							<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>My Resume</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('/job-seeker-myresume')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Resume</a></li>
					</ul>
				</li>
					<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>general information</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('/seeker-general-information')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Information</a></li>
						<li><a href="{{url('edit-seeker-general-information')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Edit Information</a></li>
					</ul>
				</li>
			  </ul>
		  </div>
		</div>
    </section>
  </aside>
