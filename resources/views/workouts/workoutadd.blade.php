@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Workout</h1>
            <hr>
            <table class="table table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">
                            <p>Arm</p>
                            <p>Monday, Tuesdat, Friday</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="container text-center">
                                <p>
                                    <a href="/workout/day/add">Add exercises to this workout day</a>
                                </p>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>


        </div>
        <div class="col-md-4">
            <p>
                Steps

                Add training days
                Add workout sets to days
                Set the repetitions for each set

            </p>
        </div>
    </div>
</div>
@endsection