@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">update Train Schedule</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate method="post" action="{{route('schedule.update',$trains_schedule->trains_schedule_id)}}" >
                
                 @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5> Train name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="train_id" id="station_id" required class="form-control">
                                    <option selected disabled>Select Train</option>
                                    
                                    @foreach ( $train as $item )
                                        
                                    
                                    <option value="{{$item ->train_id}}"  {{($trains_schedule->train_id == $item ->train_id) ? "selected" :"" }}>{{$item ->train_name}}</option>
                                    @endforeach
                                  
                                  
                                </select>
                            </div>
                          
                        </div>
                        <span class="text-danger">
                            @error('train_id')
                                {{$message}}
                            @enderror
                          </span>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5> Station name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="station_id" id="station_id" required class="form-control">
                                    <option >Select Station</option>
                                    @foreach ( $station as $item )
                                        
                                    
                                    <option value="{{$item ->station_id}}"  {{($trains_schedule->station_id == $item ->station_id) ? "selected" :"" }}>{{$item ->station_name}}</option>
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

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5> Time <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="datetime-local" name="depart_time" class="form-control" required data-validation-required-message="This field is required"  value="{{$trains_schedule->depart_time}}"> </div>
                        </div>
                        <span class="text-danger">
                            @error('depart_time')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5> Date <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="datetime-local" name="depart_date" class="form-control" required data-validation-required-message="This field is required"  value="{{$trains_schedule->depart_date}}"> </div>
                        </div>
                        <span class="text-danger">
                            @error('depart_date')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                  
                   
                   

                  
                    <div class="col-12">					
                       <div class="row">
                           <div class="col-4"></div>
                           <div class="col-4">
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info form-control " value="Submit">
                            </div>
                           </div>
                           <div class="col-4"></div>
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

   </section>
@endsection