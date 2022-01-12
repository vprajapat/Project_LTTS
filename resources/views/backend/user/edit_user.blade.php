@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Update User</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate method="post" action="{{route('User.update',$editdata->id)}}">
                 @csrf
                <div class="row">
                   

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Full Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" value="{{$editdata->name}}" data-validation-required-message="This field is required"> </div>
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
                                <input type="email" name="email" class="form-control" value="{{$editdata->email}}" data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                   
                   
                    <div class="col-12">						
                      
                       
                   
                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info " value="Update">
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