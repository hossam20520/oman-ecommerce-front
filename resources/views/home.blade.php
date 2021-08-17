@extends('layouts.admin')
@section('content')
<div class="content">


@include('dashboard')
@include('dashboard_2')
@include('sectionDas')

</div>
@endsection
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
@section('scripts')
@parent

@endsection