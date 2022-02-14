@extends('admin.admin_master')


@section('admin')

<div class="col-12 mt-5">

    <div class="box ">
       <div class="box-header with-border">
         <h3 class="box-title">Station Details</h3>
         <a href="{{route('interstation.add')}}" class="btn btn-info " style="float : right;"> Add InterStation </a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th width="5%">S.NO.</th>
                       <th>Station Name</th>
                       
                      
                       <th width="20%">Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                   {{$i=1}}
                   @foreach (  $alldata as $list )
                   <tr>
                        <td> {{$i++}}</td>
                        <td> {{$list['showstation']['station_name']}}</td>
                        <td>
                          <a href="{{route('interstation.show',$list->station_id)}}" class="btn btn-primary">ShowInter Station</a>
                         
                      </td>
                      
    
                                   

                        
                        
                  
                        
                       
                        
                      
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


@endsection