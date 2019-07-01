@component('mail::message')
# Hi,

A Customers Way user has sent you a message.

Name: {{ $contact['name'] }}

E-mail: {{ $contact['email'] }}

Subject: {{ $contact['subject'] }}

Message: {{ $contact['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent