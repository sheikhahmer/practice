
<!DOCTYPE html>
<html>
<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="input-group">
  <div class="form-outline">
      
  <form action="{{ route('index') }}" method="GET">
      <div>
        <select name="title">
          <option value="">Select One</option>
          @foreach($titles as $data)
             <option value="{{$data->title}}">{{$data->title}}</option>
        </sellect>
        @endforeach
      </div>
    <input type="text" value="{{  isset($_GET['search']) ?  $_GET['search'] : ''  }}" name="search" />
    <button type="submit">Search</button>
</form>
  </div>
 
</div>
    </div>
    <div class="col-md-4"></div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @if($posts->isNotEmpty())
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
    </tr>
  @endforeach
  @else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
  </tbody>
</table>
 {!! $posts->links() !!} 
</body>
</html>