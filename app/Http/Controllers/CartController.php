<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Display Cart List
    public function ShowCartList()
    {
        //Get cart details
        $cart_items = Basket::where('customer_id', 8)->get();

        //Pass the data to the view
        return view('frontend.cart', compact('cart_items'));
    }

    //Display Checkout Page
    public function CheckoutPage(){
        //Get cart details
        $cart_items = Basket::where('customer_id', 8)->get();

        //Pass the data to the view
        return view('frontend.checkout', compact('cart_items'));
    }

    //Add item to cart
    public function AddCart(Request $request)
    {
        // Validate the request
        $Validator = Validator::make($request->all(), [
            'product_id' => 'required|integer|unique:baskets,product_id,NULL,NULL,customer_id,' . $request->customer_id,
            'customer_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        // Check if validation fails
        if ($Validator->fails()) {
            // Redirect back with error messages 
            return redirect()->back()->withErrors($Validator)->withInput();
        }


        // Add item to cart
        $cart_item = new Basket();
        $cart_item->product_id=$request->product_id; 
        $cart_item->customer_id = $request->customer_id;
        $cart_item->quantity = $request->quantity;
        $cart_item->save();

        // Redirect back with a success message
        return redirect()->route('user.cart')->with('success', 'Item added to cart successfully.');
    }

    //Update the cart
    public function UpdateCart(Request $request)
    {
        $cartID=$request->cart_id;

        // Find the cart item
        $cart_item = Basket::where('id',$cartID)->first();


        if ($cart_item) {
            // Update the quantity
            $cart_item->quantity = $request->quantity;
            $cart_item->save();
        } 
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    //Remove item from cart
    public function removeItem($id)
    {
       //Get Basket by id
        $item = Basket::find($id);
        if ($item) {
            $item->delete();
            return response()->json(['message' => 'Item removed successfully.']);
        }
    
        return response()->json(['message' => 'Item not found.'], 404);
    }
    

}
