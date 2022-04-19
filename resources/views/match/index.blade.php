@extends('app')

@section('content')

<div class="container m-auto  p-3">
   <div class="d-flex flex-column justify-content-center align-items-center">
      <form action="{{ route('match-strings.store') }}" method="post">
      @csrf
         <div class="row">
            <!-- input 1 -->
            <div class="col-6">
               <div class="form-outline mb-4">
                  <input type="text" name="match" class="form-control" autocomplete="off" />
                  <label class="form-label" for="form2Example1">Input 1</label>
               </div>
            </div>

            <!-- input 2 -->
            <div class="col-6">
               <div class="form-outline mb-4">
                  <input type="text" name="text" class="form-control" autocomplete="off" />
                  <label class="form-label" for="form2Example2">Input 2</label>
               </div>
            </div>
            <!-- Submit button -->
            <div class="col-6">
               <button type="submit" class="btn btn-primary btn-block mb-4">Hitung</button>
            </div>
         </div>
      </form>
      
      
      <div class="result align-self-start">

         @if($data)
         <p>Inputan 1 : {{ $data->match }}</p>
         <p>Inputan 2 : {{ $data->text }}</p>
         <p>Hasil : {{ $data->total }}%</p>
         @endif

      </div>

   </div>

</div>




   
@endsection