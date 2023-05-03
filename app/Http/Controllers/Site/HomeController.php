<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products= Product::orderBy('id','desc')->limit(5)->get();
  
     $user = User::first();
     Auth::setUser($user);
     $user =Auth::user();
     $userId =$user->id;

     $condition = new \Darryldecode\Cart\CartCondition(array(
        'name' => 'VAT 12.5%',
        'type' => 'tax',
        'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
        'value' => '12.5%',
        'order' => 2
    ));
    $coupon101 = new \Darryldecode\Cart\CartCondition(array(
        'name' => 'COUPON 101',
        'type' => 'coupon',
        'value' => '-20%',
    ));


     $add_to_cart =[];
     foreach($products as $key=> $product){
        $add_to_cart []=[
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $key+1,
            'attributes' => array(),
            'conditions'=>[$condition, $coupon101],
            'associatedModel' => $product
        ];

    //     Cart::session($user->id)->add([
    // 'id' => $product->id,
    // 'name' => $product->name,
    // 'price' => $product->price,
    // 'quantity' => $key+1,
    // 'attributes' => array(),
    // 'associatedModel' => $product
    //     ]);
     }
     Cart::session($userId)->clear();
     if(Cart::session($userId)->isEmpty()){
        echo'cart is empty<br>';
    }
     Cart::session($user->id)->add($add_to_cart);
     Cart::session($user->id)->update($products[0]->id, array(
        'name' => 'New Item Name', // new item name
        'price' => 10,
        'quantity'=>9,   // new item price, price can also be a string format like so: '98.67'  
      ));
      $total = Cart::session($userId)->getTotal();
      if(!Cart::session($userId)->isEmpty()){
        echo'cart is not empty<br>';
    }

      $cart =Cart::session($userId)->getcontent();
      $cartTotalQuantity = Cart::session($userId)->getTotalQuantity();  
     foreach($cart as $key=>$value){                             
        echo $value->getPriceSum();
     }




    


    $sub=Cart::session($userId)->getSubTotal();
 
    dd( $sub ,$total ,$cart ,$cartTotalQuantity);

    //  cart::session($user->id)->add($add_to_cart);
    //  cart::session($user->id)->clear();
     
     $total = Cart::session($userId)->getTotal();
     $cartTotalQuantity = Cart::session($userId)->getTotalQuantity();
     $items = Cart::session($userId)->getContent()->toArray();
     dd($add_to_cart,$total,$cartTotalQuantity,$items);
   return view('site.index ',compact('products'));

    }

}
