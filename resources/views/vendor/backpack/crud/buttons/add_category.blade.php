<br>
<!-- layout:0 Produs, layout:1 Serviciu, layout:2:Oferte, -->
@if($entry->layout ==2 ) 
<a href="{{ url('admin/deal?restaurant_id='.$entry->id_restaurant.'&id_category='.$entry->getKey()) }}" class="btn btn-xs btn-primary"   style="background-color:#2196F3;border-color:#2196F3;padding:10px;margin-top: 10px">
    <i style="font-size: 17px;margin-right: 5px;" class="fa fa-gift"></i>
    See deals
</a>
@elseif($entry->digital_menu ==1)

@else
  <a href="{{ url('admin/digital_categories?id_restaurant='.request()->id_restaurant.'&id_menu='.$entry->getKey().'&layout='.$entry->layout) }}" class="btn btn-xs btn-primary"  style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px">
      <i style="font-size:17px;margin-right: 5px;" class="fa fa-table"></i>
      See category list
  </a>
@endif


