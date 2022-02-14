@extends('admin.admin_master')


@section('admin')

<section>
   <div class="row">
    <div class="col-2 mt-5 "></div>
    <div class="col-8 mt-5 ">

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
                           <th>InterStation Name</th>
                           
                          
                          
                           
                       </tr>
                   </thead>
                   <tbody>
                       {{$i=1}}
                       @foreach (  $ShowInterstation as $list )
                       <tr>
                            <td> {{$i++}}</td>
                            <td> {{$list->inter_station}}</td>
                         
                          
        
                                       
    
                            
                            
                      
                            
                           
                            
                          
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
   </div>
   <div class="col-2 mt-5 "></div>
</section>