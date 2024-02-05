<!DOCTYPE html>
<html lang="en">
<head>
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
        <div class="content-wrapper1">
            <div class="category">

                @if(session()->get('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <h1>Add Product</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                <br>
                <div class="div-product">
                <label class="label-product">Product Title</label>
                <input class="text_color" type="text" name="title"
                       placeholder="Title" required="">
                </div>

                <div class="div-product">
                    <label class="label-product">Product Description</label>
                    <input class="text_color" type="text" name="description"
                           placeholder="Description" required="">
                </div>



                <div class="div-product">
                    <label class="label-product">Product Category</label>
                   <select class="text_color" name="category" required="">
                       <option value="" selected="">Add Category</option>
                       @foreach($category as $category)
                           <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                       @endforeach

                   </select>
                </div>

                <div class="div-product">
                    <label class="label-product">Product Quantity</label>
                    <input class="text_color" type="text" name="quantity"
                        min="0"   placeholder="Quantity" required="">
                </div>

                <div class="div-product">
                    <label class="label-product">Product Price</label>
                    <input class="text_color" type="text" name="price"
                           placeholder="Price" required="">
                </div>

                <div class="div-product">
                    <label class="label-product">Product Image</label>
                    <input type="file" name="image" class="text_color">
                </div>

                <div>

                    <input  type="submit" value="Add Product" class="btn1">
                </div>


                </form>
            </div>


        </div>
    </div>

@include('admin.script')
</body>
</html>
