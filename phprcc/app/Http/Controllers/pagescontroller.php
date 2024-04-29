<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Comment;

class pagescontroller extends Controller
{
    //
    function home() {
       $products = Product::all();
       $slides = Slide::all();
    //    dd($products);
       return view('homepage' ,compact('products', 'slides'));
    }

    function single($id) {
        $product = Product::find($id);
     //    dd($products);
        return view('single' ,compact('product'));
     }
 

    function about() {
        //    echo "welcom fady";
        $users=User::all();
        $name="fff";
         $films=['re','fa','sa'];  
        return view('about' ,compact('name','films' ,'users'));
    }

    function contact() {
    return view ('contact');
    }
    function ordersave(Request $request) {
        $user= auth()->user();
        $product =Product::find($request->product_id);
        Order::create([
            "user"=>$user->id,
            "product"=>$product->id,
            "price"=>$product->sale_price,
            "qnt"=>$request->qnt,
            "total"=>$request->qnt * $product->sale_price,
            
        ]);
        return redirect()->route('home');
    }

    function savecontact(Request $request) {
        
        Contact::create([
            "name"=>$request->name,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "massage"=>$request->message,
        ]);
        return redirect()->route('home');
    }

    function comments($id) {
        $comments = Comment::where('product_id',$id)->get();
        return response()->json($comments);

        }
        function commentSave(Request $request) {
            Comment::create([
                'product_id'=>$request->product_id,
                'comment'=>$request->comment,
            ]);
            $comments = Comment::where('product_id',$request->product_id)->get();
        return response()->json($comments);

        }
}
