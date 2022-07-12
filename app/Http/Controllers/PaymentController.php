<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Card;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Validator;
class PaymentController extends Controller
{
    //
    public function AllPayment(){

        $allData=DB::table('cards')

         ->join('payments','cards.uid','=','payments.uid_id')
        ->select('cards.*','payments.*')
        ->get();
        return view('backend.payments.index',compact('allData'));
    }

    public function AddPayment(){
        $allData=Card::all();

        return view('backend.payments.add_payment',compact('allData'));
    }

    public function StorePayment(Request $request){
        $dataValidate=$request->validate(
        ['amount'=>'required',
        'status'=>'required',
        'uid_id'=>'required',
        ]);
        $run=$request->input(key:'uid_id');
// $card=Card::find($run);
// if($card=Card::find($run)){
//     return back();
// }

$paymentAmount=$request->input(key:'amount')*100;
// create Payment


    Payment::create([
        'uid_id'=>$run,
        'amount'=>$request->amount,
        'status'=>$request->status,
    ]);


$run=Card::where('uid',$request->uid_id)->first();

//update account balance
if($run) {

    $run->Balance=$run->Balance-$request->amount;
    $run->save();

}

return redirect()->route('all.payment');

        // $saveData=new Payment();


        // $saveData->amount=$request->amount;
        // $saveData->status=$request->status;
        // $saveData->uid_id=$request->uid_id;

        // $saveData->save();





    }





        }




//         $amount = DB::table('cards')->pluck('Balance')->sum();
//         $payment = DB::table('payments')->pluck('amount')->sum();
//         $cardData=new Card();
//         if (Card::where('uid','=',$request->uid_id)){
//             $cardData->Balance=$amount-=$payment;
//             $cardData->save();
// }
