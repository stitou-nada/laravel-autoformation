@forelse ($person as $value)
    <h1>{{$value->namee}}</h1>
@empty
    
@endforelse