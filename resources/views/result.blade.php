@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Result</p> -->

@foreach($questions as $question)
    <div class="container p-4 my-4">
        <div class="row question-box p-5 rounded-3 border border-dark shadow-lg"> 
            <div class="col">
                <h1 class="fw-bold px-4 py-3">{{ $loop->index + 1 }}. {{ $question['question'] }}</h1>
                @if ($question['userAnswer'] != $question['correctAnswer'])
                    <div class="question-answer">
                        <span class="ms-4">Your answer: {{ $question['userAnswer'] }}</span>
                    </div>
                    <div class="question-answer">
                        <span class="ms-4">Correct anwser: {{ $question['correctAnswer'] }}</span>
                    </div>
                    <div class="question-answer mt-3">
                        
                        <span class="ms-4" style="color: #D7263D;">
                            0 / 1
                        </span>
                    </div>
                @else
                    <div class="question-answer">
                        <span class="ms-4">Anwser: {{ $question['correctAnswer'] }}</span>
                    </div>
                    <div class="question-answer mt-3">
                        <span class="ms-4" style="color: #37FF8B;">
                            1 / 1
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach

<div class="container p-4 my-4">
    <div class="row question-box p-5 rounded-3 border border-dark shadow-lg"> 
        <div class="col text-center">
            <h1 class="fw-bold px-4 py-3">Your score: </h1>
            <div class="question-answer">
                <span class="mx-auto text-center">{{ $score }} / {{ $questionsCount }}</span>
            </div>
            <div class="question-answer">
                <span class="mx-auto text-center">{{ round(($score / $questionsCount) * 100, 2) }} %</span>
            </div>
        </div>
    </div>
</div>
<div class="text-center pb-5">
    <a class="btn btn-lg btn-submit px-4 ms-auto me-auto" href="/" type="button">I understand</a>
</div>

@endsection