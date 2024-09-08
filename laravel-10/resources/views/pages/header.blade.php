<h1>Header Page</h1>
{{-- @foreach ($names as $key => $value )
    <p>{{$key}}=> {{$value}} </p>
@endforeach --}}

@forelse ($names as $key => $value )
  <p>{{$key}}=> {{$value}} </p>
@empty
  <p>No value found</p>
@endforelse