@extends('backpack::layout')
<style>
  .container-waiters{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    flex-wrap: wrap;
    width: 100%;
  }
  .item-waiter-listed{
   cursor: pointer; 
  }
  .timeline>.item-waiter-listed>span {
    font-weight: 600;
    padding: 5px;
    display: inline-block;
    background-color: #fff;
    border-radius: 4px;
}
  .time-label{
    margin-bottom: 0 !important;
  }
  .timeline>.time-label>span{
    margin-bottom: 15px !important;
  }
  .bg-red.active-waiter{
        border: 1px solid #dd4b39;
    background: #ffffff !important;
    color: #dd4b39 !important;
  }
</style>
@section('header')
	<section class="content-header">
	  <h1>
      <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
    
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
	    <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
	    <li class="active">{{ trans('backpack::crud.list') }}</li>
	  </ol>
	</section>
@endsection

@php
$user = optional(backpack_auth()->user());
$allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);

$restaurants = collect([]);
if ($allRestaurants) {
    $restaurants = App\Models\Restaurant::get();
    $multipleRestaurants = true;
} else {
    $restaurants = $user->restaurants()->get();
    $multipleRestaurants = $restaurants->count() > 1;
}
$restaurantsArray = $restaurants->keyBy('id')->pluck('name', 'id')->toArray();
$restaurants_ids = $restaurants->pluck('id');
$waiters_ids = App\Models\Waiter::whereIn('restaurant_id',$restaurants_ids)->get()->pluck('id');

