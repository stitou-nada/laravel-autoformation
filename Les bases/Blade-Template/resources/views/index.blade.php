@include('title')

{{-- if and else --}}

id = {{$name=1}}
@if ($name == 1)
    <h2>hello nada</h2>
@else
   <h2> NULL</h2> 
@endif