@extends('layouts.default', [
    'title' => $entry->title,
])

@section('content')
    {!! $entry->content !!}
@endsection
