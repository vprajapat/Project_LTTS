@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Add User</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate method="post" action="{{route('User.store')}}">
                 @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5> Select Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="user_type" id="user_type" required class="form-control">
                                    <option  >.....Select Role.....</option>
                                    @foreach ( $editdata as $item )
                                        
                                    
                                    <option value="{{$item ->id}}">{{$item ->display_name}}</option>
                                    @endforeach
                                    {{-- <option value="administrator">Administrator</option> --}}
                                  
                                </select>
                            </div>
                          
                        </div>
                        <span class="text-danger">
                            @error('user_type')
                                {{$message}}
                            @enderror
                          </span>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Full Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Email Address <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Password  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                          </span>
                    </div>

                  
                    <div class="col-12">						
                      
                       
                   
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info " value="Submit">
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