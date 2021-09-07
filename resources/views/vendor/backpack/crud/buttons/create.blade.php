@if ($crud->hasAccess('create'))
@if($crud->route =='admin/service' || $crud->route =='admin/service_categories' || $crud->route =='admin/menus')
<a href="{{ url($crud->route.'/create?id_restaurant='.request()->id_restaurant) }}" class="btn btn-primary ladda-button add-menu" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>
@elseif($crud->route =='admin/digital_categories')
<a href="{{ url($crud->route.'/create?id_restaurant='.request()->id_restaurant.'&id_menu='.request()->id_menu) }}" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>
@elseif($crud->route =='admin/menu_products')
<a href="{{ url($crud->route.'/create?id_category='.request()->id_category.'&layout='.request()->layout) }}" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>
@elseif($crud->route =='admin/deal')
<a href="{{ url('admin/deal/create?restaurant_id='.request()->restaurant_id.'&id_category='.request()->id_category) }}" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>
@else
	<a href="{{ url($crud->route.'/create') }}" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span></a>
@endif
@endif