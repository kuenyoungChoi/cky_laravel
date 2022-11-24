<?php

namespace App\Http\Controllers\Api\v1\Payment;

use App\Http\Controllers\Controller;
use App\Http\Resources\Payment\PaymentResource;
use App\Models\Payment\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Payment::all();

//        $outs->with('users');
//
//        $outs->orderBy('id','desc');


        return PaymentResource::collection($outs);
//        return Payment::with('user')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $outs = Payment::create([
           'title' => $request->title
        ]);

        return new PaymentResource($outs);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        Log::info($request);

        $outs = $payment->update([
            'title' => $request->title
        ]);

        return json_encode($outs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $outs = $payment->delete();

        return json_decode($outs);
    }
}
