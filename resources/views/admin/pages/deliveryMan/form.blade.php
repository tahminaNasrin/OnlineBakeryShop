<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    @extends('admin.master')
    @section('content')

    <div class="container bg-light col-md-5 pd-4 py-3 card shadow">
        <form action="{{route('deliveryMan.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlSelect1">Name</label>
                <input type="string" class="form-control" name="name" id="exampleFormControlSelect1" placeholder="Enter Delivery Man Name:" required>
                </input>
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlSelect1" placeholder="Enter Price: " required>
                </input>
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Mobile No</label>
                <input type="numeric" class="form-control" name="mobile_no" id="exampleFormControlSelect1" placeholder="Enter Mobile No: " required>
                </input>
                @error('mobile_no')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Area</label>
                <input type="text" class="form-control" name="area" id="exampleFormControlSelect1" placeholder="Enter Area: ">
                </input>
                @error('area')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlSelect1" placeholder="Choose Product Image: ">
                </input>
            </div>


            <button class="btn btn-primary">Submit</button>

        </form>
    </div>
    @endsection
</body>

</html>