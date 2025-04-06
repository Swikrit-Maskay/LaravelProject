<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(Request $request){
        $wishlistItems=wishlist::where('user_id',Auth::id())->with('product')->get();
        return view('home.wishlist', compact('wishlistItems'));
    }
    
    public function add($productID){
        $userID=auth()->id();

        if (wishlist::where('user_id',$userID)->where('product_id',$productID)->exists()){
            return redirect()->back()->with('error','Product already in wishlist');
        }

        wishlist::create([
            'user_id'=>$userID,
            'product_id'=>$productID
        ]);

        return redirect()-> back()->with ('success', 'Added to wishlist');
    }

    public function remove($id){
        $item=wishlist::where('id',$id)->where('user_id',Auth::id())->first();
        $item->delete();

        return redirect()->back();
    }
}
