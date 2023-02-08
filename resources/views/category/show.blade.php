<a href="{{ route('category.create') }}">Create Category</a>
<br>
<table>
    <thead>
        <td>SN</td>
        <td>Name</td>
    </thead>
    <tbody>
        @foreach ($data as $dat)
        <tr>
            <td>{{ $dat->id }}</td>
            <td>{{ $dat->name }}</td>
            @if($dat->is_first_child == 1)
            <td><a href="{{ route('createchild',$dat->id) }}"> Add Sub Child</a></td>
            <td><a href="{{ route('category.show',$dat->id) }}"> View Sub Child</a></td>
            <td>
                <form action="{{ route('category.destroy',$dat->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
            </td>
            @endif

        </tr>
        @endforeach

    </tbody>
</table>