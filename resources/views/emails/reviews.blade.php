@component('mail::message')
# Acest mesaj contine ultimele review-uri primite in cadrul aplicatiei Picoly

@component('mail::panel')
<div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
Ultimele review-uri:
</div>
@component('mail::table')
<table>
@foreach($reviews as $item)
        <tr>
        <td>
        <tr><td>Trimis la:{{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}</td></tr>
        <tr><td>Mesaj:    {{$item->content}}</td></tr>
        <tr><td>Rating for services:  {{$item->rate}} (@if($item->rate == 1) Foarte nemulțumit! @endif @if($item->rate == 2) Nemulțumit! @endif @if($item->rate == 3) Așa și așa! @endif @if($item->rate == 4) Mulțumit! @endif @if($item->rate == 5) Foarte mulțumit! @endif)</td></tr>
        <tr><td>Rating for food/drink:  {{$item->food_rate}}(@if($item->food_rate == 1) Foarte nemulțumit! @endif @if($item->food_rate == 2) Nemulțumit! @endif @if($item->food_rate == 3) Așa și așa! @endif @if($item->food_rate == 4) Mulțumit! @endif @if($item->food_rate == 5) Foarte mulțumit! @endif)</td></tr>
        </td>
    </tr>

@endforeach
</table>
@endcomponent

@endcomponent

O zi buna,<br>
Team {{ config('app.name') }}
@endcomponent
