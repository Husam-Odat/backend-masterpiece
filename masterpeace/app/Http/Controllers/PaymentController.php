<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

use App\Models\Order;
use App\Models\Cart;
use Carbon\Carbon;
use DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PaymentController extends Controller
{
    //pay for become member of the Auction

    public function payment(Request $request)
    {
        // $total = $request->cart->price;
        if (Auth::user() == null) {
            return redirect('/login');
        } else {
            $user_id = $request->user_id;
            try {
                $provider = new PayPalClient;
                $provider->setApiCredentials(config('paypal'));
                $paypaltoken = $provider->getAccessToken();

                $response = $provider->createOrder([
                    "intent" => "CAPTURE",
                    "application_context" => [
                        "return_url" => route('payment.success', compact('user_id')),
                        "cancel_url" => route('payment.cancel'),
                    ],
                    "purchase_units" => [
                        [
                            "amount" => [
                                'currency_code' => 'USD',
                                // "value" => $request->price,
                                // "value" => $request->total_price,
                                "value" => 3,

                                // Make sure 'value' is used for the price

                            ],


                        ],
                    ],
                ]);

                foreach ($response['links'] as $link) {
                    if ($link['rel'] == "approve") {
                        return redirect()->away($link['href']);
                    }
                }
            } catch (\Exception $e) {
                // Handle API request errors here, e.g., log the error message
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }
    }
    public function success(Request $request)
    {

        $memberinfo = $request;

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypaltoken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        // use carbon library

        if (isset($response['status']) && $response['status'] == "COMPLETED") {
            // dd($response);
            $payment = Payment::insert([
                // 'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                // 'payment_status' => $response['payment_source']['paypal']['account_status'],
                // 'currency' => 'USD',
                // 'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
                'userId' => Auth()->user()->id,
                // 'user_name' => $response['payment_source']['paypal']['name']['given_name'] . $response['payment_source']['paypal']['name']['surname'],
                // 'user_email' => $response['payment_source']['paypal']['email_address'],
                'status' => $response['payment_source']['paypal']['account_status'],
                'provider' => 'paypal',
                'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
            ]);
            // ========================
            // approve payment
            if (Auth::user() == null) {
                return redirect('/loginn');
            } else {
                // dd(Auth::user());
                $id = Auth::user()->id;
                $cartItems = Cart::where('userId', $id)->get();
                $total = 0;
                foreach ($cartItems  as  $value) {

                    $orderProduct = OrderProduct::create([
                        "productId" => $value['productId'],
                        "quantity" => $value['quantity'],
                        "price" => $value['price'],


                    ]);
                    $total += $value['total'];
                    Order::create([
                        'userId' => $id,
                        'total' => $total,
                        'paymentId' => 25,
                        'shipmentId' => 1,
                        'orderProductId' => $orderProduct->id,
                        // 'orderProductId' => 1,


                    ]);
                }
            }
            //===========================
            return redirect()->route('home')->with('success', 'Thank you for your purchase. Your order will be shipped to you soon.!');
        } else {

            return response()->json('Failed payment');
        }
    }

    public function cancel()
    {
        dd('cancelled the order');
    }
}
