<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class BackendController extends Controller
{
    //
    public function AllVehicle(){
        $allData=Vehicle::all();
        return view('backend.vehicles.index',compact('allData'));
    }
    public function AddVehicle(){
         return view('backend.vehicles.add_vehicle');
    }
    public function StoreVehicle(Request $request){
        $validData=$request->validate([
            'lessonPlate'=>'required|unique:vehicles,lessonPlate',
        'driverName'=>'required',
        'driverContact'=>'required',
        ]);
$saveData=new Vehicle();
$saveData->lessonPlate=$request->lessonPlate;
$saveData->driverContact=$request->driverContact;
$saveData->driverName=$request->driverName;
$saveData->save();

return redirect()->route('all.vehicles');

    }

    public function EditVehicle($id){
$editData=Vehicle::find($id);
return view('backend.vehicles.edit_vehicle',compact('editData'));
    }

    public function UpdateVehicle(Request $request, $id){
        $updateData=Vehicle::find($id);
        $updateData->lessonPlate=$request->lessonPlate;
        $updateData->driverContact=$request->driverContact;
        $updateData->driverName=$request->driverName;
        $updateData->save();
        return redirect()->route('all.vehicles');
    }

    public function DestroyVehicle($id){
        $deleteVehicle=Vehicle::find($id);
        $deleteVehicle->delete();
        return redirect()->route('all.vehicles');
    }




    // Cards Section
    public function AllCard(){

$allData=DB::table('cards')
->join('vehicles','vehicles.id','=','cards.vehicle_id')

->select('cards.*','vehicles.*')
->get();
return view('backend.cards.index',compact('allData'));

    }

    public function AddCard(){
        $allData=Vehicle::all();
        return view('backend.cards.add_card',compact('allData'));
    }
    public function StoreCard(Request $request){
        $validData=$request->validate([
            'uid'=>'required|unique:cards,uid',
        'Balance'=>'required',
        'vehicle_id'=>'required',
        ]);
$saveData=new Card();
$saveData->uid=$request->uid;
$saveData->Balance=$request->Balance;
$saveData->vehicle_id=$request->vehicle_id;
$saveData->save();

return redirect()->route('all.card');
    }



    public function EditCard($vehicle_id){
        $data['allData']=Vehicle::all();


        $data['vehicles']=Vehicle::all();
        $data['editData']=Card::with(['vehicle_lesson'])->where('vehicle_id',$vehicle_id)->first();//
      //  dd( $data['editData']->toArray());

return view('backend.cards.edit_card',$data);
    }

    public function UpdateCard(Request $request, $vehicle_id){
        $updateData= Card::where('id',$request->id)->where('vehicle_id',$vehicle_id)->first();

$updateData->uid=$request->uid;
$updateData->Balance=$request->Balance;
$updateData->vehicle_id=$request->vehicle_id;
$updateData->save();
return redirect()->route('all.card');
    }


    public function DeleteCard($vehicle_id){
        $deleteCard= Card::where('vehicle_id',$vehicle_id)->first();
        //$deleteCard=Card::find($vehicle_id);
        $deleteCard->delete();
}


//Tap UP Card {{ This is meant to add credid/money to the card}}

public function TapAllCard(){

    // $allData=DB::table('cards')
    // ->join('vehicles','vehicles.id','=','cards.vehicle_id')

    // ->select('cards.*','vehicles.*')
    // ->get();
    $allData=Card::all();
    return view('backend.tap_up_card.index',compact('allData'));

        }

        public function TapAddCard($id){

$data['updatePayment']=Card::find($id);

          return view('backend.tap_up_card.add_tap_up',$data);
        }
        public function TapStoreCard(Request $request,$id){

            $data=Card::find($id);
          $previousBalance=$data->Balance;
          $present_Balance=(float)$previousBalance+(float)$request->Balance;
          $data->Balance=$present_Balance;
          $data->save();

return redirect()->route('tap.all.card');
        // return view('backend.tap_up_card.index',$data);
                    }

    public function Logout(){
        Session::flush();

        Auth::logout();

        return redirect()->route('sps.index');
    }




    public function LoginView(){

        return view('frontend.login');
    }
}
