<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display cart
     */
    public function index()
    {
        //Get cart from session
        $carts = Session::get('carts', []);
        //Send tp view
        return view('carts.index', [
            'carts' => $carts
        ]);
    }
    /**
     * Add Product to cart
     */
    public function addToCart(Shoe $shoe){
        //Get Cart from Session (if cart is null, create cart is an array)
        $carts = Session::get('carts', []);
        //Check cart is exist
        if(Session::has('carts')){
            //Check product exist
            if(isset($carts[$shoe->id])){
                $carts[$shoe->id]['quantity']++;
            } else {
                $carts[$shoe->id] = [
                    'name' => $shoe->name,
                    'price' => $shoe->price,
                    'image' => $shoe->image,
                    'quantity' => 1,
                ];
            }
        } else {
            $carts[$shoe->id] = [
                'name' => $shoe->name,
                'price' => $shoe->price,
                'image' => $shoe->image,
                'quantity' => 1,
            ];
        }
        //put cart to session
        Session::put('carts', $carts);
        //redirect to cart view
        return Redirect::route('carts.index');
    }
    /**
     * Update a product in cart
     */
    /**
     * Update all product in cart
     */
    public function updateCart(Request $request)
    {
        //Get cart
        $carts = Session::get('carts', []);
        //Get product quantity
        $productQuantity = $request->updateQuantity;
        //Update cart
        if(Session::has('carts')){
            foreach ($productQuantity as $id => $quantity){
                $carts[$id]['quantity'] = $quantity;
            }
        }
        //put to session
        Session::put('carts', $carts);
        //Redirect to cart view
        return Redirect::route('carts.index');
    }
    /**
     * Remove a product in cart
     */
    public function removeOneProduct(Shoe $shoe){
        //Get cart
        $carts = Session::get('carts', []);
        //Check cart exist
        if(Session::has('carts')){
            //check product exist
            if(isset($carts[$shoe->id])){
                unset($carts[$shoe->id]);
                //put cart to session
                Session::put('carts', $carts);
            }
        }
        //redirect to cart view
        return Redirect::route('carts.index');
    }
    /**
     * Remove all product in cart
     */
    public function deleteCart()
    {
        //Get Cart
        Session::forget('carts');
        return Redirect::route('carts.index');
    }

    public function plus(Shoe $shoe)
    {
        $carts = Session::get('carts', []);
        $carts[$shoe->id]['quantity']++;
        Session::put('carts', $carts);
        return Redirect::route('carts.index');
    }

    public function minus(Shoe $shoe)
    {
        $carts = Session::get('carts', []);
        $carts[$shoe->id]['quantity']--;
        Session::put('carts', $carts);
        return Redirect::route('carts.index');
    }
}
