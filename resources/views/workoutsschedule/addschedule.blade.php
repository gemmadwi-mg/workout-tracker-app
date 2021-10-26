@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Create Schedule </h1>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Start Date</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary w-100">save</button>
            </form>

        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
@endsection