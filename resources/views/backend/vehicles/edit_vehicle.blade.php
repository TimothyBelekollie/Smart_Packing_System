@extends("backend.master")
@section('content')

<div class="sl-mainpanel">
<div class="row">
<div class="col-md-9 ml-5 mt-5 ">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Edit Vehicle</h6>
         
<form action="{{route('update.vehicle',$editData->id)}}" method="Post">
@csrf 

            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lesson Plate Number <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lessonPlate" value="{{$editData->lessonPlate}}" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Driver Name<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="driverName" value="{{$editData->driverName}}" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Driver Contact <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="driverContact" value="{{$editData->driverContact}}" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
            
             
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update</button>
            
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
</div>
</div>
</div>

@endsection