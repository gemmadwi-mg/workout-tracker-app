@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Add</h1>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </form>

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