@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://www.divar.io'])
visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
