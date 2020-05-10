@extends('layout')
@section('title')
   Accounting
@endsection

@push('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@push('script')
    <script src="{{asset('js/login.js')}}"></script>
@endpush

@section('content') 
    <div id="app">
        <login></login>
    </div>
@endsection