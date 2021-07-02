@extends('template.index')
@section('content')
    @include('partials.store.comeOnIn')
    @include('partials.store.strongCoffeeStrongRoots')
    <script>
        $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>
@endsection
