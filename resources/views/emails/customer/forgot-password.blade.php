@component('mail::message')
# Hi,

## You request for password reset

Click the link below to reset your password

@component('mail::button', ['url' => route('create.password',$token),'color' => 'primary'])
Reset Your Password
@endcomponent

### If you arn't request this, then no further action required

Thanks,<br>
{{ config('app.name') }}
@endcomponent
