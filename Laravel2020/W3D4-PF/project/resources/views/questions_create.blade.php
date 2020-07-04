@extends('templates.master')

@section('content')

<div class="container-fluid m-1">
    <form method='POST' action='{{$method == "PUT" ? "/questions/$id" : "/questions"}}'>
        <?php
            if ($method == "PUT")echo "<input type='hidden' name='_method' value='PUT'>";
        ?>
        @csrf
        <div class="form-group">
            <label for="title">Question Title:</label>
            <input type="text" class="form-control" id="title" name="title" value='{{$old_title ?? ''}}'>
        </div>
        <div class="form-group">
            <label for="questioncontent">Question:</label>
            <textarea id="questioncontentbox" cols="30" rows="10" class="form-control" name="qcontentbox">{{$old_content ?? ''}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

@endsection