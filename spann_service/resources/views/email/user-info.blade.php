@component('mail::message')
# Contact Us Mail Feedback

@isset ($data['name'])
<p>Name: {{ $data['name'] }}</p>
@endisset

@isset ($data['email'])
<p>Email: {{ $data['email'] }}</p>
@endisset

@isset ($data['phone'])
<p>Phone: {{ $data['phone'] }}</p>
@endisset


Thanks,<br>
{{ config('app.name') }}
@endcomponent