
<table>
    <thead>
        <tr>

            <th>promotion</th>
            <th>apprenant</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($data->apprenant as $value)

        <tr>
            <td>{{$value->promotion_id}}</td>
            <td>{{$value->id}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
