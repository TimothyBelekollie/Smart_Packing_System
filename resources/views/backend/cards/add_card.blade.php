@extends("backend.master")
@section('content')

<div class="sl-mainpanel">
<div class="row">
<div class="col-md-9 ml-5 mt-5 ">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Card</h6>

<form action="{{route('store.card')}}" method="Post">
@csrf
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">uid No Number <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="uid" value="" placeholder="Enter RFID Number">
                  @error('uid')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Card Balance<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="Balance" value="" placeholder="Enter Card Balance">
                  @error('Balance')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div><!-- col-4 -->
             {{-- <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Lesson Plate Number</h6>
            <p class="mg-b-20 mg-sm-b-30">Select Lesson Plate Number</p> --}}


              <div class="col-lg-4">
              <h6 class="form-control-label">Lesson Plate Number<span class="tx-danger">*</span></h6>

                <select name="vehicle_id" class="form-control select2" >
                    <option disabled="">Choose one</option>
                  @foreach ($allData as $data)

                  <option value="{{$data->id}}">{{$data->lessonPlate}}</option>
                  @endforeach

                </select>
              </div><!-- col-4 -->
              </div>




            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Save</button>

            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
</div>
</div>
</div>

@endsection
