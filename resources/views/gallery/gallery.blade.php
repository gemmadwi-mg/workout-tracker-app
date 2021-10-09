@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Gallery</h1>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <img src="img/img1" alt="">
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="/gallery/add" role="button">Add Gallery</a>
        </div>
    </div>
</div>
@endsection