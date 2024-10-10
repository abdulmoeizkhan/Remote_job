<style>
    .main-sidebar a{
       color:#fff !important;
    }
</style>
<aside class="main-sidebar bg-dark " >
    <!-- sidebar-->
    <section class="sidebar position-relative">	
		<div class="user-profile px-20 py-10">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="{{asset('6.jpg')}}" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image">
				</div>
				<div class="info">
					<a class="px-20" href="#">Admin</a>
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			<ul class="sidebar-menu" data-widget="tree">		
				<li class="treeview">
				  <a href="#">
					<i class="fa fa-check text-white"></i>
					<span>Jobs</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
        			<li><a href="{{url('admin-job-category')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Job Category</a></li>
            		<li><a href="{{url('/admin-sub_category')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Sub Category</a></li>
        			<li><a href="{{url('admin-job-type')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Jobs Type</a></li>
        			<li><a href="{{url('admin-job-experience')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Jobs Experience</a></li>
        		          
            	       
        	      </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Layout-4-blocks text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Registration fields</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
        			<li><a href="{{url('admin-countries')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Countries</a></li>
        			<li><a href="{{url('admin-states')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>States</a></li>
        				  
        	      </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Briefcase text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Employers</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('admin-all-employees')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>All</a></li>
					<li><a href="{{url('admin-active-employees')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Active Employees</a></li>
					<li><a href="{{url('admin-inactive-employees')}}"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Inactive Employees</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Orders</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extra_profile.html"><i class="icon-Commit text-white"><span class="path1"></span><span class="path2"></span></i>Profile</a></li>
                    <li><a href="{{url('admin-order-history')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Order History</a></li>
					<li><a href="{{url('admin-billing-record')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Billing</a></li>

					<li><a href="extra_app_ticket.html"><i  class="icon-Chat text-white"><span class="path1"></span><span class="path2"></span></i>Support</a></li>
				
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span> Packages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin-create-package')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Create Package</a></li>
					<li><a href="{{url('admin-package-list')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>All Package</a></li>

					<li><a href="{{url('asdf')}}"><i  class="icon-Chat text-white"><span class="path1"></span><span class="path2"></span></i>Support</a></li>
				  </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Articles</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin-create-article')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Create Article</a></li>
					<li><a href="{{url('admin-all-article')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>All Article</a></li>

					<li><a href="{{url('asdf')}}"><i  class="icon-Chat text-white"><span class="path1"></span><span class="path2"></span></i>Support</a></li>
				  </ul>
				</li>
    			<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Site</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin_privacy_policy')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Privacy Policy</a></li>
					<li><a href="{{url('admin_term_condition')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Term & Condition</a></li> 

					<li><a href="{{url('admin_website_email')}}"><i  class="icon-Chat text-white"><span class="path1"></span><span class="path2"></span></i>Website Email</a></li>
				  </ul>
				</li>
                				
                				
                					<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Seeker</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin_view_seeker')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>View seeker list</a></li>
					<li><a href="{{url('admin_manage_seeker')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>manage seeker</a></li> 

				 </ul>
				</li>
				
			
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Job Scrappers</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('scrapper/linkedin')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>LinkedIn Scrapper</a></li>
					<li><a href="{{url('scrapper/indeed')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Indeed Scrapper</a></li> 

				 </ul>
				</li>
				
				
					<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Applicants</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin-manage-applicants')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Jobs applicants</a></li>
					<!--<li><a href="{{url('scrapper/indeed')}}"><i class="icon-Credit-card text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Indeed Scrapper</a></li> -->

				 </ul>
				</li>
							
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage jobs</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('admin-view-all-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>All Jobs</a></li>
					
					<li><a href="{{url('admin-view-Active-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Active Jobs</a></li>

                    <li><a href="{{url('admin-view-Expired-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i> Expired Jobs </a></li>


				 </ul>
				 
				 
				 
				 
				</li>
				
				
				<li class="treeview">
				  <a href="#">
					<i class="icon-Credit-card  text-white"><span class="path1"></span><span class="path2"></span></i>
					<span>Reports</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
				
					<li><a href="{{url('Active-jobs-by-employer')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i> Active jobs by employer </a></li>
					
					<li><a href="{{url('all-daily-applicants')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Daily Applications</a></li>

                    <li><a href="{{url('Monthly-Expiring-Jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Monthly Expiring Jobs </a></li>

                    <li><a href="{{url('admin-view-Active-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Featured Jobs</a></li>
                   
                    <li><a href="{{url('admin-view-Active-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i> New Employer Accounts </a></li>

                    <li><a href="{{url('admin-view-Active-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Expiring  Accounts </a></li>

                    <li><a href="{{url('admin-view-Active-jobs')}}"><i class="icon-Credit-card text-white"><span class="path1"></span>
					<span class="path2"></span><span class="path3">
					</span></i>Job Seeker Subscriptions </a></li>

                    



				 </ul>
				 
				 
				 
				 
				</li>
							
							
			  </ul>
		  </div>
		</div>
    </section>
  </aside>
