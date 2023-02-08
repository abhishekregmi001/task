
<form action="{{ route('storechild',$id) }}" method="post">
    @csrf
    Name: <input type="text"  name="name"><br>
    Description:<input type="text" name="desc"><br>
    {{-- <input type="hidden" name="id" value="{{ $id }}"> --}}
    <input type="submit">
</form>