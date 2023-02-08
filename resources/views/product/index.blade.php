<a href="{{ route('product.create') }}">Create Product</a>
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
            <td><a href="{{ route('product.show',$dat->id) }}">view rating</a></td>
            <td>
                <form action="{{ route('product.destroy',$dat->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>