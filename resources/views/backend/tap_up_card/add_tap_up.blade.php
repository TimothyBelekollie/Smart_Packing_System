@extends("backend.master")
@section('content')

<div class="sl-mainpanel">
<div class="row">
<div class="col-md-9 ml-5 mt-5 ">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Make Deposit</h6>

<form action="{{route('tap.store.card',$updatePayment->id)}}" method="Post">
@csrf
            <div class="row mg-b-25">

              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">Amount to Deposit<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="Balance" value="" placeholder="Enter Amount">
                  @error('Balance')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"><b style="color: #000;margin-bottom:5px;"><h4>Card UID/Number</h4> </b></label>
                  <h4 style="color: rgb(9, 9, 63);margin-bottom:5px;">{{$updatePayment->uid}}</h4>

                </div>
              </div><!-- col-8 -->

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
