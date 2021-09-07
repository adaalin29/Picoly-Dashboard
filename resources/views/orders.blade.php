@extends('parts.template')
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('/vendor/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('/vendor/adminlte/dist/css/AdminLTE.min.css')}}">
<style>
a:hover{
    color:#E32340;
}
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

@section('title', 'Homepage')

@section('content')

<header>
  <a href="/"><img class="header-logo" src="images/logored.png"></a>
   <div class =  "language-container">
     @foreach(\Backpack\LangFileManager\app\Models\Language::where('active', true)->get() as $lang)
       <a class = "language-element {{session('locale')==$lang->abbr ? 'language-active' : ''}}" href="/set-lang/{{ $lang->abbr }}">{{ strtoupper($lang->abbr) }}</a>
     @endforeach
  </div>
  <div class="header_actions_container">
  <a class="bordered-button" href="/">
   {{__('site.tables')}}
  </a>
   <a href="orders" class="full-button" style="margin-left:10px">
    {{__('site.orders_title')}}
  </a>
  <a href="rating" class="bordered-button" style="margin-left:10px">
   {{__('site.reviews')}}
  </a>
  <a target="_blank" href="admin" class="bordered-button">
    Admin
  </a>
  <a href="logout" class="bordered-button">
    {{__('site.iesi')}}
  </a>
</div>
</header>

<div id="table_popup" class="table_popup">
  <div class="table-item">
  
  </div>  
</div>

<main class="main-dashboard">

  <div class="tables_page_title_container">
      <div class="tables_page_title">{{__('site.orders_title')}}</div>
  </div>

  <div class="notification_container">
      <div id="notify_text" class="notification_text"></div>
      <a class="notification_close"><img src="images/close.svg"></a>
  </div>
  
  @if(count($orders) > 0)
  <ul class="timeline timeline-inverse">
                @php($last = '')
                @foreach($orders as $order)
                  <li class="time-label">                   
                        @if(\Carbon\Carbon::parse($order->created_at)->format('d M Y') != $last)
                        <span class="bg-red">
                          {{\Carbon\Carbon::parse($order->created_at)->format('d M Y')}}
                        </span>
                        @endif
                        @php($last = \Carbon\Carbon::parse($order->created_at)->format('d M Y'))
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($order->created_at)->format('d M Y H:i')}}</span>
                            <div class="container-elements-order" style="padding:10px;display:flex; width: 100%;">
                                <div style="margin-right:50px; margin-bottom: 20px;">
                                  <div style="font-weight:800;font-style:italic">
                                    {{__('site.waiter')}}: {{$order->waiter->name}}<br>
                                    {{__('site.table')}}/{{__('site.table_location')}}: {{$order->table_name}} {{$order->restaurantTable['name']}} - {{$order->table_location}}<br>
                                    @if($order->message)
                                      {{__('site.other_details')}}: {{$order->message}}<br>
                                    @else
                                      {{__('site.other_details')}}: {{__('site.withoutObservations')}} 
                                    @endif
                                    @if($order->form_data)
                                      @php($form_data = json_decode($order->form_data, true))
                                        {{__('site.formDetails')}}: <br>
                                        <div style="padding-left: 10; font-size: 12">
                                          {{__('app.userName')}}: {{$form_data['userName']}}<br>
                                          {{__('app.userEmail')}}: {{$form_data['userEmail']}}<br>
                                          {{__('app.userPhone')}}: {{$form_data['userPhone']}}<br>
                                          {{__('app.userAddress')}}: {{$form_data['userAddress']}}<br>
                                        </div>
                                      
                                    @endif
                                  </div>       
                                </div>  
                                <div>
                                  <span><b>{{__('site.ordered_products')}}:</b></span>
                                  <div style="font-weight:800;font-style:italic">
                                    @if($order->products && count($order->products) > 0)
                                    
                                      <table>
                                        <tr>
                                          <th>{{__('site.product_name')}}</th>
                                          <th>{{__('site.product_description')}}</th>
                                          <th>{{__('site.product_observations')}}</th>
                                          <th>{{__('site.product_quantity')}}</th>
                                          <th>{{__('site.product_price')}}</th>
                                        </tr>
                                        @foreach($order->products as $product)
                                           <tr>
                                            <td>{{$product['name']}}</td>
                                            <td>{{$product['description']}}</td>
                                             @if(array_key_exists('observations', $product))
                                              <td>{{$product['observations']}}</td>
                                             @else
                                              <td>-</td>
                                             @endif
                                             @if(array_key_exists('quantity', $product))
                                              <td>{{$product['quantity']}}</td>
                                             @else
                                              <td>-</td>
                                             @endif
                                             @if(array_key_exists('price', $product))
                                              <td>{{$product['price']}}</td>
                                             @else
                                              <td>-</td>
                                             @endif
                                          </tr>
                                        @endforeach
                                      </table>
                                    @else
                                      {{__('site.no_products')}}<br>
                                    @endif
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
                @else
                  <div>{{__('site.no_orders')}}</div>
                @endif
</main>

@endsection

@push('scripts')



<script>
$(document).ready(function() {

    var tables = {!! json_encode($restaurant->tables->toArray()) !!};
    var restaurant = {!! json_encode($restaurant->toArray()) !!};
    console.log(tables);
    var socket = {
      pusher : null,
      connect(restaurantId) {
          let pusherOptions = {
              key: 'twerwere',
              wsHost: 'picoly.touch-media.ro',
              wsPath: '/ws',
              enabledTransports: ["ws", "wss"],
              disableStats: true,
              authEndpoint: "https://picoly.touch-media.ro/pusher/auth",
              auth: { headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} },
          }
          this.pusher = new Pusher(pusherOptions.key, pusherOptions);
          this.restaurantRoom = this.pusher.subscribe('private-restaurant.'+restaurantId);
          this.restaurantRoom.bind('status', event => {
              if(event.table)
                redraw(event.table);
              console.log('nume_eveniment',event);
          });
      },
      disconnect() {
          if (this.pusher) this.pusher.disconnect();
              this.pusher = null;
          },
    };

    socket.connect(restaurant.id);
  });

</script>

@endpush