<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[MyController::class,'index']); 
Route::get('/checkout',[MyController::class,'checkout']); 

Route::get('/buy_gmail',[MyController::class,'buy_gmail']); // using laravel 8
Route::get('/buy_yeahoo',[MyController::class,'buy_yeahoo']);
Route::get('/buy_linkedin',[MyController::class,'buy_linkedin']); 
Route::get('/buy_facebook',[MyController::class,'buy_facebook']); 
Route::get('/buy_twitter',[MyController::class,'buy_twitter']); 
Route::get('/buy_snapchat',[MyController::class,'buy_snapchat']); 
Route::get('/buy_edumail',[MyController::class,'buy_edumail']); 
Route::get('/buy_tinder',[MyController::class,'buy_tinder']); 
Route::get('/buy_pinterest',[MyController::class,'buy_pinterest']); 
Route::get('/buy_quora',[MyController::class,'buy_quora']); 
Route::get('/buy_github',[MyController::class,'buy_github']); 
Route::get('/buy_ticketmaster',[MyController::class,'buy_ticketmaster']); 
Route::get('/buy_outlook',[MyController::class,'buy_outlook']);
Route::get('/buy_voice',[MyController::class,'buy_voice']);
Route::get('/buy_naver',[MyController::class,'buy_naver']);
Route::get('/buy_discord',[MyController::class,'buy_discord']);
Route::get('/buy_review',[MyController::class,'buy_review']);
Route::get('/buy_binance',[MyController::class,'buy_binance']);
Route::get('/buy_medium',[MyController::class,'buy_medium']);
Route::get('/buy_wise',[MyController::class,'buy_wise']);
Route::get('/buy_coinbase',[MyController::class,'buy_coinbase']);
Route::get('/buy_paypal',[MyController::class,'buy_paypal']);
Route::get('/buy_payoneer',[MyController::class,'buy_payoneer']);
Route::get('/buy_relay',[MyController::class,'buy_relay']);
Route::get('/buy_stake',[MyController::class,'buy_stake']);
Route::get('/buy_ebay',[MyController::class,'buy_ebay']);
Route::get('/buy_paxful',[MyController::class,'buy_paxful']);
Route::get('/buy_airbnb',[MyController::class,'buy_airbnb']);
Route::get('/buy_aliexpress',[MyController::class,'buy_aliexpress']);
Route::get('/buy_googleAdds',[MyController::class,'buy_googleAdds']);
Route::get('/buy_console',[MyController::class,'buy_console']);
Route::get('/buy_twitch',[MyController::class,'buy_twitch']);
Route::get('/buy_taboola',[MyController::class,'buy_taboola']);
Route::get('/buy_apple',[MyController::class,'buy_apple']);
Route::get('/buy_nextdoor',[MyController::class,'buy_nextdoor']);
Route::get('/buy_bereal',[MyController::class,'buy_bereal']);
Route::get('/buy_crunchyroll',[MyController::class,'buy_crunchyroll']);

Route::get('/about_us',[MyController::class,'about_us']);
Route::get('/contact_us',[MyController::class,'contact_us']);





// __________________________________________________________ product price

