@extends('backpack::layouts.top_left')
@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection
