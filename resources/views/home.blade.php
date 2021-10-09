@extends('layouts.main')

@section('container')
<div class="container">
        <div class="row">
                <div class="col-lg-8">
                        <h1>Dashboard</h1>
                        <hr>
                </div>
        </div>
        <div class="row">
                <div class="col">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                        <div class="card h-100">
                                                <div class="card-body">
                                                        <h4>Workout</h4>
                                                        <hr>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Monday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Tuesday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Wednesday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Thursday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Friday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Saturday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-6">
                                                                        <p>Sunday</p>
                                                                </div>
                                                                <div class="col-6">
                                                                        <p>Rest Day</p>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="card-footer">
                                                       
                                                </div>
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="card h-100">
                                          
                                                <div class="card-body">
                                                       <h4>Nutrition Plan</h4>
                                                       <hr>
                                                       <div class="row">
                                                                <div class="col-8">
                                                                        <p>Energy</p>
                                                                </div>
                                                                <div class="col-4">
                                                                        <p>0 kcal</p>
                                                                </div>
                                                        </div>
                                                       <div class="row">
                                                                <div class="col-8">
                                                                        <p>Protein</p>
                                                                </div>
                                                                <div class="col-4">
                                                                        <p>0 g</p>
                                                                </div>
                                                        </div>
                                                       <div class="row">
                                                                <div class="col-8">
                                                                        <p>Carbohydrates</p>
                                                                </div>
                                                                <div class="col-4">
                                                                        <p>0 g</p>
                                                                </div>
                                                        </div>
                                                       <div class="row">
                                                                <div class="col-8">
                                                                        <p>Fat</p>
                                                                </div>
                                                                <div class="col-4">
                                                                        <p>0 g</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="card-footer">
                                                        
                                                </div>
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="card h-100">

                                                <div class="card-body">
                                                        <h4>Weight</h4>
                                                        <hr>
                                                        <p>Your current weight is : 54 kg</p>
                                                </div>
                                                <div class="card-footer">
                                                        
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection