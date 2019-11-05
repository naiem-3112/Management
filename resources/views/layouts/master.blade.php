@extends('layouts.base')
@section('base.content')

    @include('layouts.partial.header')

    @include('layouts.partial.navigation')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('page_title', 'Dashboard')</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="content">
            @yield('master.content')
        </div>
    </div>

    @include('layouts.partial.footer')

@endsection




