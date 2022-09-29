
@extends('layouts.main')
@section('content')
<div class="container-lg" style="margin: 0 auto ;">
<h2 class="text-center mt-2 mb-2" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:blueviolet">My Bookings</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Booking Id</th>
            <th scope="col">Appointment Id</th>
            <th scope="col">Department Name</th>
            <th scope="col">Appointment Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <th scope="row">{{$booking->id}}</th>
            <td>{{$booking->appointment_id}}</td>
            <td>{{$booking->department_name}}</td>
            <td>{{$booking->appointment_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection