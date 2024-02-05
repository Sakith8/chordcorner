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
        <div class="content-wrapper">

            @if(session()->get('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="category">
            <h2>Add Category</h2>

                <form action="{{url('add_category')}}" method="post">
                    @csrf
                    <input type="text" class="search-cat" name="category" placeholder="Category Name"><br><br>
                    <input type="submit" class="btn1" name="submit" value="Add Category">

                </form>


            </div>
            <table class="cat-table">
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

                @foreach($data as $data)
                <tr class="table-row1">
                    <td>{{$data->category_name}}</td>
                    <td>
                        <a href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Delete</a>


                </tr>
                @endforeach
            </table>

        </div>
    </div>

@include('admin.script')
</body>
</html>

