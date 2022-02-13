@extends('main_user.user_master')


@section('user')

<section class="content">
   <!-- Basic Forms -->
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title text- center">Book Ticket</h4>
     
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
         
       <div class="col">
           <form novalidate method="post" action="{{route('ticket.store')}}">
             @csrf
            <div class="row">
                
             

              <div class="col-md-4">
                <div class="form-group">
                    <h5>From<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="fromstation" id="station_id" required class="form-control">
                            <option >Select Station</option>
                            @foreach ( $station as $item )
                                
                            
                            <option value="{{$item ->station_id}}">{{$item ->station_name}}</option>
                            @endforeach
                           
                          
                        </select>
                    </div>
                  
                </div>
                <span class="text-danger">
                    @error('station_id')
                        {{$message}}
                    @enderror
                  </span>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <h5> To  <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="destination" id="station_id" required class="form-control">
                            <option >Select Station</option>
                            @foreach ( $station as $item )
                                
                            
                            <option value="{{$item ->station_name}}">{{$item ->station_name}}</option>
                            @endforeach
                           
                          
                        </select>
                    </div>
                  
                </div>
                <span class="text-danger">
                    @error('station_id')
                        {{$message}}
                    @enderror
                  </span>
            </div>


          

            <div class="col-md-4">
                <div class="form-group">
                    <h5> Date  <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="date" name="book_date" class="form-control" required data-validation-required-message="This field is required"> </div>
                </div>
                <span class="text-danger">
                    @error('date')
                        {{$message}}
                    @enderror
                  </span>
            </div>
                

           </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                       
                        <div class="controls">
                            <input type="number" name="user_id"  class="form-control" required data-validation-required-message="This field is required" value="{{$user->id}}"  hidden > </div>
                    </div>
                    <div class="form-group">
                        <h5>Full Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="pass_name"  class="form-control" required data-validation-required-message="This field is required" value="{{$user->name}}"  readonly > </div>
                    </div>
                    <span class="text-danger">
                        @error('pass_name')
                            {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Email <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="email" name="pass_email" class="form-control" readonly required data-validation-required-message="This field is required" value="{{$user->email}}"> </div>
                    </div>
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                      </span>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Phone <span class="text-danger">*</span></h5>
                        <div class="controls">

                            <input type="tel" id="phone"  class="form-control" name="pass_Phone" data-validation-required-message="This field is required" required>
                            </div>
                    </div>
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <h5>Total Passsenger <span class="text-danger">*</span></h5>
                        <div class="controls">

                            <input type="number" id="number"  class="form-control" name="total_pass"  data-validation-required-message="This field is required" required>
                            </div>
                    </div>
                    <span class="text-danger">
                        @error('total_pass')
                            {{$message}}
                        @enderror
                    </span>

                </div>
            </div>

           <div class="col-12">						
                  
                   
               
            <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-info form-control " value="Book">
            </div>
        </div>
               
        </form>

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