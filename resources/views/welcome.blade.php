@extends('layouts.master')

@section('content')
<h1>Titaninvest Renewal</h1>
{{$greeting}}
{{$name}}
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert('저는 자식뷰의 "SCRIPT"입니다.');
    </script>
@endsection