@component('mail::message')
# Introduction

The body of your message.
- one
- two
- three

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Panel Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
