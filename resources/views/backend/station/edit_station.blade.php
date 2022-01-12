@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Update Station</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate method="post" action="{{route('station.update',$editdata->station_id)}}">
                 @csrf
                <div class="row">
                   

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Station Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="station_name" class="form-control" value="{{$editdata->station_name}}" data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('station_name')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <h5>Station Code <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="station_code" class="form-control" value="{{$editdata->station_code}}" data-validation-required-message="This field is required"> </div>
                      </div>
                      <span class="text-danger">
                          @error('station_code')
                              {{$message}}
                          @enderror
                        </span>
                  </div>

                  
                </div>
                    
                   
                   
                   					
                      
                       
                   
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info " value="Update">
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