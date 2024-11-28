@extends('layouts.client')
@section('content')
    @include('publics.client-header')

    <!-- main content -->

    @include('client.main-content')
    <!-- footer -->

    @include('publics.client-footer')
    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

@endsection