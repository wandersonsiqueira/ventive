@extends('layouts.core.backend', [
	'menu' => 'email_verification',
])

@section('title', $server->name)

@section('page_header')

            <div class="page-title">
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li class="breadcrumb-item"><a href="{{ action("Admin\HomeController@index") }}">{{ trans('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ action("Admin\EmailVerificationServerController@index") }}">{{ trans('messages.email_verification_servers') }}</a></li>
                </ul>
                <h1>
                    <span class="text-semibold"><span class="material-symbols-rounded">
edit
</span> {{ $server->name }}</span>
                </h1>
            </div>

@endsection

@section('content')

    <form enctype="multipart/form-data" action="{{ action('Admin\EmailVerificationServerController@update', $server->uid) }}" method="POST" class="form-validate-jqueryz email-verification-server-form">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        @include('admin.email_verification_servers._form')
    <form>

@endsection
