<table>
    <thead>
        <td>SN</td>
        <td>Name</td>
        <td>title</td>
        <td>desc</td>
        <td>Rating</td>
    </thead>
    <tbody>
        @foreach ($data->rating as $item)
            
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->desc }}</td>
            <td>{{ $item->rating }}</td>
        </tr>
        @endforeach

    </tbody>
</table>