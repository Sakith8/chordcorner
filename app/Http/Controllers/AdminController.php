<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\order;
use App\Models\product;


class AdminController extends Controller
{
    public function view_category()
    {

        $data = category::all();
        return view('admin.category', compact('data'));

    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');

    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_product()
    {
        $category = category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
//        $product->image = $request->image;
//
//        $product->save();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move(public_path('product'), $imagename);

        $product->image = $imagename;
        $product->save();

        return redirect()->back()->with('message', 'Product added Successfully');

    }

    public function show_product()
    {

        $product = product::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function update_product($id)
    {
        $product = product::find($id);
        $category = category::all();
        return view('admin.update_product', compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product = product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $image = $request->image;

        if ($image)
        {


            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move(public_path('product'), $imagename);

            $product->image = $imagename;
        }

        $product->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');

    }

    public function order()
    {
       $order=order::all();
        return view('admin.order', compact('order'));
    }


}
