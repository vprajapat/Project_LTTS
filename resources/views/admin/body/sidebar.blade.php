<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">	
  
      <div class="user-profile">
    <div class="ulogo">
       <a href="index.html">
        <!-- logo for regular state and mobile devices -->
         <div class="d-flex align-items-center justify-content-center">					 	
            <img src="{{ asset('frontend\img\LTTS_Logo.png') }}" class = "img-responsive rounded" alt="ltts logo" height="45" width="45" > 
            <h3><b>Local Train Ticket System</b></h3>
         </div>
      </a>
    </div>
      </div>
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">  
    
  <li>
        <a href="{{route('dashboard')}}">
          <i data-feather="pie-chart"></i>
    <span>Dashboard</span>
        </a>
      </li> 
      <li class="treeview ">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('User.View')}}"><i class="ti-more"></i>View user</a></li>
          <li><a href="{{route('User.add')}}"><i class="ti-more"></i>Add User</a></li>
          
        </ul>
        
      </li>
      
      <li class="treeview ">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage Train</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('train.View')}}"><i class="ti-more"></i>View Train</a></li>
          <li><a href="{{route('train.add')}}"><i class="ti-more"></i>Add Train</a></li>
          
        </ul>

      </li>

      <li class="treeview ">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage Station</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('station.View')}}"><i class="ti-more"></i>View Station</a></li>
          <li><a href="{{route('station.add')}}"><i class="ti-more"></i>Add Station</a></li>
          
        </ul>
        
      </li>

      <li class="treeview ">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Manage Train Schedule</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('schedule.View')}}"><i class="ti-more"></i>View Train Schedule</a></li>
          <li><a href="{{route('schedule.add')}}"><i class="ti-more"></i>Add Train Schedule</a></li>
          
        </ul>
        
      </li>
     
  
     
    
    
      
      <li class="header nav-small-cap">User Interface</li>
    
     
  
       
     
    
  <li>
        <a href="{{route('admin.logout')}}">
          <i data-feather="lock"></i>
    <span>Log Out</span>
        </a>
      </li> 
      
    </ul>
  </section>


</aside>