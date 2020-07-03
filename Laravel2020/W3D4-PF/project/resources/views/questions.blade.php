@extends('templates.master')

@section('content')
    <?php if (count($items) == 0)echo "<h1>No Questions Available!</h1>"?>

@endsection