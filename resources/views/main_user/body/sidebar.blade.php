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
          <span>Ticket</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('ticket.View')}}"><i class="ti-more"></i>Book Ticket</a></li>
          <li><a href="{{route('ticket.booked')}}"><i class="ti-more"></i>Booked Ticket</a></li>
          
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