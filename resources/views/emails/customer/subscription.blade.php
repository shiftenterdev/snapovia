@component('mail::message')
# Hi,

## You are now subscribed to  {{ config('app.name') }}🚀

@component('mail::panel')
You will be notified when new offer arrived.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
