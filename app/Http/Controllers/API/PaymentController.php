<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\FlareClient\Http\Client;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Expr\BinaryOp\BooleanAnd;
use Symfony\Component\Console\Input\Input;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
             'amount'=>'required',
             'status'=>'required',
             'card_id'=>'required',
            //"amount"=>'required',

        );
        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json($validate->errors(),401 );
        }else{




        $paymentId = DB::table('payments')->pluck('card_id');
        $cardId = DB::table('cards')->pluck('id');
    //    if($paymentId==$cardId){
            $date=today();
            $status=0;
            $paymentDate=DB::table('payments')->pluck('created_at');
            if(!($paymentId==$cardId)){
                return $status;
            //    return ["response"=>$status];
            }else{
                $saveData=new Payment();

                $saveData->amount=$request->amount;
                $saveData->status=$request->status;
                $saveData->card_id=$request->card_id;
                if($paymentDate==$date){
                    $saveData->save();
                }

                if($saveData){

                        $response = [
                            'Payment' => $saveData,
                        ];
                        return response($response,201);
                    } else {
                        // return response([
                        //     'message' => ["0"]
                        // ], 404);
                        return $status;
                    }
      //      }
 }



    } }

    public function StoreEdit(Request $request,){
        $_id=$request->uid_id;
        $rules=array(
           'amount'=>'required',
           'status'=>'required',
           'uid_id'=>'required',
);
       $validate=Validator::make($request->all(),$rules);
       if($validate->fails()){
           return response()->json($validate->errors(),401 );
       }else{







       if (Card::where('uid','=',$request->uid_id)->exists()) {
        $date=today();

$run=Payment::where('uid_id',$request->uid_id)->first();
$time=Payment::where('created_at','=',today());

       if(($run) && $time){


        return 2;
        }

        else{ //to check if there is sufficient money or not
            $ram=Payment::where('uid_id',$request->uid_id)->first();
            $user = DB::table('cards')->where('Balance','>=',1000)->first();
if($ram&&$user){
    $run=$request->input(key:'uid_id');


            $paymentAmount=$request->input(key:'amount')*100;
         $saveData=Payment::create([
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


            return 1;

}else{
    return 3;
}





            // $saveData=new Payment();
            // $saveData->amount=$request->amount;
            // $saveData->status=$request->status;
            // $saveData->uid_id=$request->uid_id;
            // $saveData->save();
            // if($saveData){
            //     return 1;
            // }

        }

    //  else{
    //     return 0
    //  }
       //$card_id = Card::where('uid', $request->uid)->first();

    //        $paymentDate=DB::table('payments')->pluck('created_at');
    //     if(($card_id==NULL)){
    //          return $stat;
    //   return ["response"=>$status];
    //         }else{
    //             $today=Payment::whereDate('created_at','=', Carbon::today());
    //          //   $payment_id=Payment::where('card_id',$request->card_id)->first();
    //             if(($today===null)){
    //                 $saveData=new Payment();
    //                 $saveData->amount=$request->amount;
    //                 $saveData->status=$request->status;
    //                 $saveData->card_id=$request->card_id;
    //                 $saveData->save();
    //                 if($saveData){

    //                     $response = [
    //                         'Payment' => $saveData,
    //                     ];
    //                     return response($response,201);
    //                 } else {

    //                     return $status;
    //                 }
    //             }
    //             else{
    //                 return 10;
    //             }



     //      }
}else{
    return 0;
}



   }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, Payment $payment, Card $card){
    $validData=$request->validate([
        // 'amount'=>'required',
        'status',
        'card_id',

    ]);
   // $date = Carbon::now()->toDateTimeString();
   $posts = Payment::whereDate('created_at', Carbon::today())->get();
    $paymentId = DB::table('payments')->pluck('card_id');
    $cardId = DB::table('cards')->pluck('id');
    if($paymentId==$cardId){
        $date=today();
        $paymentDate=DB::table('payments')->pluck('create_at');
        if(!($paymentDate==$date)){
           return ["respone"=>"something went wrong"];
        }else{
            $saveData=new Payment();

            $saveData->amount=200;
            $saveData->status=1;
            $saveData->card_id=$request->card_id;
            $saveData->save();
        }

        }


return redirect()->route('all.payment');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }


}
