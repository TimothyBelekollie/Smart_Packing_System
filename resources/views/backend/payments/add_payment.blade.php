@extends("backend.master")
@section('content')

<div class="sl-mainpanel">
<div class="row">
<div class="col-md-9 ml-5 mt-5 ">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Card</h6>

<form action="{{route('store.payment')}}" method="Post">
@csrf
            <div class="row mg-b-25">
             {{--  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Amount <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="amount" value="" placeholder="Enter Amount">
                  @error('amount')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div> --}}
              <!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Card Status<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="status"  placeholder="Enter Card Status">
                  @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Amount<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="amount" value="" placeholder="Enter Amount">
                  @error('amount')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div>
             {{-- <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Lesson Plate Number</h6>
            <p class="mg-b-20 mg-sm-b-30">Select Lesson Plate Number</p> --}}


              <div class="col-lg-4">
              <h6 class="form-control-label">UID Number<span class="tx-danger">*</span></h6>

                <select name="uid_id" class="form-control select2">

                    <option disabled="">Choose one</option>
                  @foreach ($allData as $data)

                  <option value="{{$data->uid}}">{{$data->uid}}</option>
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