// _______________________________ gmail price
Route::get('gmail_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/gmail_price')->with($data);
});
// _______________________________ yahoo price
Route::get('yahoo_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/yahoo_price')->with($data);
});
// _______________________________ linkedin price
Route::get('linkedin_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/linkedin_price')->with($data);
});
// _______________________________ facebook price
Route::get('facebook_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/facebook_price')->with($data);
});
// _______________________________ twitter price
Route::get('twitter_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/twitter_price')->with($data);
});
// _______________________________ snapchat price
Route::get('snapchat_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/snapchat_price')->with($data);
});
// _______________________________ edumail price
Route::get('edumail_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/edumail_price')->with($data);
});
// _______________________________ pinterest price
Route::get('pinterest_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/pinterest_price')->with($data);
});
// _______________________________ tinder price
Route::get('tinder_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/tinder_price')->with($data);
});
// _______________________________ quora price
Route::get('quora_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/quora_price')->with($data);
});
// _______________________________ github price
Route::get('github_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/github_price')->with($data);
});
// _______________________________ ticketmaster price
Route::get('ticketmaster_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/ticketmaster_price')->with($data);
});
// _______________________________ outlook price
Route::get('outlook_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/outlook_price')->with($data);
});
// _______________________________ voice price
Route::get('voice_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/voice_price')->with($data);
});
// _______________________________ naver price
Route::get('naver_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/naver_price')->with($data);
});
// _______________________________ discord price
Route::get('discord_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/discord_price')->with($data);
});
// _______________________________ review price
Route::get('review_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/review_price')->with($data);
});
// _______________________________ binance price
Route::get('binance_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/binance_price')->with($data);
});
// _______________________________ medium price
Route::get('medium_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/medium_price')->with($data);
});
// _______________________________ wise price
Route::get('wise_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/wise_price')->with($data);
});
// _______________________________ coinbase price
Route::get('coinbase_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/coinbase_price')->with($data);
});
// _______________________________ paypal price
Route::get('paypal_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/paypal_price')->with($data);
});
// _______________________________ payoneer price
Route::get('payoneer_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/payoneer_price')->with($data);
});
// _______________________________ relay price
Route::get('relay_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/relay_price')->with($data);
});
// _______________________________ stake price
Route::get('stake_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/stake_price')->with($data);
});
// _______________________________ stake price
Route::get('ebay_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/ebay_price')->with($data);
});
// _______________________________ paxful price
Route::get('paxful_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/paxful_price')->with($data);
});
// _______________________________ airbnb price
Route::get('airbnb_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/airbnb_price')->with($data);
});
// _______________________________ aliexpress price
Route::get('aliexpress_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/aliexpress_price')->with($data);
});
// _______________________________ google adds price
Route::get('googleAdds_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/googleAdds_price')->with($data);
});
// _______________________________ console price
Route::get('console_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/console_price')->with($data);
});
// _______________________________ twitch price
Route::get('twitch_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/twitch_price')->with($data);
});
// _______________________________ taboola price
Route::get('taboola_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/taboola_price')->with($data);
});
// _______________________________ apple developer price
Route::get('apple_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/apple_price')->with($data);
});
// _______________________________ nextdoor price
Route::get('nextdoor_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/nextdoor_price')->with($data);
});
// _______________________________ buy_bereal price
Route::get('bereal_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/bereal_price')->with($data);
});
// _______________________________ buy_crunchyroll price
Route::get('crunchyroll_price/{qty}/{name}/{pack}/{xprice}/{price}',function($qty,$name,$pack,$xprice,$price){
    $data = compact('qty','name','pack','xprice','price');
    return view('/products/pro_desc/crunchyroll_price')->with($data);
});





// _______________________________ checkout
Route::get('checkout',function(){
    return view('products/pro_desc/checkout/checkout');
});




// _______________________________ session data
Route::get('all_cart_data',function(Request $req){
    // return view('/products/pro_desc/checkout/checkout')->with($sess_data);
    // print_r(session()->get('1  Custom Gmail Accounts'));
    // echo "<pre>";
    // print_r(session()->get('1000  Gmail Accounts'));
    // print_r(session()->get('100  Gmail Accounts'));
    echo "<pre>";
    print_r(session()->all());
    echo "</pre>";
    // foreach ($all_item as $item){
        // }
        // echo "</pre>";
        // print_r(session()->get());
        // print_r(session()->get('500  Gmail Accounts'));
        // print_r(session()->get('product')[0]);
        
        // foreach(Session::all() as $key => $obj):
        //     if($key!=='_token' && $key!=='_flash' && $key!='_previous'){
        //         echo "<pre>";
        //         echo $key . ": ";
        //         print_r($obj);
        //         echo "<pre>";
        //     }
        // endforeach;

    }); 

    Route::get('packages_user_cart_data',function(Request $req){
        $quantity = request('quantity'); 
        $pro_name = request('pro_name'); 
        $price = request('price'); 
        $item = $quantity.' '.$pro_name;

        session()->put($item,$price);
        return redirect('checkout');
}); 


Route::get('user_cart_data/{qty}/{name}/{price}',function(Request $req,$qty,$name,$price){
    $item = $qty.' '.$name;
    $price = $price;

    $req->session()->put($item,$price);
    return redirect('checkout');
}); 

Route::get('/your_cart',function(){
    return redirect('checkout');
}); 







Route::get('destroy_user_cart_data/{name}',function($name){
    session()->forget($name);
    return redirect('checkout');
});

Route::get('destroy',function(){
    session()->forget('product name:');
    return redirect('all_cart_data');
}); 
Route::get('flash',function(){
    Session::flush();
    return redirect('all_cart_data');
}); 