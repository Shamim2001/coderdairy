@extends('layouts.dashboard')
@section('content')

<!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

    <x-admin.report-card :data="$problem" text="problem" />
    <x-admin.report-card :data="$solution" text="solution" />



</div>
    <!-- End General Report -->

@endsection
