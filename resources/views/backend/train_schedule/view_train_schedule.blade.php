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
                      
                       <th> Start Station Name</th>
                       <th>End Station Name</th>
                       <th>Start Date And Time</th>
                       <th>End_Date And Time</th>
                       <th width="20%">Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                   {{$i=1}}
                   @foreach (  $alldata as $list )
                   <tr>
                        <td> {{$i++}}</td>
                        <td> {{$list['showtrain']['train_name']}}</td>
                        
                        
                        <td>{{$list['showstartstation']['station_name']}}</td>
                        <td>{{$list['showendstation']['station_name']}}</td>
                        <td>{{$list->start_date_time}}</td>
                        <td>{{$list->stop_date_time}}</td>
                       
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