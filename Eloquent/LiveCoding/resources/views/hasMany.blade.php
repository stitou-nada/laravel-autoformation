
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>prenom</th>
            <th>email</th>
            <th>promotion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $value)

        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Name}}</td>
            <td>{{$value->Prenom}}</td>
            <td>{{$value->Email}}</td>
            <td>{{$value->promotion->name}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
