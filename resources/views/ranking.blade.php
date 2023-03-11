@extends('layouts.layout')

@section('content')
<!-- <p class="header-text text-center mt-4">Quiz</p> -->
<div class="container p-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Username</td>
                <td>Score</td>
                <td>Max score</td>
                <td>Score [%]</td>
            </tr>
        </thead>
        @foreach($ranking as $r)
                <tr>
                    <td>{{ $r['username'] }}</td>
                    <td>{{ $r['score'] }}</td>
                    <td>{{ $r['max_score'] }}</td>
                    <td>{{ round(($r['score'] / $r['max_score']) * 100, 2) }} %</td>
                </tr>
        @endforeach
    </table>
</div>

@endsection
