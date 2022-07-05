<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('login')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact_us')}}" >Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('passing_data')}}">Add User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>



<!-- <h1 class=" ml-5 mt-5">passing_data</h1>
<hr>

@foreach($data as $customer )
<li class="ml-5">{{$customer}}</li>
@endforeach
<hr> -->

<form method="post" action="{{url('/add')}}">
    @csrf
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-4"></div>
                <div class="col-md-4"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">NAME</label>
                        <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name" value="{{old('name')}}">
                        <div class="danger text-danger">{{$errors->first('name')}}</div>
                    </div>
                
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">CNIC</label>
                        <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="cnic" value="{{old('cnic')}}">
                        <div class="danger text-danger" >{{$errors->first('cnic')}}</div>
                    </div>
            
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">ADDRESS</label>
                        <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="address" value="{{old('address')}}">
                        <div class="danger text-danger">{{$errors->first('address')}}</div>
                    </div>
                
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">CONTACT NO</label>
                        <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="contact_no" value="{{old('conatct_no')}}">
                        <div class="danger text-danger">{{$errors->first('contact_no')}}</div>
                    </div>

                    <div class="form-group">
                        <label>COMPANY</label>
                        <select name="status"  class="form-control">
                          <option value="" >SELECT</option>
                          <option value="" >Hillal</option>
                          <option value="" >National</option>
                        </select>
                    </div>

            
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-5"></div>
        </div>
       
    </div>
</form>
<hr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>







   




