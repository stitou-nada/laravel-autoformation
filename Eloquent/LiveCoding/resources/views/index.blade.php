

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name </th>
            <th>prenom</th>
            <th>email</th>
            <th>promotion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->Prenom}}</td>
            <td>{{$data->Email}}</td>
            <td>{{$data->promotion->name}}</td>
        </tr>
    </tbody>
</table>
