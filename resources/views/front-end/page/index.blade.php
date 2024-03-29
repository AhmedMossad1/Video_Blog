@extends('layouts.app')
@section('title' , $page->name)
@section('meta_keywords' , $page->meta_keywords)
@section('meta_des' , $page->meta_des)
@section('content')
    <div class="section section-buttons text-center" style="min-height: 600px">
        <div class="container">
            <div class="title">
                <h1>{{ $page->name }}</h1>
            </div>
            <p>
                <h4>
                {!! $page->des !!}
                </h4>
            </p>
            <p>
                {{ $page->meta_des}}
            </p>
        </div>
    </div>
@endsection
