@php
$user = optional(backpack_auth()->user());
$allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
$userReseller  = $user->can('adauga-restaurant');
$id_restaurant = request()->id_restaurant;
if(!$id_restaurant && $allRestaurants){
  $restaurant = \App\Models\Restaurant::first();
  if($restaurant){
    $id_restaurant = $restaurant->id;
  }
} else if(!$id_restaurant){
  $restaurant = \App\Models\Restaurant::where('owner_id',$user->id)->first();
  if($restaurant){
    $id_restaurant = $restaurant->id;
  }
}
@endphp
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<!-- <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li> -->
<!-- <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li> -->
@if($allRestaurants || $userReseller)
<li><a href="{{ backpack_url('admins') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
@endif
<li><a href="{{ backpack_url('restaurant') }}"><i class="fa fa-cutlery"></i> <span>Restaurants</span></a></li>
<li><a href="{{ backpack_url('waiter') }}"><i class="fa fa-briefcase"></i> <span>Waiters</span></a></li>
@if($id_restaurant)
  <li><a href='{{ backpack_url('menus') }}?id_restaurant={{$id_restaurant}}'><i class='fa fa-tag'></i> <span>Menu</span></a></li>
@else
  <li><a href='{{ backpack_url('menus') }}'><i class='fa fa-tag'></i> <span>Menu</span></a></li>
@endif
<!-- <li><a href="{{ backpack_url('deal') }}"><i class="fa fa-gift"></i> <span>Deals</span></a></li> -->
<li><a href="{{ backpack_url('review') }}"><i class="fa fa-star"></i> <span>Reviews</span></a></li>



@if($allRestaurants)
<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
@endif

<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Table Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href='{{ backpack_url('table_locations') }}'><i class='fa fa-tag'></i> <span>Table locations</span></a></li>
    <li><a href='{{ backpack_url('table_names') }}'><i class='fa fa-tag'></i> <span>Table names</span></a></li>
  </ul>
</li>

<li><a href='https://picoly.touch-media.ro/api/documentation' target="_blank"><i class='fa fa-key'></i> <span>API Doc</span></a></li>
@if($allRestaurants || $userReseller)
  <li><a href='{{ backpack_url('sounds') }}'><i class='fa fa-file-audio-o'></i> <span>Sounds</span></a></li>
@endif