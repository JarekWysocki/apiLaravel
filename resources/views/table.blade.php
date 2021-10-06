@extends('welcome')
@section('posts')
<canvas id="myChart" style="width:100%;max-width:600px" class="mx-auto"></canvas>
<table class="table table-striped">
@foreach ($posts as $post)
<tr>
    <td>{{ $post->user->name }}</td>
    <td>{{ $post->body }}</td>
</tr>
@endforeach
</table>
@endsection