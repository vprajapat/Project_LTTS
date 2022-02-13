
@extends('main_user.user_master')


@section('user')

<section class="content">
  <div class="row">
    
    <div class="col-12">
 <div class="box">
  
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
         
        <div class="box ">
            <div class="box-header with-border">
              <h3 class="box-title">Booked Ticket</h3>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">S.NO.</th>
                            <th>Name</th>
                           
                            <th>Email</th>
                            <th>From</th>
                            <th>Destination</th>
                            <th>Phone No.</th>
                            <th>Total Passenger</th>
                            <th>Date and Time</th>
                            <th>Total Amount</th>
                            
                           
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{$i=1}}
                        @foreach ( $book as $booking)
                        
                        <tr>
                            
                             
                             
                            
                               
                             <td> {{$i++}}</td>
                            
                             <td> <p class=" btn btn-primary m-1">{{$booking->pass_name}}</p></td>
                             <td> <p class=" btn btn-primary m-1">{{$booking->pass_email}}</p></td>
                             <td> <p class=" btn btn-primary m-1">{{$booking['showstation']['station_name']}}</p></td>
                             <td> <p class=" btn btn-primary m-1">{{$booking->destination}}</p></td>
                             <td> <p class=" btn btn-primary m-1">{{$booking->pass_Phone}}</p></td>
                             <td > <p class=" btn btn-primary m-1">{{$booking->total_pass}}</p></td>
                             <td > <p class=" btn btn-primary m-1">{{$booking->created_at}}</p></td>
                             <td><p class=" btn btn-primary m-1">{{$booking->total_pass*$amount}} .Rs</p> </td>
                            
                            
                             
                           
                          </tr>
                          @endforeach
                       
                      
                        
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