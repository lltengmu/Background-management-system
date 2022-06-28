@extends('layouts.layout')

@section('content')
<div class="content-body" style="min-height: 100vh;">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>{{ __('zh.Hi, welcome back!') }}</h4>
                    <p class="mb-0">{{ $user->first_name }}</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">布局</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                </ol>
            </div>
        </div>
    </div>
    @foreach (Config::get('app.locales') as $lang => $language )
        @if($lang != App::getLocale())
            <li><a href="{{ route('lang.change',['locale' => $lang ]) }}">{{ $language }}</a></li>
        @endif
    @endforeach
</div>


@endsection