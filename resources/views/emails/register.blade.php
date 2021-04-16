@component('mail::message')
# Introduction

Có người đăng kí tham dự đám cưới nè con gà.

<br>
<b>Thông tin như sau:</b>
<ul>
    <li>Tên: {{ $info->name }}</li>
    <li>Tên: {{ $info->email }}</li>
    @if($info->attend == 0)
    <li>Tham dự: không tham dự được</li>
    @else
    <li>Tham dự: có tham dự được</li>
    @endif
    <li>Lời nhắn: {{ $info->message }}</li>
</ul>

@component('mail::button', ['url' => 'mailto:{{ $info->name }}'])
Trả lời email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
