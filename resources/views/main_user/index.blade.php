
@extends('main_user.user_master')


@section('user')

<section class="content">
 
<section class="content">
  <!-- Basic Forms -->
  <div class="row">
   
   <div class="col-12">
<div class="box">
 
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
        
       <div class="box ">
           <div class="box-header with-border">
             <h3 class="box-title">Dashboard</h3>
           
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive">
                 <table id="example1" class="table table-bordered table-striped ">
                 
                   <tbody>
                      
                       
                       <tr>
                            
                            
                            
                            
                           
                            <td>
                              <li> <p class=" btn btn-info align-center"> <a href="{{route('ticket.View')}}"> Book Ticket</a></p></li>
                              
                               
                            </td>
                            
                            <td>
                              <li> <p class=" btn btn-info align-center"> <a href="{{route('ticket.booked')}}"> Booked Ticket</a></p></li>
                              
                               
                            </td>
                          
                           
                            
                          
                         </tr>
                      
                     
                       
                   </tbody>
                   
                 </table>
               </div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
    
        
         <!-- /.box -->          
      </div>
      <!-- /.col -->
      
   </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<div class="col-3"></div>
</div>  


</section>

  <!-- main-panel ends -->
@endsection