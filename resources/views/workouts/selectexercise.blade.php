@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Push Up</h1>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Reps</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-md-4">


        </div>
    </div>
</div>
@endsection