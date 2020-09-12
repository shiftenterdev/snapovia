@component('mail::message')
# Hi, {{$customer->first_name}}

## Welcome Snapovia 🚀

Your registration successfully completed!

To login your account click the button below.

@component('mail::button', ['url' => route('customer.login'),'color' => 'success'])
    Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
