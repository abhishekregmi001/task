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
            <td><a href="{{ route('createchild',$dat->id) }}"> Add Child</a></td>
            <td><a href="{{ route('category.show',$dat->id) }}"> View Child</a></td>
            <td>
                <form action="{{ route('category.destroy',$dat->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
            </td>
        </tr>
        @endforeach 

    </tbody>
</table>