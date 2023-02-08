<form action="{{ route('category.store') }}" method="POST">
    @csrf
    Name: <input type="text"  name="name"><br>
    Description:<input type="text" name="desc"><br>
    <input type="submit">
</form>