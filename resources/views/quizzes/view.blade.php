@extends('layouts.app')
@section('content')
    <h1>{{ $quiz[0]->name }}</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-xs-6 col-sm-6 col-md-6 p-2 m-2 rounded" id="div_a1">
            <strong>Q1: {{ $quiz[0]->q1 }}</strong>
            <div class="form-check">
                <label for="a1">Yes</label>
                <input type="radio" name="a1" id="a1" class="form-check-input" value="y"/>
            </div>
            <div class="form-check">
                <label for="a1">No</label>
                <input type="radio" name="a1" id="a1" class="form-check-input" value="n"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 p-2 m-2 rounded" id="div_a2">
            <strong>Q2: {{ $quiz[0]->q2 }}</strong>
            <div class="form-check">
                <label for="a2">Yes</label>
                <input type="radio" name="a2" id="a2" class="form-check-input" value="y"/>
            </div>
            <div class="form-check">
                <label for="a2">No</label>
                <input type="radio" name="a2" id="a2" class="form-check-input" value="n"/>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 p-2 m-2 rounded" id="div_a3">
            <strong>Q1: {{ $quiz[0]->q3 }}</strong>
            <div class="form-check">
                <input type="radio" name="a3" id="a3" class="form-check-input" value="y"/>
                <label for="a3">Yes</label>
            </div>
            <div class="form-check">
                <input type="radio" name="a3" id="a3" class="form-check-input" value="n"/>
                <label for="a3">No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-2">Submit</button>
    </form>
    <a class="btn btn-info" href="{{ route('quiz.index') }}">Back to home</a>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous">
</script>
<script>
    @if (isset($quiz))
    $(document).ready(function() {
        $('input').on('click', (e) => {
            let answerId = e.target.id;
            let answerGiven = e.target.value;

            if (answerGiven === '{{ $quiz[0]->a1 }}' && answerId === 'a1') {
                $('#div_a1').css('background-color', 'green');
            } else if (answerId === 'a1') {
                $('#div_a1').css('background-color', 'red');
            }

            if (answerGiven === '{{ $quiz[0]->a2 }}' && answerId === 'a2') {
                $('#div_a2').css('background-color', 'green');
            } else if (answerId === 'a2') {
                $('#div_a2').css('background-color', 'red');
            }

            if (answerGiven === '{{ $quiz[0]->a3 }}' && answerId === 'a3') {
                $('#div_a3').css('background-color', 'green');
            } else if (answerId === 'a3'){
                $('#div_a3').css('background-color', 'red');
            }
        });
    });
    @endif
</script>
