
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact_us')}}" >Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('passing_data')}}">Add User</a>
      </li>
    </ul>
  </div>
</nav>

<div class="conatiner mt-2">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <label for="" style="font-size:40px;">CONTACT US</label>
               
            <form action="{{route('add_contact')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                       CONTACT US
                    </div>
                    <div class="card-body">
                 
                        <div class="form-group">
                            <label for="exampleInputEmail1">NAME</label>
                                <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name" value="{{old('name')}}">
                            <div class="danger text-danger">{{$errors->first('name')}}</div>
                        </div>
                    
                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                                <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="" name="email" value="{{old('email')}}">
                            <div class="danger text-danger" >{{$errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Message</label>
                                <textarea name="message" id="" cols="60" rows="10" class="form-control"></textarea>
                                <div class="danger text-danger" >{{$errors->first('message')}}</div>
                        </div>
                             <button type="submit" class="btn btn-primary">
                                 Submit
                            </button>
                    </div>
            </form>
         
           
                </div>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>

    

<hr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>






    {{-- @if(! session()->has('message')) -->
   @endif --}}



