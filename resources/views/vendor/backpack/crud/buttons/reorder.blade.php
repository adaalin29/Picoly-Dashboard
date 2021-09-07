@if ($crud->reorder)
	@if ($crud->hasAccess('reorder'))
    @if(request()->path() == 'admin/digital_categories')
	    <a href="{{ url($crud->route.'/reorder?id_restaurant='.request()->id_restaurant.'&id_menu='.request()->id_menu.'&layout='.request()->layout) }}" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-arrows"></i> {{ trans('backpack::crud.reorder') }}</span></a>
    @elseif(request()->path() == 'admin/menu_products')
	    <a href="{{ url($crud->route.'/reorder?id_category='.request()->id_category.'&layout='.request()->layout) }}" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-arrows"></i> {{ trans('backpack::crud.reorder') }}</span></a>
    @else
	    <a href="{{ url($crud->route.'/reorder?id_restaurant='.request()->id_restaurant) }}" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-arrows"></i> {{ trans('backpack::crud.reorder') }}</span></a>
    @endif
  @endif
@endif