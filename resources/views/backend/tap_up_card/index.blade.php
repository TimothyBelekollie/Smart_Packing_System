@extends("backend.master")
@section('content')
<div class="sl-mainpanel">
 <div class="sl-pagebody">

 <div class="card pd-20 pd-sm-40">

          <h6 class="card-body-title">All Valid Cards For Deposit</h6>

<div class="row">
<div class="col-md-10 mb-5">
{{-- <button style="float:right;" type="button" class="btn btn-primary"><a style="color:white; "href="{{route('tap.add.card')}}">Add New Card</a></button> --}}
</div></div>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Serial No</th>
                  <th class="wd-15p">uid No</th>
                  <th class="wd-20p">Current Balance</th>
                  {{-- <th class="wd-15p">vehicle Plate</th> --}}

                  <th class="wd-25p">Actions</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($allData as $key=>$data)


                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$data->uid}}</td>
                  <td>{{($data->Balance)}}</td>
                  {{-- <td>{{$data->lessonPlate}}</td> --}}

                  <td>
                  <button class="btn btn-primary active"><a href="{{route('tap.add.card',$data->id)}}" style="color:white">Make Deposit</a></button>

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
