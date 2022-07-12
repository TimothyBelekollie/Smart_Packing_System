@extends("backend.master")
@section('content')

<div class="sl-mainpanel">
<div class="row">
<div class="col-md-9 ml-5 mt-5 ">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Card</h6>

<form action="{{route('update.card',$editData->vehicle_id)}}" method="Post">
@csrf
<input type="hidden" name="id" value="{{$editData->id}}">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">uid No Number <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="uid" value="{{$editData->uid}}">
                  {{-- @error('uid')
                  <div class="alert alert-danger">{{ $message }}</div>
                   @enderror --}}
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Card Balance<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="Balance" value="{{$editData->Balance}}" >
                 {{-- @error('Balance')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror --}}
                </div>
              </div><!-- col-4 -->
             {{-- <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Lesson Plate Number</h6>
            <p class="mg-b-20 mg-sm-b-30">Select Lesson Plate Number</p> --}}


              <div class="col-lg-4">
              <h6 class="form-control-label">Lesson Plate Number<span class="tx-danger">*</span></h6>

                <select name="vehicle_id" class="form-control select2" >
                    <option value="" selected="" disabled="">Choose one</option>
                  @foreach ($vehicles as $vehicle)

                  <option  value="{{$vehicle->id}}"{{($editData->vehicle_id==$vehicle->id)?'selected':''}}>{{$vehicle->lessonPlate}}</option>
                   @endforeach

                </select>
              </div><!-- col-4 -->
              </div>




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
