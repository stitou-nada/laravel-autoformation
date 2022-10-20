<h1>Tableau ampprenant</h1>
<table>
    <thead>

        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Nom promotion</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach ($table as $value)
            
      
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->prenom}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->Name_promotion}}</td>
        </tr>
        @endforeach
    </tbody>
</table>