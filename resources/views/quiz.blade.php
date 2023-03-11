@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Quiz</p> -->
    
<form action="/result" method="POST"> 
@csrf
    <div class="container p-4 my-4">
        <div class="row question-box p-5 rounded-3 border border-dark shadow-lg"> 
            <div class="col">
                <label for="username"><h1 class="fw-bold px-4 py-3">Your name</h1></label>
                <div class="question-answer">
                    <input name="username" type="text" id="username" required>
                </div>
            </div>
        </div>
    </div>
    @foreach($questions as $question)
        <div class="container p-4 my-4">
            <div class="row question-box p-5 rounded-3 border border-dark shadow-lg"> 
                <div class="col">
                    <h1 class="fw-bold px-4 py-3">{{ $loop->index + 1 }}. {{ $question['question'] }}</h1>
                    <div class="question-answer">
                        <input value="{{ $question['answer_a'] }}" name="question_{{ $question['id'] }}" type="radio" id="question{{ $loop->index }}-a" required>
                        <label class="ms-4" for="question{{ $loop->index }}-a">{{ $question['answer_a'] }}</label>
                    </div>

                    <div class="question-answer">
                        <input value="{{ $question['answer_b'] }}" name="question_{{ $question['id'] }}" type="radio" id="question{{ $loop->index }}-b">
                        <label class="ms-4" for="question{{ $loop->index }}-b">{{ $question['answer_b'] }}</label>
                    </div>

                    <div class="question-answer">
                        <input value="{{ $question['answer_c'] }}" name="question_{{ $question['id'] }}" type="radio" id="question{{ $loop->index }}-c">
                        <label class="ms-4" for="question{{ $loop->index }}-c">{{ $question['answer_c'] }}</label>
                    </div>

                    <div class="question-answer">
                        <input value="{{ $question['answer_d'] }}" name="question_{{ $question['id'] }}" type="radio" id="question{{ $loop->index }}-d">
                        <label class="ms-4" for="question{{ $loop->index }}-d">{{ $question['answer_d'] }}</label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="text-center pb-5">
        <input class="btn btn-lg btn-submit px-4 ms-auto me-auto" type="submit" value="Check answers">
    </div>
</form>

@endsection
