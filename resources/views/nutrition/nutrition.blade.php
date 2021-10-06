@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Your nutrition plans</h1>
            <hr>
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <td>
                            <a href="/">
                                <p>Sample nutrition</p>
                                <p>Sept. 28-2021</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/">
                                <p>Sample nutrition</p>
                                <p>Sept. 28-2021</p>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/">
                                <p>Sample nutrition</p>
                                <p>Sept. 28-2021</p>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
            
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="/workout/add" role="button">Add NUtrition plan</a>
        </div>
    </div>
</div>
@endsection