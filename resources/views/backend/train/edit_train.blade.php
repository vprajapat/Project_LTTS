@extends('admin.admin_master')

@section('admin')

<section class="content">

    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Update Train</h4>
         
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate method="post" action="{{route('train.update',$editdata->train_id)}}">
                 @csrf
                <div class="row">
                   

                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Train Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="train_name" class="form-control" value="{{$editdata->train_name}}" data-validation-required-message="This field is required"> </div>
                        </div>
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                          </span>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <h5>Train Code <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" name="train_code" class="form-control" value="{{$editdata->train_code}}" data-validation-required-message="This field is required"> </div>
                      </div>
                      <span class="text-danger">
                          @error('name')
                              {{$message}}
                          @enderror
                        </span>
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