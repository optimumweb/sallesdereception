@extends('layout', [
    'title' => $entry->title,
])

@section('content')
    {!! $entry->content !!}
@endsection
