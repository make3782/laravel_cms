@extends('layouts.application')

@section('title')
	{{ getTitle() }}
@endsection

@section('content')
	@include('partials.application.articles')
@endsection
