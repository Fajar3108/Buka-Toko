@extends('auth.layouts.auth-master')

@section('content')

<div class="card mx-auto px-4 shadow">
<div class="card-body text-center">
    <h5 class="card-title mb-4">Verify Your Email</h5>
    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        A new email verification link has been emailed to you!
    </div>
    @endif
    <form action="{{ route('verification.send') }}" method="POST" class="text-left">
    @csrf
    <button type="submit" class="btn btn-primary btn-block mb-3">
        Resend Email Verification Link
    </button>
    </form>
</div>
</div>

@endsection
