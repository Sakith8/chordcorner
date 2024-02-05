<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="category">

                @if(session()->get('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <h1>Add Product</h1>

                <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <br>
                    <div class="div-product">
                        <label class="label-product">Product Title</label>
                        <input class="text_color" type="text" name="title"
                               placeholder="Title" required="" value="{{$product->title}}">
                    </div>

                    <div class="div-product">
                        <label class="label-product">Product Description</label>
                        <input class="text_color" type="text" name="description"
                               placeholder="Description" required="" value="{{$product->description}}">
                    </div>


                    <div class="div-product">
                        <label class="label-product">Product Category</label>
                        <select class="text_color" name="category" required="">
                            <option value="{{$product->category}}" selected="">{{$product->title}}</option>
                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="div-product">
                        <label class="label-product">Product Quantity</label>
                        <input class="text_color" type="text" name="quantity"
                               min="0" placeholder="Quantity" required="" value="{{$product->quantity}}">
                    </div>

                    <div class="div-product">
                        <label class="label-product">Product Price</label>
                        <input class="text_color" type="text" name="price"
                               placeholder="Price" required="" value="{{$product->price}}">
                    </div>


                    <div class="div-product">
                        <label class="label-product">Current Product Image</label>
                        <img height="100" width="100"
                             src="/product/{{$product->image}}">
                    </div>


                    <div class="div-product">
                        <label class="label-product">Change Product Image</label>
                        <input type="file" name="image" value="" class="text_color">
                    </div>

                    <div>

                        <input type="submit" value="Update Product" class="btn1">
                    </div>


                </form>
            </div>


        </div>
    </div>

@include('admin.script')
</body>
</html>