$reviews = App\Models\Review::with('waiter')->with('restaurant')->whereIn('restaurant_id',$restaurants_ids)->orWhereIn('waiter_id',$waiters_ids)->orderBy('created_at','desc')->get();
$waiters = [];
foreach($reviews as $review){
  if($review->waiter && $review->restaurant){
    if(!in_array($review->waiter->name, $waiters)){
      array_push($waiters, 
        [
          'waiter' => $review->waiter->name,
          'id_wait_rest' => $review->waiter->restaurant_id,
          'id_rest' => $review->restaurant->id,
          'waiter_id' => $review->waiter->id,
        ]);
    }
  }
}
$waiters = array_map("unserialize", array_unique(array_map("serialize", $waiters)));
@endphp
@section('content')
<!-- Default box -->
  <div class="row" style="padding-left:20px;">
  <div class="form-group">
                <label>Reviews for: </label>
                <select id="filter_reviews" class="form-control select2" style="width: 40%;">
                  <option value="all" selected="selected">All</option>
                  @foreach($restaurants as $res)
                    <option value="{{$res->id}}">{{$res->name}}</option>
                  @endforeach
                </select>
              </div>
  <ul class="timeline container-waiters">
    @foreach($waiters as $item)
      @if($item['waiter'])
        <li waiter_id="{{$item['waiter_id']}}" class="item-waiter-listed @if($item['waiter']) rest-waiter-{{$item['id_wait_rest']}} waiter-id-{{$item['waiter_id']}}  @endif @if($item['id_rest']) rest-{{$item['id_rest']}} @endif" rest_id="{{$item['id_rest']}}"><span class="bg-red">Waiter: {{$item['waiter']}}</span></li>
      @endif
    @endforeach
  </ul>
  <ul class="timeline timeline-inverse">
                @php($last = '')
                @foreach($reviews as $item)
                  <li class="time-label @if($item->waiter) label{{$item->waiter->restaurant_id}} @endif @if($item->restaurant) label{{$item->restaurant->id}} @endif">                   
                        @if(\Carbon\Carbon::parse($item->created_at)->format('d M Y') != $last)
                        <span class="bg-red">
                          {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                        </span>
                        @endif
                        @php($last = \Carbon\Carbon::parse($item->created_at)->format('d M Y'))
                  </li>
                  <li class="review_item @if($item->waiter) item{{$item->waiter->restaurant_id}} waiter{{$item->waiter->id}} @endif @if($item->restaurant) item{{$item->restaurant->id}} @endif">
                    <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>
                            <h3 class="timeline-header">Review for 
                            @if($item->restaurant)
                            <b>{{$item->restaurant->name}}</b>
                            @endif
                            @if($item->waiter)
                            &nbsp; &nbsp; &nbsp;Waiter: <b> {{$item->waiter->name}}</b>
                            @endif
                           
                            </h3>
                            <div class="timeline-body">
                                    {{$item->content}}
                            </div>
                            <div style="padding:10px;display:flex">
                                <div style="margin-right:50px">                               
                                  <span><b>Rating for services:</b></span>
                                  @for($i = 1 ; $i<=$item->rate ; $i++)
                                  <i style="color:#FF9800" class="fa fa-star"></i>
                                  @endfor 
                                  @for($i = 1 ; $i<=5-$item->rate ; $i++)
                                  <i style="color:gray" class="fa fa-star"></i>
                                  @endfor   
                                  <div style="font-weight:800;font-style:italic">
                                    @if($item->rate == 1) Foarte nemulțumit! @endif
                                    @if($item->rate == 2) Nemulțumit! @endif
                                    @if($item->rate == 3) Așa și așa! @endif
                                    @if($item->rate == 4) Mulțumit! @endif
                                    @if($item->rate == 5) Foarte mulțumit! @endif
                                  </div>   
                                </div>  
                                <div>
                                  <span><b>Rating for food/drink:</b></span>
                                  @for($i = 1 ; $i<=$item->food_rate ; $i++)
                                  <i style="color:#FF9800" class="fa fa-star"></i>
                                  @endfor 
                                  @for($i = 1 ; $i<=5-$item->food_rate ; $i++)
                                  <i style="color:gray" class="fa fa-star"></i>
                                  @endfor      
                                  <div style="font-weight:800;font-style:italic">
                                    @if($item->food_rate == 1) Foarte nemulțumit! @endif
                                    @if($item->food_rate == 2) Nemulțumit! @endif
                                    @if($item->food_rate == 3) Așa și așa! @endif
                                    @if($item->food_rate == 4) Mulțumit! @endif
                                    @if($item->food_rate == 5) Foarte mulțumit! @endif
                                  </div> 
                                </div>                     
                            </div>
                        </div>
                  </li>
                  @endforeach
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                 
                </ul>


  </div>


@endsection

@section('after_styles')
  <!-- DATA TABLES -->
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">

  <link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/crud.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/form.css') }}">

  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  @stack('crud_list_styles')
@endsection

@section('after_scripts')


  <script src="{{ asset('vendor/backpack/crud/js/crud.js') }}"></script>
  <script src="{{ asset('vendor/backpack/crud/js/form.js') }}"></script>

  <script>
  function parse_query_string(query) {
      var vars = query.split("&");
      var query_string = {};
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        var key = decodeURIComponent(pair[0]);
        var value = decodeURIComponent(pair[1]);
        // If first entry with this name
        if (typeof query_string[key] === "undefined") {
          query_string[key] = decodeURIComponent(value);
          // If second entry with this name
        } else if (typeof query_string[key] === "string") {
          var arr = [query_string[key], decodeURIComponent(value)];
          query_string[key] = arr;
          // If third or later entry with this name
        } else {
          query_string[key].push(decodeURIComponent(value));
        }
      }
      return query_string;
    }
    function initFilters(id){
        $( ".time-label" ).each(function( index ) {
            if($(this).hasClass('label'+id)){
              $(this).css('display','block');
            }
            else{
              $(this).css('display','none');
            }
        });
        $( ".review_item" ).each(function( index ) {
            if($(this).hasClass('item'+id)){
              $(this).css('display','block');
            }
            else{
              $(this).css('display','none');
            }
        });
    }
    $(".item-waiter-listed").click(function(){
      if(!$(this).find("span.bg-red").hasClass('active-waiter')){
        $(".item-waiter-listed").find("span.bg-red").removeClass('active-waiter');
        $(this).find("span.bg-red").addClass('active-waiter');
      }
      var rest_id = $(this).attr('rest_id');
      var waiter_id = $(this).attr('waiter_id');
      $(".review_item").hide();
      $(".waiter"+waiter_id).show();
//       $(".label"+rest_id).show();
//       $(".item"+rest_id).show();
    });
    var query = window.location.search.substring(1);
    var qs = parse_query_string(query);
    if(qs.restaurant_id){
      $("#filter_reviews").val(qs.restaurant_id);
      
      var id = qs.restaurant_id;
      $(".item-waiter-listed").hide();
      $(".item-waiter-listed[rest_id="+id+"]").show();
      $( ".time-label" ).each(function( index ) {
          if($(this).hasClass('label'+id)){
            $(this).css('display','block');
          }
          else{
            $(this).css('display','none');
          }
      });
      $( ".review_item" ).each(function( index ) {
          if($(this).hasClass('item'+id)){
            $(this).css('display','block');
          }
          else{
            $(this).css('display','none');
          }
      });
      
      initFilters(qs.restaurant_id);
    }
  </script>

  <script>

   $(document).on('change','#filter_reviews', function() {
        $(".item-waiter-listed").find("span.bg-red").removeClass('active-waiter');
        if($(this).find(":selected").val() == 'all'){
            $('.time-label').css('display','block');
            $('.review_item').css('display','block');
            $(".item-waiter-listed").show();
        }
        else{
          var id = $(this).find(":selected").val();
          $(".item-waiter-listed").hide();
          $(".item-waiter-listed[rest_id="+id+"]").show();
          $( ".time-label" ).each(function( index ) {
              if($(this).hasClass('label'+id)){
                $(this).css('display','block');
              }
              else{
                $(this).css('display','none');
              }
          });
          $( ".review_item" ).each(function( index ) {
              if($(this).hasClass('item'+id)){
                $(this).css('display','block');
              }
              else{
                $(this).css('display','none');
              }
          });
        }
    })
</script>

  <!-- CRUD LIST CONTENT - crud_list_scripts stack -->
  @stack('crud_list_scripts')
@endsection