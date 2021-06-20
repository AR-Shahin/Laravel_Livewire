@extends('layouts.app')

@section('content')
@php
    $post = 'sss'
@endphp
<div class="container">
   @livewire('post.show', ['post' => 'omi'])
</div>

@endsection
