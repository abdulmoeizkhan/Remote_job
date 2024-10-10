<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
		<div class="user-profile px-20 py-10">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="{{asset('uploads/employe/logo')}}/{{employeeImg(Auth::user()->email)}}" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
				</div>
				<div class="info">
					<a class="px-20">{{Auth::user()->name}}</a>
					
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
			      <li>
                  <a href="{{url('employe-dashboard')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Dashboard</span>
                  </a>
                </li>	
				<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Job Board </span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{url('employe/job-posting')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Job posting</a></li>
                    <li><a href="{{url('employe/posted-jobs')}}"><i class="icon-file"><span class="path1"></span><span class="path2"></span></i>Job List</a></li>
                    <li><a href="{{url('employe/active-jobs')}}"><i class="icon-file"><span class="path1"></span><span class="path2"></span></i>Active Jobs</a></li>
                    <li><a href="{{url('employe/expired-jobs')}}"><i class="icon-file"><span class="path1"></span><span class="path2"></span></i>Expired Jobs</a></li>
                   
                   </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Acccount </span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{url('employe-edit-profile')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Profile </a></li>
                   
                   </ul>
				</li>
                	<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Subscription </span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{url('employe-subscripttion-plans')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Subscription Plans </a></li>
                    <li><a href="{{url('my-subscription-plans')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>My Subscription Plans </a></li>
                   
                   </ul>
				</li>
				
				                	<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Users</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{url('employe_all_users')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>All Users </a></li>
                     <li><a href="{{url('employe_add_users')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Add Users </a></li>
                   
                   </ul>
				</li>
				           	<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>
					<span>Applicant Tracking</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{url('employe_all_applicantion')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>List of Applications </a></li>
                    <li><a href="{{url('employe_applicant_tracking')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Applicant Tracking </a></li>

                     <!--<li><a href="{{url('employe_add_users')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Applicant Tracking </a></li>-->
                     <!--<li><a href="{{url('employe_add_users')}}"><i class="icon-Briefcase"><span class="path1"></span><span class="path2"></span></i>Interview </a></li>-->
                     
                   
                   </ul>
				</li>
				<li>
                  <a href="{{url('employe_all_contacts')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Contact List</span>
                  </a>
                </li>

				<li>
                  <a href="{{url('employe-job-applicants')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Job Applicants</span>
                  </a>
                </li>
                <li>
                  <a href="{{url('employe_save_resume')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Saved Resume</span>
                  </a>
                </li>
              <li>
                  <a href="{{url('employe_search_resume')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Search Resume</span>
                  </a>
                </li> 
                
                 <li>
                  <a href="{{url('package-order-history')}}">
                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
        			<span>Order History</span>
                  </a>
                </li> 
                
			  </ul>
		  </div>
		</div>
    </section>
  </aside>
