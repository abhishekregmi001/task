Product name:{{ $data->name }}<br>
description:{{ $data->detail->description }}<br>
specification:{{ $data->detail->description }}<br>
image:<img src="{{ asset('uploads/'.$data->detail->image) }}" >

<form method="post" action="{{ route('rating.store') }}">
    @csrf
    Name:<input type="text" name="name"><br>
    Title:<input type="text" name="title"><br>
    Description:<input type="text" name="desc"><br>
    Rating:<input type="range" min="1" max="5" value="4" name="rating"><br>
    <input type="hidden" name="product" value="{{ $data->id }}">
    <input type="submit">
</form>