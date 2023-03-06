@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Home</p> -->
    <div class="container p-5 my-5">
        <div class="row home-info p-5 rounded-3 border border-dark shadow-lg"> 
            <div class="col-8">
                <h1 class="display-5 fw-bold px-4 py-3">Programming quiz</h1>
                <p class="lead py-3 fs-3">
                    You think you know how to code? 
                    Take our 10-question quiz to see how much you know about the programming! 
                    You can be first in ranking!
                </p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="quiz" type="button" class="btn btn-primary btn-lg px-4 me-2">Take a quiz</a>
                <a href="ranking" type="button" class="btn btn-outline-light btn-lg px-4">Show ranking</a>
            </div>
        </div>
    </div>
@endsection