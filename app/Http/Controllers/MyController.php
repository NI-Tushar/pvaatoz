<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index(){
        return view('home');
    }
    public function buy_gmail(){
        return view('products/gmail');
    }
    public function buy_yeahoo(){
        return view('products/yeahoo');
    }
    public function buy_linkedin(){
        return view('products/linkedin');
    }
    public function buy_facebook(){
        return view('products/facebook');
    }
    public function buy_twitter(){
        return view('products/twitter');
    }
    public function buy_snapchat(){
        return view('products/snapchat');
    }
    public function buy_edumail(){
        return view('products/edumail');
    }
    public function buy_tinder(){
        return view('products/tinder');
    }
    public function buy_pinterest(){
        return view('products/pinterest');
    }
    public function buy_quora(){
        return view('products/quora');
    }
    public function buy_github(){
        return view('products/github');
    }
    public function buy_ticketmaster(){
        return view('products/ticketmaster');
    }
    public function buy_outlook(){
        return view('products/outlook');
    }
    public function buy_voice(){
        return view('products/voice');
    }
    public function buy_naver(){
        return view('products/naver');
    }
    public function buy_discord(){
        return view('products/discord');
    }
    public function buy_review(){
        return view('products/review_mail');
    }
    public function buy_binance(){
        return view('products/binance');
    }
    public function buy_medium(){
        return view('products/medium');
    }
    public function buy_wise(){
        return view('products/wise');
    }
    public function buy_coinbase(){
        return view('products/coinbase');
    }
    public function buy_paypal(){
        return view('products/paypal');
    }
    public function buy_payoneer(){
        return view('products/payoneer');
    }
    public function buy_relay(){
        return view('products/relay');
    }
    public function buy_stake(){
        return view('products/stake');
    }
    public function buy_ebay(){
        return view('products/ebay');
    }
    public function buy_paxful(){
        return view('products/paxful');
    }
    public function buy_airbnb(){
        return view('products/airbnb');
    }
    public function buy_aliexpress(){
        return view('products/aliexpress');
    }
    public function buy_googleAdds(){
        return view('products/googleAdds');
    }
    public function buy_console(){
        return view('products/console');
    }
    public function buy_twitch(){
        return view('products/twitch');
    }
    public function buy_taboola(){
        return view('products/taboola');
    }
    public function buy_apple(){
        return view('products/apple');
    }

    public function about_us(){
        return view('about');
    }
    public function contact_us(){
        return view('contact');
    }



    // public function checkout(){
    //     return view('products/pro_desc/checkout/checkout');
    // }
    public function check(Request $req){
        $total_price = $req->input('total_price');
        echo "<pre>";
        print_r($total_price); 
        echo "<pre>";
        // return view('products/pro_desc/checkout/checkout');
    }
    
    
    
    


    
    // __________________________________ product desc
    // public function buy_gmail_account(){
    //     $data = compact('name','price');
    //     return view('/products/pro_desc/buy_gmail_account')->with($data);
    // }

    
}
