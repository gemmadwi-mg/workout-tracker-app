@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <h1>Exercise</h1>
        <hr>
        <div class="row mt-3">
            <div class="col ">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400/?exercise" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Push-Up</h5>
                        <p class="card-text">Get into plank position </p>
                        <a href="/workout/exercises/add/overview" class="btn btn-primary w-100">Select Exercise</a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400/?exercise" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Plank</h5>
                        <p class="card-text">Get into plank position </p>
                        <a href="#" class="btn btn-primary w-100">Select Exercise</a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400/?exercise" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Elbow Plank</h5>
                        <p class="card-text">Get into plank position </p>
                        <a href="#" class="btn btn-primary w-100">Select Exercise</a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400/?exercise" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Squats</h5>
                        <p class="card-text">Get into plank position </p>
                        <a href="#" class="btn btn-primary w-100">Select Exercise</a>
                    </div>
                </div>
            </div>
           
        
           
        </div>

    </div>
</div>
@endsection