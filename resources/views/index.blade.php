@extends('layouts.main')
@section('content')
 <div class="container-lg" style="margin: 0 auto ;">
 @if(Session::has('message'))
 <p class="alert{{Session::get('alert-class','alert-info')}}">{{Session::get('message')}}</p>
@endif
 <div class="row mt-5">
    @foreach($departments as $dept)

    <div class="col-lg-4 col-md4 col-sm-12 text-center mb-3  "> 
        <div class="card" style="width: 18rem;">
        <img src="{{$dept->image}}" style="width:200px; margin:0 auto">
        <div class="card-body">
            <div class="card-title">{{$dept->name}}</div>
            <div class="card-text">{{$dept->description}}</div>

            <form action="{{route('showAppointments')}}" method="POST" class="mt-2">
                @csrf
                <input type="text" name="department_id" value="{{$dept->id}}" style="display:none">
                <input type="submit" value="Show Appointment" class="btn btn-primary">

            </form>
        </div>
        </div>
    </div>
    @endforeach

 </div>
</div>
 



@endsection