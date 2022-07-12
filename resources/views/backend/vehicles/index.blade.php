@extends("backend.master")
@section('content')
<div class="sl-mainpanel">
 <div class="sl-pagebody">
   
 <div class="card pd-20 pd-sm-40">
  
          <h6 class="card-body-title">All Vehicles</h6>

<div class="row">
<div class="col-md-10 mb-5">
<button style="float:right;" type="button" class="btn btn-primary"><a style="color:white; "href="{{route("add.vehicle")}}">Add New Vehicle</a></button>
</div></div>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Serial No</th>
                  <th class="wd-15p">Lesson Plate No</th>
                  <th class="wd-20p">Driver Name</th>
                  <th class="wd-15p">Driver Contact</th>
                  <th class="wd-10p">Register Date</th>
                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($allData as $key=>$data)
                
        
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$data->lessonPlate}}</td>
                  <td>{{$data->driverName}}</td>
                  <td>{{$data->driverContact}}</td>
                  <td>{{$data->created_at}}</td>
                  <td>
                  <button class="btn btn-primary active"><a href="{{route('edit.vehicle',$data->id)}}" style="color:white"> Edit</a></button>
                  <button class="btn btn-danger"><a href="{{route('delete.vehicle',$data->id)}}" style="color:white">Delete</a></button>
                  </td>
                </tr>
                
                @endforeach 
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        </div>
       </div>

</div>


        @endsection