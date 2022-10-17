@forelse ($person as $value)
    <li>{{$value->name}}</li>
@empty

@endforelse