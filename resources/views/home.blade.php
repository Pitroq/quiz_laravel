@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Home</p> -->
<div class="container" style="margin-top: 150px;">
    <div class="container px-5 my-5">
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
</div>
@endsection


    <!-- <div class="row justify-content-end">
        <div class="col">
            <div class="float-end me-4" style="margin-top: 150px;">
                <input type="button" class="btn btn-primary btn-lg px-4 me-2" value="Take a quiz">
                <input type="button" class="btn btn-outline-dark btn-lg px-4" value="Show ranking">
            </div>
        </div>
        <div class="col">
            <h1 class="display-5 fw-bold">Programming quiz</h1>
            <p class="col-md-8 fs-4">
            Are you a budding computer programmer? 
            Take our 10-question quiz to see how much you know about the world of coding! 
            </p>
        </div>
    </div> -->