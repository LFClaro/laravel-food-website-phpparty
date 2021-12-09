@component('mail::message')
# Thanks for messaging us!

An email has been sent to your email!

@component('mail::button', ['url' => 'home'])
Return to home
@endcomponent

Thanks,<br>
The PHParty Team
@endcomponent
