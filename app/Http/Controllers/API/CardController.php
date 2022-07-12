<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Validator;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cards= Card::all();
        $response = [
            'Cards' => $Cards,
        ];
        return response($response, 201);
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

            'uid' => 'required',
            'Balance' => "required",

            'vehicle_id' => 'required'

        );
        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json($validate->errors(),401 );
        }
        else{
            $storeCard=new Card();
          $storeCard->uid=$request->uid;
          $storeCard->Balance=$request->Balance;
          $storeCard->vehicle_id=$request->vehicle_id;
           $storeCard->save();

            if($storeCard){
                return["result"=>"Data saved successfully"];
            }else{
                return["result"=>"Unfortunately operation fail"];
            }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    { $showCard=Card::find($card);

        if ($showCard) {
            $response = [
                'message' => 'success',
                'Card' => $showCard
            ];
            return response($response, 201);
        } else {
            return response([
                'message' => 'No Card Found'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $rules=array(


            'uid' => 'required',
            'Balance' => "required",

            'vehicle_id' => 'required'

        );
        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json($validate->errors(),401 );
        }
        else{
         $updateCard=Card::find($card->id);
          $updateCard->uid=$request->uid;
          $updateCard->Balance=$request->Balance;
          $updateCard->vehicle_id=$request->vehicle_id;
           $updateCard->save();

            if($updateCard){
                return["result"=>"Data updated successfully"];
            }else{
                return["result"=>"Unfortunately operation fail"];
            }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $deleteCard =Card::find($card->id);
        if ($deleteCard) {
            $Data = $deleteCard->delete();
            if ($Data) {
                $response = [
                    'message' => 'Card Deleted'
                ];
                return response($response, 201);
            } else {
                return response([
                    'message' => 'These operation has failed'
                ], 404);
            }
        } else {
            return response([
                'message' => 'No Card Found'
            ], 404);
        }
    }
}
