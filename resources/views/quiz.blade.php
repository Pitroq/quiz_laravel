@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Quiz</p> -->
    
<form action="{{ route('quiz.result') }}" method="POST"> 
@csrf
    @foreach($questions as $question)
        <div class="container p-5 my-5">
            <div class="row question-box p-5 rounded-3 border border-dark shadow-lg"> 
                <div class="col">
                    <h1 class="fw-bold px-4 py-3">{{ $loop->index + 1 }}. {{ $question['question'] }}</h1>
                    <p class="lead py-3 fs-3">
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

                    </p>
                </div>
            </div>
        </div>
    @endforeach
    <input type="submit" value="Check answers">
</form>

@endsection
