@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title text- center">Add InterStation</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
             
           <div class="col">
               <form novalidate method="post" action="{{route('interstation.store')}}">
                 @csrf
                <div class="row">
                    
                 

                  <div class="col-md-6">
                    <div class="form-group">
                        <h5> Station <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="station_id" id="station_id" required class="form-control">
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

                <div class="col-md-6">
                    <div class="form-group">
                        <h5> Interstation  <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="inter_station" id="station_id" required class="form-control">
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