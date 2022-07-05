<div>
    <form action="substring" method="post">
        @csrf
        <input type="text" name="string" >
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @if(Session::has('rans'))
    {{ $rans }}
    @endif
</div>