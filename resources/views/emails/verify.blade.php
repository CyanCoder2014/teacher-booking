@component('mail::message')
    Hello {{ $user->name }}

    Click on Below Button to Verify Your Email
    @component('mail::button', ['url' => route('email.verify',['token' => $user->verifyUser->token])])
        verify
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
