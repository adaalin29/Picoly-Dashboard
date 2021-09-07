@php

$res = \App\Models\Restaurant::where('id',$entry->getKey())->first();
$user = \App\Models\BackpackUser::where('id',$res->owner_id)->first();

$existing = \App\Models\Waiter::where('email',$user->email)->where('restaurant_id',$entry->getKey())->first();
@endphp
@if(!$existing)
<br/>
<a href="{{ url($crud->route.'/'.$entry->getKey().'/createWaiter') }}" class="btn btn-xs btn-primary"  style="background-color:#004277;border-color:#004277;padding:10px;margin-top: 10px">
    <i style="font-size: 17px;margin-right: 5px;" class="fa fa-user"></i>
    Create waiter account with restaurant login data
</a>
@endif
