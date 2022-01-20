@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title text- center">Add Station</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
             
           <div class="col">
               <form novalidate method="post" action="{{route('station.store')}}">
                 @csrf
                <div class="row">
                    
                 

                    <div class="col-md-12">
                        <div class="form-group">
                            <h5 class="">Station Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="station_name" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('station_name')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h5>Station Code <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="station_code" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('train_code')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h5>Total Seat <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="number" name="total_seats" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('total_seats')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                   

                  
                    <div class="col-12">						
                      
                       
                   
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info form-control " value="Submit">
                        </div>
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
@endsection