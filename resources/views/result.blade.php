@extends('layouts.layout')

@section('content')
<p class="header-text text-center mt-4">Result</p>

@php
    array_map(function ($question, $userAnswer, $correctAnswer) {
        echo "1. ".     $question."<br>".$userAnswer." - ".$correctAnswer."<br><br>";
    }, $questionList, $userAnswers, $correctAnswers);
@endphp

<h1>{{ $score }}</h1>

@endsection