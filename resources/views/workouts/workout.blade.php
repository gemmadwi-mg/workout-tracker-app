@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Your Workout</h1>
            <hr>
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <td>
                            <a href="/workout/view">
                                <p>Workout Madame ping</p>
                                <p>Oct. 9, 2021</p>
                            </a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="/workout/add" role="button">Add Workout</a>
        </div>
    </div>
</div>
@endsection