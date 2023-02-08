<form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    name:<input type="text" name="name"><br>
    category:<select name="category">
        <option>Select</option>
        @foreach ($data as $item)
        <option value="{{ $item->id }}">{{ $item->name }} </option>
        @endforeach
    </select><br>
    specification:<input type="text" name="spec"><br>
    description:<input type="text" name="desc"><br>
    image:<input type="file" name="image"><br>
    <input type="submit">
</form>