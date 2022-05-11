@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
 reserve the mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
