<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        // Session::flush();
        $Ncart = [];

        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $cart = Cart::where('userId', $iduser)->with('product')->get();

            // $cart = DB::table('carts')
            // ->where('userId', $iduser)
            // ->join('products', 'carts.productId', '=', 'products.id')
            // ->select('carts.*', 'products.*')
            // ->get();
            // dd($cart);

            foreach ($cart as $item) {
                array_push($Ncart, $item->productId);
            }

            $items = count($Ncart);
        } else {
            $cart = session('cart');
        }

        // $coupon = coupons::where('couponName', $request->coupon)->first();

        if (
            $cart != null
        ) {
            $total = 0;

            foreach ($cart as $cartItem) {
                $total += $cartItem['quantity'] * (isset($cartItem->product) ? $cartItem->product->price : $cartItem['price']);
            };
            // if ($coupon) {
            //     $total = (float)($total - ($total * $coupon->discount));
            // }
        } else {
            $total = 0;
        }

        // $state = Str::lower($request->state);
        // dd($request->state);

        // $delivery = ($request->state === 'amman') ? 3 : 1;
        // return view('pages.cart2', compact('cart', 'total'));
        // dd($cart);
        return view('pages.cart', compact('cart', 'total'));

        // return view('pages.checkout' , compact('cart', 'total'));

        // return [
        //     view('pages.cart2', compact('cart', 'total')),
        //     view('pages.cart', compact('cart', 'total')),
        //     view('pages.checkout', compact('cart', 'total')),
        // ];

        // return view('pages', [
        //     'cartView' => view('pages.cart', compact('cart', 'total')),
        //     'cart2View' => view('pages.cart2', compact('cart', 'total')),
        //     'checkoutView' => view('pages.checkout', compact('cart', 'total')),
        // ]);
    }


    // ===================old====================



    // public function index()
    // {


    //     $cart = session('cart', []);

    //     // dd($cart);
    //     // Display the cart contents and total
    //     return view('pages.cart', ['cart' => $cart]);

    // }


    // public function addToCart(Request $request)
    //     {
    //         // Session::forget('cart');
    //         $productId = $request->input('product_id');
    //         // $productName = $request->input('product_name');
    //         $quantity = $request->input('quantity');

    //         $cart = session('cart', []);

    //         if (isset($cart[$productId])) {
    //             $cart[$productId] += $quantity;
    //         } else {
    //             $cart[$productId] = $quantity;
    //         }

    //         session(['cart' => $cart]);

    //         return redirect()->route('pages.cart.index');
    //     }

    //     public function removeFromCart(Request $request)
    //     {
    //         $productId = $request->input('product_id');

    //         $cart = session('cart', []);

    //         if (isset($cart[$productId])) {
    //             unset($cart[$productId]);
    //         }

    //         session(['cart' => $cart]);

    //         return redirect()->route('pages.cart.index');
    //     }

    //     public function clearCart()
    //     {
    //         session(['cart' => []]);

    //         return redirect()->route('pages.cart.index');
    //     }

    // ===================old=======================

    public function store(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $productId = $product->id;
            $quantity = $request->quantity || 1;

            // Check if the product already exists in the cart
            $existingCart = Cart::where('userId', $iduser)
                ->where('productId', $productId)
                ->first();

            if ($existingCart) {
                // Product already exists in the cart, so increment the quantity
                $existingCart->update([
                    'quantity' => $existingCart->quantity + $quantity
                ]);
            } else {
                // Product does not exist in the cart, so create a new record
                Cart::create([
                    'userId' => $iduser,
                    'productId' => $productId,
                    'quantity' => $quantity

                ]);
            }
        } else {
            $sessioncart = session()->get('cart', []);
            if (isset($sessioncart[$id])) {

                $sessioncart[$id]['quantity'] += isset($request->quantity) ? $request->quantity : 1;

                session()->put('cart', $sessioncart);
            } else {
                $sessioncart[$id] = [
                    'id' => $id,
                    'productId' => $product->id,
                    'productname' => $product->name,
                    'shortdes' => $product->Sdescription,
                    'quantity' => isset($request->quantity) ? $request->quantity : 1,
                    'image' => $product->image1,
                    'price' => $product->price,

                ];
            }
            session()->put('cart', $sessioncart);
        }


        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        if (auth()->user()) {
            $cart = cart::all();
            cart::where('productId', $id)->delete();
        } else {
            // dd($id);
            $cart = session('cart');
            // dd($cart[$id]['id']);
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }
}
