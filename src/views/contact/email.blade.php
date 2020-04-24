<!-- _backgroundColor: "#000" -->
@component('mail::message')
# Introduction

The body of your subject : {{ $subject }}
<br>
This is your message: {{ $message }}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Md.Tarikul Islam
@endcomponent
