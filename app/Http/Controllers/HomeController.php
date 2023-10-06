<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;  



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
        return view('home');
    }

    public function shop()
    {
     
        $instruments = Product::all(); // Replace 'Product' with your actual model name

        return view('shop', compact('instruments'));
       
     
    }

    public function contact()
    {
        
        return view('contact');
    }


    public function cart()
    {
        
        return view('cart');
    }


    public function service()
    {
        
        return view('service');
    }

    public function instrument()
    {
        
        return view('instrument');
    }

    public function deleteInstrument($id)
{
    // Find the instrument by its ID
    $instrument = Product::find($id);

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


        $product= new product;

        $product->IntrumentCategory=$request->instrucat;
        $product->IntrumentName=$request->instruname;   
        $product->IntrumentPrice=$request->instruprice;
        $product->IntrumentImage=$request->img;
        $image = $request->file('img');
        $imageName = time().'.'.$image->extension();    
        $image->move(public_path('image'),$imageName); 
        $product->IntrumentImage=$imageName;    
        

        $product->save();
        $request->validate([
            'instruname' => 'required',
            'instruprice' => 'required',
            'instrucat' => 'required',
            'instruimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        

        
        return redirect()->route('shop')->with('success', 'Instrument added successfully.');
    }

    



public function addToCart(Request $request)
{
    $productId = $request->input('product_id'); // Assuming 'product_id' is the identifier for the product
    $product = product::find($productId);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Store the product in the cart (you can use sessions, a database, or any other storage method)
    $cart = session()->get('cart', []);
    $cart[] = $product;
    session()->put('cart', $cart);

    return redirect()->route('cart')->with('success', 'Product added to cart.');
}





}



