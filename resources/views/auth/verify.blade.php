@extends('frontend.layouts.master')
@section('css')
<style>
    .si_header{
        border-bottom: 2px solid var(--border-color-11) !important;
    background-color: var(--section-bg-1) !important;
    }
    .si_card_verify{
        border: 2px solid var(--border-color-11) !important ;
    }
</style>
@endsection
@section('content')

<div class="container py-5">
        <div class="d-flex justify-content-center">
            <div class="card si_card_verify w-50">
                <div class="card-header si_header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
