<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('checkout');
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

        try {
            \Stripe\Stripe::setApiKey('sk_test_q1y5vH9ywmrSyQMWv0EfpxgL00rKBLBnmK');
            $token = $_POST['stripeToken'];

            $charge = \Stripe\Charge::create([

                'amount' => Cart::total()*100,
                'currency' => 'EUR',
                'source' => $token,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
//                 'contents' => $contents,
//                 'quantity' => Cart::instance('default')->count(),
                ],
            ]);
            Cart::instance('default')->destroy();
            return view('thankyou');

        }catch(Exception $e){

            echo('notok');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
