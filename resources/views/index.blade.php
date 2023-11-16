<h1>All the shoes</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>prix</th>
    </tr>
    @foreach($shoes as $shoe)
        <tr>
        <td>{{ $shoe->id }}</td>
        <td>{{ $shoe->name }}</td>
            <td>{{ $shoe->price }}</td>
            <td>{{ $shoe->brand }}</td>
            <td>{{ $shoe->fabrication }}</td>
            <td>{{ $shoe->color }}</td>
        </tr>
    @endforeach
</table>
