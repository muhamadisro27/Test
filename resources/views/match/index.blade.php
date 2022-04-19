@extends('app')

@section('content')


<form action="{{ route('match-strings.store') }}" method="post">
   @csrf
   <input type="text" name="match" />
   <input type="text" name="text" />

   <button type="submit">
      Hitung
   </button>
</form>

@if($data)
<p>Inputan 1 : {{ $data->match }}</p>
<p>Inputan 2 : {{ $data->text }}</p>
<p>Jumlah kata yang muncul : {{ $data->matching }}</p>
<p>Hasil : {{ $data->total }}%</p>
@endif



   
@endsection