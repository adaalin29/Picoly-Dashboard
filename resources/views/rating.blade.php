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
  <a href="orders" class="bordered-button" style="margin-left:10px">
    {{__('site.orders_title')}}
  </a>
  <div class="full-button" style="margin-left:10px">
   {{__('site.reviews')}}
  </div>
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
      <div class="tables_page_title">{{__('site.myReviews')}}</div>
  </div>

  <div class="notification_container">
      <div id="notify_text" class="notification_text"></div>
      <a class="notification_close"><img src="images/close.svg"></a>
  </div>
  
  @if(count($reviews) > 0)
  <ul class="timeline timeline-inverse">
                @php($last = '')
                @foreach($reviews as $item)
                  <li class="time-label">                   
                        @if(\Carbon\Carbon::parse($item->created_at)->format('d M Y') != $last)
                        <span class="bg-red">
                          {{\Carbon\Carbon::parse($item->created_at)->format('d M Y')}}
                        </span>
                        @endif
                        @php($last = \Carbon\Carbon::parse($item->created_at)->format('d M Y'))
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</span>

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