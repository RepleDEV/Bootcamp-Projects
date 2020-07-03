@extends('templates.master')

@section('content')

    <div class="container">
        <h1>{{$items->title}}</h1>
        <section class="border rounded-lg bg-dark px-2">
            <p>{{$items->content}}</p>
        </section>
        <h5 class="small">Date uploaded: {{$items->dateuploaded}} <br> Date updated: {{$items->dateupdated}}</h5>
        <hr>
    </div>
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <h5>Answer this question: </h5>
                <textarea name="acontentbox" id="acontentbox" cols="100" rows="6" class="rounded"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Answer</button>
        </form>
        <hr>
    </div>
    <div class="container my-2">
        <ul class="list-group">
            <?php
                foreach($answerlist as $answer) {
                    echo "<li class='list-group-item'>";
                    echo "<p>$answer->content";
                    echo "<p class='small'>Answered on: $answer->dateuploaded</p>";
                }
            ?>
        </ul>
    </div>

@endsection