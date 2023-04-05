@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>New quiz created successfully!</p>
        </div>
    @endif
    <h1>List of Quizzes</h1>
    <ul>
    @foreach($quizzes as $quiz)
            <li><a href="/quiz/{{ $quiz->id }}">{{ $quiz->name }}</a></li>
    @endforeach
    </ul>
    <a class="btn btn-primary" href="{{ route('quiz.create') }}">Create New Quiz</a>
@endsection
