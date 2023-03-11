@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">One Question</p> -->
<form action="/result" method="POST"> 
@csrf
    <div class="container p-5 my-5">
        <div class="row question-box p-5 rounded-3 border border-dark shadow-lg">
            <div class="col">
                <h1 class="fw-bold px-4 py-3">{{ $question['question'] }}</h1>
                <div class="question-answer">
                    <input value="{{ $question['answer_a'] }}" name="question_{{ $question['id'] }}" type="radio" id="question-a" required>
                    <label class="ms-4" for="question-a">{{ $question['answer_a'] }}</label>
                </div>

                <div class="question-answer">
                    <input value="{{ $question['answer_b'] }}" name="question_{{ $question['id'] }}" type="radio" id="question-b">
                    <label class="ms-4" for="question-b">{{ $question['answer_b'] }}</label>
                </div>

                <div class="question-answer">
                    <input value="{{ $question['answer_c'] }}" name="question_{{ $question['id'] }}" type="radio" id="question-c">
                    <label class="ms-4" for="question-c">{{ $question['answer_c'] }}</label>
                </div>

                <div class="question-answer">
                    <input value="{{ $question['answer_d'] }}" name="question_{{ $question['id'] }}" type="radio" id="question-d">
                    <label class="ms-4" for="question-d">{{ $question['answer_d'] }}</label>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pb-5">
        <input class="btn btn-lg btn-submit px-4 ms-auto me-auto" type="submit" value="Check answers">
    </div>
</form>
@endsection