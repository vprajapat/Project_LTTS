@extends('admin.admin_master')


@section('admin')

<div class="col-12 mt-5">

    <div class="box ">
       <div class="box-header with-border">
         <h3 class="box-title">Train Schedule </h3>
         <a href="{{route('schedule.add')}}" class="btn btn-info " style="float : right;"> Add Train Schedule</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th width="5%">S.NO.</th>
                       <th>Train Name</th>
                      
                       <th>Station Name</th>
                       <th>Depart_date</th>
                       <th>Depart_Time</th>
                       <th width="20%">Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                   {{$i=1}}
                   @foreach (  $alldata as $list )
                   <tr>
                        <td> {{$i++}}</td>
                        <td>{{$list->train_name}}</td>
                        
                        
                        <td>{{$list->station_name}}</td>
                        <td>{{$list->depart_date}}</td>
                        <td>{{$list->depart_time}}</td>
                       
                        <td>
                            <a href="{{route('schedule.edit',$list->trains_schedule_id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('schedule.delete',$list->trains_schedule_id)}}"  class="btn btn-danger" id="delete">Delete</a>
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