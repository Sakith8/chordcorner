<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $total_product=product::all()->count();
            $total_order=order::all()->count();
            $total_user=User::all()->count();
            $order=order::all();
            $total_revenue=0;

            foreach ($order as $order){
                $total_revenue= $total_revenue + $order->price;
            }

            $total_delivered=order::where('delivery_status','=','delivered')->get()->count();

            $total_processing=order::where('delivery_status','=','processing')->get()->count();

            return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_processing'));
        } else {
            return view('home.home');
        }

    }

    public function shop()
    {

        $categories = category::all();
        $products = product::all();

        return view('home.shop', compact('categories', 'products'));

    }

    public function contact()
    {

        return view('home.contact');
    }


    public function cart()
    {

        $id=Auth::user()->id;
        $cart = cart::where('user_id','=',$id)->get();

        return view('home.cart', compact('cart'));
    }

    public function remove_cart($id)
    {

        $cart = cart::find($id);

        // Check if the instrument exists
        if (!$cart) {
            return redirect()->route('cart')->with('error', 'Instrument not found.');
        }

        // Delete the instrument from the database
        $cart->delete();

        return redirect()->route('cart')->with('success', 'Instrument deleted successfully.');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('home.profile', compact('user'));
    }


    public function service()
    {

        return view('home.service');
    }

    public function instrument()
    {

        return view('home.instrument');
    }

    public function deleteInstrument($id)
    {
        // Find the instrument by its ID
        $instrument = product::find($id);

        // Check if the instrument exists
        if (!$instrument) {
            return redirect()->route('shop')->with('error', 'Instrument not found.');
        }

        // Delete the instrument from the database
        $instrument->delete();

        return redirect()->route('shop')->with('success', 'Instrument deleted successfully.');
    }


    public function addinstrument(Request $request)
    {

        $product = new product;

        $product->IntrumentCategory = $request->instrucat;
        $product->IntrumentName = $request->instruname;
        $product->IntrumentPrice = $request->instruprice;
        $product->IntrumentImage = $request->img;
        $image = $request->file('img');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('image'), $imageName);
        $product->IntrumentImage = $imageName;

        $product->save();
        $request->validate([
            'instruname' => 'required',
            'instruprice' => 'required',
            'instrucat' => 'required',
            'instruimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        return redirect()->route('shop')->with('success', 'Instrument added successfully.');
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = product::find($id);

            $cart = new cart;

            $cart->user_id = $user->id;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone_no;
            $cart->address = $user->address;


            $cart->title = $product->title;
            $cart->quantity = $product->quantity;
            $cart->price = $product->price;
            $cart->image = $product->image;

            $cart->save();
            return redirect()->back()->with('success', 'Product added to cart successfully');


        }
    }
    public function cash_order()
    {

        $user = Auth::user();
        $userid=$user->id;

        $data=cart::where('user_id','=',$userid)->get();

foreach ($data as $data){
        $order = new order;
        $order->user_id = $data->id;
        $order->name = $data->name;
        $order->email = $data->email;
        $order->phone =$data->phone_no;
        $order->address = $data->address;

    $order->title = $data->title;
    $order->quantity = $data->quantity;
    $order->price = $data->price;
    $order->image = $data->image;

    $order->payment_status = 'cash on delivery';
    $order->delivery_status = 'processing';


    $order->save();

    $cart_id=$data->id  ;
    $cart=cart::find($cart_id);
    $cart->delete();

    }

return redirect()->back()->with('message', 'Order placed successfully');

    }

    public function stripe($total)
    {
        return view('home.stripe',compact('total'));
    }

    public function stripePost(Request $request, $total)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => $total * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        $user = Auth::user();
        $userid=$user->id;

        $data=cart::where('user_id','=',$userid)->get();

        foreach ($data as $data) {
            $order = new order;
            $order->user_id = $data->id;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone_no;
            $order->address = $data->address;

            $order->title = $data->title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;

            $order->payment_status = 'paid';
            $order->delivery_status = 'processing';


            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');

        return back();
    }

}




