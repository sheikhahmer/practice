<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="card mt-5">
                    <h5 class="card-header">Programme</h5>
                    <div class="card-body">
                        <div>
                            <input type="text" placeholder="Enter here..." name="grade">
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Go</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
