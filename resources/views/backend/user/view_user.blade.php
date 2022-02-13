@extends('admin.admin_master')


@section('admin')

<div class="col-12 mt-5">

    <div class="box ">
       <div class="box-header with-border">
         <h3 class="box-title">User Details</h3>
         <a href="{{route('User.add')}}" class="btn btn-info " style="float : right;"> Add User</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th width="5%">S.NO.</th>
                       <th>Name</th>
                      
                       <th>Email</th>
                       <th>Role</th>
                       <th width="20%">Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                   {{$i=1}}
                   @foreach (  $alldata as $list )
                   <tr>
                        <td> {{$i++}}</td>
                        <td>{{$list->name}}</td>
                        
                        
                        <td>{{$list->email}}</td>
                        <td>
                         
                          {{ $list->role_id ==1 ? 'Admin' : 'User' }}

                        

                        </td>
                        <td>
                            <a href="{{route('User.edit',$list->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{route('User.delete',$list->id)}}"  class="btn btn-danger" id="delete">Delete</a>
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