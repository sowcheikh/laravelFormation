@extends('layouts.app')

@section('content')
<h1>la liste des articles</h1>
<h2>
    @foreach ($posts as $post)
        <h2> {{$post}} </h2>
    @endforeach
</h2>
@endsection
