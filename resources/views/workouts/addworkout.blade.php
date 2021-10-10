@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Workout</h1>
            <hr>
            <div class="card">
                <div class="card-header">
                    <h1>Madame Ping</h1>
                    <h5>Monday</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <p>1</p>
                        </div>
                        <div class="col-4">
                            <img src="https://source.unsplash.com/400x400/?exercise" style="width: 200px; heigh: 300px;" >
                        </div>
                        <div class="col-7">
                            <p>Push Up</p>
                            <p>12 Reps</p>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center">

                        <a href="/workout/exercises/add">add exercise to this workout day</a>
                    </p>
                </div>
            </div>
            <p></p>
            <p class="text-center">
                <a href="/workout/day/add">add training day</a>
            </p>

        </div>
        <div class="col-md-4">


        </div>
    </div>
</div>
@endsection