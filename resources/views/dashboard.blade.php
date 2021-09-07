@extends('parts.template')

@section('title', 'Homepage')

@section('content')

@php
  $sounds = \App\Models\Sound::get();
@endphp

<header>
  <a href="/"><img class="header-logo" src="images/logored.png"></a>
  <div class =  "language-container">
     @foreach(\Backpack\LangFileManager\app\Models\Language::where('active', true)->get() as $lang)
       <a class = "language-element {{session('locale')==$lang->abbr ? 'language-active' : ''}}" href="/set-lang/{{ $lang->abbr }}">{{ strtoupper($lang->abbr) }}</a>
     @endforeach
  </div>
  <div class="header_actions_container">
  <div class="full-button">
   {{__('site.tables')}}
  </div>
  <a href="orders" class="bordered-button">
    {{__('site.orders_title')}}
  </a>
  @if($restaurant->waiters_can_see_reviews)
  <a href="rating" class="bordered-button">
    {{__('site.reviews')}}
  </a>
  @endif
  <a target="_blank" href="admin" class="bordered-button">
    Admin
  </a>
  <a href="logout" class="bordered-button">
    {{__('site.iesi')}}
  </a>
</div>
</header>

<div class="confirm_popup">
    <div class="confirm_popup_inner">
        <div class="confirm_popup_title">{{__('site.confirm')}}</div>
        <div class="confirm_popup_subtitle">{{__('site.table')}}</div>
        <div class="confirm_popup_buttons">
             <div id="close_confirm_dnd_dnd" class="confirm_popup_button" onclick='CancelCloseTable()'>{{__('site.no')}}</div>
            <div id="yes_confirm" class="confirm_popup_button" onclick='confirmActionPopup()'>{{__('site.yes')}}</div>
        </div>
    </div>
</div>
<div class="confirm_popup_deal">
    <div class="confirm_popup_inner">
        <div class="confirm_popup_title">{{__('site.orderOfferTitle')}}</div>
        <div class="confirm_popup_subtitle"></div>
        <div class="confirm_popup_buttons">
            <div id="yes_confirm_deal" class="confirm_popup_button confirm_popup_button_order">{{__('site.acceptCommand')}}</div>
            <div id="yes_confirm_deal" class="cancel_command" onclick = "cancelCommandPopup()">{{__('site.cancelCommand')}}</div>
        </div>
    </div>
</div>
<div class="confirm_popup_service">
    <div class="confirm_popup_inner">
        <div class="confirm_popup_title">{{__('site.orderOfferTitle')}}</div>
        <div class="confirm_popup_subtitle"></div>
        <div class="confirm_popup_subtitle" id = "service_price"></div>
        <div class="confirm_popup_buttons">
            <div id="yes_confirm_deal" class="confirm_popup_button confirm_popup_button_order">{{__('site.acceptCommand')}}</div>
            <div id="yes_confirm_deal" class="cancel_command" onclick = "cancelCommandPopup()">{{__('site.cancelCommand')}}</div>
        </div>
    </div>
</div>
<div class="confirm_popup_order">
    <div class="confirm_popup_inner">
        <div class="confirm_popup_title">{{__('site.orderOfferTitle')}}</div>
        <div class="confirm_popup_subtitle"></div>
      <div class="confirm_popup_subtitle" id = "messageOrder"></div>
        <div class="confirm_popup_buttons">
            <div id="yes_confirm_order" class="confirm_popup_button confirm_popup_button_order" >{{__('site.acceptCommand')}}</div>
            <div id="yes_confirm_deal" class="cancel_command" onclick = "cancelCommandPopup()">{{__('site.cancelCommand')}}</div>
        </div>
    </div>
</div>
<div id="table_command" class="table_command">
  <div class="confirm_popup_inner">
    <div onclick="closeTableCommand()" class="close_popup_button"><img src="images/closePoup.svg"></div>
    <div class="confirm_popup_title">{{__('site.areOrders')}}</div>
    <div class = "command_products">
      
    </div>
    <div class="confirm_popup_buttons">
      <div id="yes_confirm_deal" class="confirm_popup_button confirm_popup_button_order">{{__('site.acceptCommand')}}</div>
      <div id="yes_confirm_deal" class="cancel_command" onclick = "cancelCommandPopup()">{{__('site.cancelCommand')}}</div>
  </div>
  </div>
</div>

<div class="confirm_popup_dnd">
    <div class="confirm_popup_inner">
        <div class="confirm_popup_title">{{__('site.confirm')}}</div>
        <div class="confirm_popup_subtitle">{{__('site.blockTable')}}</div>
        <div class="confirm_popup_buttons">
            <div id="close_confirm_dnd_dnd" class="confirm_popup_button" onclick='closeConfirmPopupDnd()'>{{__('site.no')}}</div>
            <div id="yes_confirm_dnd_dnd" class="confirm_popup_button" onclick='dndTable()'>{{__('site.yes')}}</div>
        </div>
    </div>
</div>

<div id="table_popup" class="table_popup">
  <div class="table-item">
  
  </div>  
</div>
<div id="table_history" class="table_history">
  <div class="confirm_popup_inner">
  <div onclick="closeTableHistory()" class="close_popup_button"><img src="images/closePoup.svg"></div>
    <div class="confirm_popup_title">{{__('site.areOrders')}}</div>
    <div class = "history_products">
      
    </div>
  </div>  
</div>

<main class="main-dashboard">

  <div class="tables_page_title_container">
      <div class="tables_page_title">{{$user->restaurant->name}}</div>
      <div class="versiune_vizualizare">{{__('site.visualization')}}: &nbsp; <span>{{__('site.complex')}}</span> <img src="images/change.svg" /></div>
  </div>

  <div class="tables_categories_container">
    <div id="selector_all_tables" class="bordered-button category_select_button" sound_url="images/never.mp3">
        {{__('site.toate')}}
    </div>
    @if($restaurant->tables_categories)
    @foreach($restaurant->tables_categories as $item)
    <div class="bordered-gray-button category_select_button" data-id="{{$item['category_id']}}" sound_url="{{array_key_exists('sound_table', $item) ? '/storage/'.$sounds->find($item['sound_table'])->sound : 'images/never.mp3'}}">
        <div class="tables_categories_button_bullet"></div>
        @php
        $tableLocation = App\Models\ProductCategories::find($item['name']);
        @endphp
        {{ $tableLocation ? $tableLocation->name : $item['name'] }}
    </div>
    @endforeach
    @endif
  </div>


  <div class="tables_container" id="container_mese">

  </div>
  
  <div class="notification_container">
      <div id="notify_text" class="notification_text"></div>
      <a class="notification_close"><img src="images/close.svg"></a>
  </div>
  
  
</main>

@endsection

@push('scripts')

<script>
var timer;
var timers = [];
var etimers = [];

var afisaj = 'complex';

$(document).ready(function() {
    window.audio = new Audio('images/never.mp3');
    window.lang = "{{Session::get('locale')}}";
    var tables = {!! json_encode($restaurantTables->toArray()) !!};
    var restaurant = {!! json_encode($restaurant->toArray()) !!};
    var waiter_conectat = {!! json_encode($user) !!};
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
              if(event.table){
                if(event.table){
                  if(window.lang in event.table.category){
                    event.table.category = event.table.category[window.lang];
                  } else{
                    var first_key = Object.keys(event.table.category)[0];
                    event.table.category = event.table.category[first_key];
                  }
                }
                if(event.table){
                  if(window.lang in event.table.table_name){
                    event.table.table_name = event.table.table_name[window.lang];
                  } else{
                    var first_key = Object.keys(event.table.category)[0];
                    event.table.table_name = event.table.table_name[first_key];
                  }
                }
                 if(event.table){
                  var current_cat_id = event.table.category_id;
                  var sound_url = $(".category_select_button[data-id="+current_cat_id+"]").attr('sound_url');
                  if(sound_url != undefined){
                    window.audio = new Audio(sound_url);
                    window.audio.play();
                  } else{
                    window.audio = new Audio('images/never.mp3');
                  }
//                   if(
//                     event.table.status == 'bill' || 
//                     event.table.status == 'turn' || 
//                     event.table.status == 'deals' || 
//                     event.table.status == 'service' || 
//                     event.table.status == 'order' || 
//                     event.table.status =='command' || 
//                     event.table.status == 'cancel-command' || 
//                     event.table.status == 'cancel'){
//                     window.audio.play();
                    
//                   }
                }
                redraw(event.table);
              }
            
          });
      },
      disconnect() {
          if (this.pusher) this.pusher.disconnect();
              this.pusher = null;
          },
    };

    socket.connect(restaurant.id);
  
    function redraw(table){
      console.log(window.audio);
      var idx =  tables.indexOf(tables.find(x => x.id == table.id));
      var last = tables[idx].status;
      var confirmed = false;
      tables[idx] = table;
      if(etimers[table.id])
      etimers[table.id].stop();
     // clearInterval(timers[table.id]);
      if(table.status == 'occupied' && last != 'free'){
        confirmed = true;
      }
      drawTables();
      var table_name_received = "{{__('site.table')}}";
      if(table.table_name != ''){
        table_name_received = table.table_name;
      }
          
      var text = '';
      text= text+ table_name_received+' ';
      text=text + table.name+ ' ';
      if(table.category != ""){
        text = text + table.category+ ' ';
      }
      if(table.status == 'bill'){
        window.audio.play();
        text = text +" {{__('site.cerutNota')}}";
      }
      else if(table.status == 'turn'){
//         window.audio.play();
        text = text + "{{__('site.oneMore')}}";
      }
      else if(table.status == 'deals' || table.status == 'service' || table.status == 'order' || table.status =='command'){
//         window.audio.play();
        text = text + "{{__('site.order')}}";
      }else if(table.status == 'cancel-command'){
//         window.audio.play();
        text = text + "{{__('site.cancelCommandMessage')}}";
      }
      
      else if(table.status == 'cancel'){
//         window.audio.play();
        text = text +" {{__('site.cancel')}}";
      }
      else if(table.status == 'free'){
        // window.audio.play();
        // text = text + ' vrea sa anuleze comanda';
      }
      else if(table.status == 'occupied'){
        if(confirmed){
          text = text + "{{__('site.confirmed')}}";
        }
        else{
          text = text + "{{__('site.busy')}}";
        }
        
      }
      else{   
//         window.audio.play();
        text = text + "{{__('site.call')}}";
      }
      $('#notify_text').html(text);
      if(table.status != 'free'){
        $('.notification_container').css('right','50px');
        setTimeout(() => {
          $('.notification_container').css('right','-500px');
        }, 5000);
      }

      $(".category_select_button").each(function( index ) {
        if($(this).attr('data-id') == table.category_id && $(this).hasClass('bordered-gray-button') && $('#selector_all_tables').hasClass('bordered-gray-button')){
            $(this).find('.tables_categories_button_bullet').css('display','block');
          }
      });
    }
    function playSong(){
      myTimer();
      var calc_time = parseInt("{{$interval_audio}}")*1000;
      if(window.playSongInterval){
        window.stopPlayingSong();
      }
      window.playSongInterval = setInterval(myTimer, calc_time);

    }
    function myTimer(){
      window.audio.play();
    }
    window.stopPlayingSong = function(){
      clearInterval(window.playSongInterval);
    }

    function compare( a, b ) {
      if (a.status == 'free' && b.status != 'free' ){
        return 1;
      }
      if (a.status == 'occupied' && (b.status != 'free' && b.status != 'occupied') ){
        return 1;
      }
      if (a.status != 'free' && b.status == 'free' ){
        return -1;
      }
      if ((a.status != 'free' && a.status != 'occupied') && b.status =='occupied'){
        return -1;
      }
      return 0;
    }
    function drawTablesComplex(){
      
        var html = '';
        tables.sort( compare );
        tables.forEach(element => {

          var seconds = 0;
          var minutes = 0;
          var hours = 0;
          var now = moment(new Date());
          var end = moment(element.updated_at);
          seconds =  moment.duration(now.diff(end))._data.seconds;
          minutes =  moment.duration(now.diff(end))._data.minutes;
          hours =  moment.duration(now.diff(end))._data.hours;
          var table_name_received = "{{__('site.table')}}";
          if(element.table_name != ''){
            table_name_received = element.table_name;
          }
          if(element.status == 'free'){
            html = html + ''+
            '<div class="table_item category_'+element.category_id+'" data-table="'+element.id+'">'+
              ' <div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
                '  <div class="table_item_top_menu">'+
                '   <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                ' </div>'+
                '   <div class="table_item_category">'+element.category+'</div>';
                 if(element.waiter_dnd == 0){
                   html += '  <img class="table_item_image" src="images/blackTable.svg">';
                 } else{
                   html += '  <img class="table_item_image" src="images/dnd.png">';
                 }
                  html += '  <div class="table_item_action_button" onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.rezerve')}}</div>'+
              '  </div>'+
          ' </div>';
          }

         else if(element.status == 'occupied' || element.status == 'cancel-command'){
            html = html + ''+
            '<div class="table_item table_item_green category_'+element.category_id+'" data-table="'+element.id+'">'+
              '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
                '  <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                  '  <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                 '   <div class="table_item_category">'+element.category+'</div>';
                 if(element.waiter_dnd == 0){
                   html += '  <img class="table_item_image" src="images/blackTable.svg">';
                 } else{
                   html += '  <img class="table_item_image" src="images/dnd.png">';
                 }
                 html += '  <div class="table_item_action_button"  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.close')}}</div>';
                
              html += '  </div>'+
            ' </div>';
          }else if(element.status == "deals"){
            html = html + ''+
            '<div class="table_item table_item_red category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
               ' <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                   ' <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                   ' <div class="table_item_category">'+element.category+'</div>'+
                   ' <div class="table_item_time">Timp: <span id="waitime'+element.id+'">00:00</span></div>'+
                   ' <div class="table_item_action_button">';
                    if(element.dealTitle){
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick=\'seeDeals('+element.restaurant_id+','+element.id+','+waiter_conectat.id+',"'+element.dealTitle+'","'+element.dealDescription+'")\'>{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }else{
//                       aici o sa preluam in cazul in care nu preluam din socket, si dam refresh pe pagina, vom prelua dintr-un tabel
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }
          }else if(element.status == "service"){
            html = html + ''+
            '<div class="table_item table_item_red category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
               ' <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                   ' <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                   ' <div class="table_item_category">'+element.category+'</div>'+
                   ' <div class="table_item_time">Timp: <span id="waitime'+element.id+'">00:00</span></div>'+
                   ' <div class="table_item_action_button">';
                    if(element.serviceTitle){
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick=\'seeServices('+element.restaurant_id+','+element.id+','+waiter_conectat.id+',"'+element.serviceTitle+'","'+element.serviceDescription+'","'+element.price+'")\'>{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }else{
//                       aici o sa preluam in cazul in care nu preluam din socket, si dam refresh pe pagina, vom prelua dintr-un tabel
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }
            
                    
                      
          }else if(element.status == "order"){
            html = html + ''+
            '<div class="table_item table_item_red category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
               ' <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                   ' <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                   ' <div class="table_item_category">'+element.category+'</div>'+
                   ' <div class="table_item_time">Timp: <span id="waitime'+element.id+'">00:00</span></div>'+
                   ' <div class="table_item_action_button">';
                    if(element.orderName){
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick=\'seeOrder('+element.restaurant_id+','+element.id+','+waiter_conectat.id+',"'+element.orderName+'","'+element.orderMessage+'")\'>{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }else{
//                       aici o sa preluam in cazul in care nu preluam din socket, si dam refresh pe pagina, vom prelua dintr-un tabel
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.seeOrder')}}</div>'+
                      '  </div>';
                    }
          }else if(element.status == "command"){
            html = html + ''+
            '<div class="table_item table_item_red category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
               ' <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                   ' <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                   ' <div class="table_item_category">'+element.category+'</div>'+
                   ' <div class="table_item_time">Timp: <span id="waitime'+element.id+'">00:00</span></div>'+
                   ' <div class="table_item_action_button">';
                    if(element.products){
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm btn-see-command" restaurant_id = '+element.restaurant_id+' table_id = '+element.id+' order_id = '+element.order_id+' waiter_id = '+waiter_conectat.id+' products = \''+element.products+'\' total = '+element.total+' message = "'+element.message+'">{{__('site.seeOrder')}}</div>'+
                      ' </div>';
                    }else{
//                       aici o sa preluam in cazul in care nu preluam din socket, si dam refresh pe pagina, vom prelua dintr-un tabel
                      html= html+ "{{__('site.order')}}" + '</div>'+
                          '<div class="table_item_action_button_confirm"  onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.seeOrder')}}</div>'+
                      '</div>';
                    }
          }
          else{
            html = html + ''+
            '<div class="table_item table_item_red category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_item_top_number">'+table_name_received+' '+element.name+'</div>'+
               ' <div class="table_item_top_menu">'+
                   ' <button class="table_item_optn_popup" data-table="'+element.id+'"><img src="images/grayMenu.svg" /></button>'+
                   ' <button  onclick="closeTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')"><img src="images/grayClose.svg" /></button>'+
                 ' </div>'+
                   ' <div class="table_item_category">'+element.category+'</div>'+
                   ' <div class="table_item_time">Timp: <span id="waitime'+element.id+'">00:00</span></div>'+
                   ' <div class="table_item_action_button">';
                   if(element.status == 'bill'){
                     if(element.paytype == 'cash'){
                      html = html + "{{__('site.cash')}}";
                     }
                     else{
                      html = html + "{{__('site.card')}}";
                     }
                    }
                    else if (element.status == 'turn'){
                      html = html + "{{__('site.askMore')}}";
                    }
                    else if (element.status == 'cancel'){
                      html = html + "{{__('site.cancelComand')}}";
                    }
                    else{
                      html = html + "{{__('site.isCalling')}}";
                    }
                    if(element.status == 'bill'){
                          html= html+ '</div>'+
                            '<div class="table_item_action_button_confirm"  onclick="ocupyTableForBill('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.confirm')}}</div>'+
                        '  </div>';
                        }
                        else{
                          html= html+ '</div>'+
                              '<div class="table_item_action_button_confirm"  onclick="ocupyTable('+element.restaurant_id+','+element.id+','+waiter_conectat.id+')">{{__('site.confirm')}}</div>'+
                          '  </div>';
                        }
             
          }
          
          if(element.status != 'free' && element.status != 'occupied'){
            etimers[element.id] = new easytimer.Timer();
            var seconds = 0;
            var minutes = 0;
            var hours = 0;
            var now = moment(new Date());
            var end = moment(element.updated_at);
            seconds =  moment.duration(now.diff(end))._data.seconds;
            minutes =  moment.duration(now.diff(end))._data.minutes;
            hours =  moment.duration(now.diff(end))._data.hours;
            etimers[element.id].start({startValues: {
              seconds: seconds,
              minutes: minutes,
              hours: hours,
            }});
            var was_executed = false;
            etimers[element.id].addEventListener('secondsUpdated', function (e) {
                $('#waitime'+element.id).html(etimers[element.id].getTimeValues().toString(['minutes', 'seconds']));
                if(!was_executed){  
                  was_executed = true;
                  var current_cat_id = element.category_id;
                  var sound_url = $(".category_select_button[data-id="+current_cat_id+"]").attr('sound_url');
                  audio_elem = null;
                  if(sound_url != undefined){
                    audio_elem = new Audio(sound_url);
                  } else{
                    audio_elem = new Audio('images/never.mp3');
                  }
                  console.log(sound_url);
                  playSong(audio_elem);
                }
            });
          // timers[element.id] = setInterval(() => {
          //    var seconds = 0;
          //   var minutes = 0;
          //   var hours = 0;
          //   var now = moment(new Date());
          //   var end = moment(element.updated_at);
          //   seconds =  moment.duration(now.diff(end))._data.seconds;
          //   minutes =  moment.duration(now.diff(end))._data.minutes;
          //   hours =  moment.duration(now.diff(end))._data.hours;
          //   if(seconds < 10) seconds = '0'+seconds; 
          //   $('#waitime'+element.id).html(minutes+':'+seconds);
          // }, 1000);
        }

        });

      $('#container_mese').html(html);
      $('.category_select_button.bordered-button').click();
    }

    function drawTables(){
      if(afisaj == 'complex'){
        drawTablesComplex();
      }
      else{
        drawTablesSimple();
      }
    }

    function drawTablesSimple(){
      var html = '';
      tables.sort( compare );
      tables.forEach(element => {
        var table_name_received = "{{__('site.table')}}";
        if(element.table_name != ''){
          table_name_received = element.table_name;
        }
          
        if(element.status == 'free'){
            html = html + ''+
            '<div class="table_box category_'+element.category_id+'" data-table="'+element.id+'">'+
                '<div class="table_box_topptag">'+table_name_received+' '+element.name+'</div>'+
              '<div class="table_box_tablename">';
                 if(element.waiter_dnd == 0){
                   html += '  <img class="table_item_image" src="images/blackTable.svg">';
                 } else{
                   html += '  <img class="table_item_image" src="images/dnd.png">';
                 }
//                  html += ' <img class="header-logo" src="images/blackTable.svg">'+
               html += ' <span class="visible_on_mobile">'+table_name_received+' '+element.name+'</span>'+
               ' <span>'+element.category+'</span>'+
              '</div>'+
                '  <div class="table_box_status">{{__('site.free')}}</div>'+
            '</div> ';
        }
        else if(element.status == 'occupied'){
            html = html + ''+
            '<div class="table_box table_box_ocupat category_'+element.category_id+'" data-table="'+element.id+'">'+
              '<div class="table_box_topptag">'+table_name_received+' '+element.name+'</div>'+
              '<div class="table_box_tablename">'+
               ' <img class="header-logo" src="images/grayTable.svg">'+
               ' <span class="visible_on_mobile">'+table_name_received+' '+element.name+'</span>'+
               ' <span>'+element.category+'</span>'+
              '</div>'+
                '  <div class="table_box_status">{{__('site.busyTable')}}</div>'+
            '</div> ';
        }
        else{
          html = html + ''+
            '<div class="table_box table_box_action category_'+element.category_id+'" data-table="'+element.id+'">'+
              '<div class="table_box_topptag">'+table_name_received+' '+element.name+'</div>'+
              '<div class="table_box_tablename">'+
               ' <img class="header-logo" src="images/grayTable.svg">'+
               ' <span class="visible_on_mobile">'+table_name_received+' '+element.name+'</span>'+
               ' <span>'+element.category+'</span>'+
              '</div>'+
                '  <div class="table_box_status">';
              if(element.status == 'bill'){
                if(element.paytype == 'cash'){
                  html = html +" {{__('site.cash')}}";
                }
                else{
                  html = html + "{{__('site.card')}}";
                }
              }
              else if (element.status == 'turn'){
                html = html + "{{__('site.askMore')}}";
              }
              else if (element.status == 'cancel'){
                html = html + "{{__('site.cancelComand')}}";
              }
              else{
                html = html + "{{__('site.isCalling')}}";
              }
              html = html + ''+
               '</div>'+
            '</div> ';
        }     
      });
      $('#container_mese').html(html);
      $('.category_select_button.bordered-button').click();
    }

    $(document).on('click','.table_box',function(){
      var table_id = $(this).attr('data-table');
      var table = tables.find(x => x.id == table_id);

      var seconds = 0;
      var minutes = 0;
      var hours = 0;
      var now = moment(new Date());
      var end = moment(table.updated_at);
      seconds =  moment.duration(now.diff(end))._data.seconds;
      minutes =  moment.duration(now.diff(end))._data.minutes;
      hours =  moment.duration(now.diff(end))._data.hours;
      var table_name_received = "{{__('site.table')}}";
      if(table.table_name != ''){
        table_name_received = table.table_name;
      }
          
      var html = '';
          if (table.status == 'occupied'){
                html = html + '<div class="table-number table-number-ocupata">';
          }
          else if (table.status == 'free'){
                html = html + '<div class="table-number table-number-neocupata">';
          }
          else{
            html = html + '<div class="table-number">';
          }
         
          html = html + '' +
              '<span>'+table_name_received+' '+table.name+' '+table.category+'</span>'+
              '<div onclick="closePopup()" class="close_popup_button"><img src="images/closePoup.svg" /></div>'+
          ' </div>'+
            '<div class="table-buttons">';

          if(table.status != 'occupied' && table.status != 'free')  {
              html = html + ''+
              '<div class="wait_time_container">'+
              '<span class="wait_time_label">{{__('site.time')}}</span>'+
              '<span class="wait_time_value" id="basicUsage">'+hours+':'+minutes+':'+seconds +'</span>'+
              '</div>';
          }

          if(table.status != 'occupied' && table.status != 'free')  {
            html = html + '' +
            ' <div class="button_table full-button_table_action">';
                    if(table.status == 'bill'){
                      if(table.paytype == 'cash'){
                      html = html +" {{__('site.cash')}}";
                     }
                     else{
                      html = html + "{{__('site.card')}}";
                     }
                    }
                    else if (table.status == 'turn'){
                      html = html + "{{__('site.askMore')}}";
                    }
                    else if (table.status == 'cancel'){
                      html = html + "{{__('site.cancelComand')}}";
                    }
                    else{
                      html = html + "{{__('site.isCalling')}}";
                    }
                    if(table.status == 'bill'){
                      html = html + '' +
            '</div> <div class="button_table bordered-gray-button" onclick="ocupyTableForBill('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.confirmAction')}}</div>';
                    }
                    else{
                      html = html + '' +
                      '</div> <div class="button_table bordered-gray-button" onclick="ocupyTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.confirmAction')}}</div>';
                    }
          
          }
          html = html + '' +
          ' </div>'+
          ' <div class="table-buttons">';
      
      
          if(table.status == 'free'){
            html = html + '<div class="close_table_button button_table full-gray-button" onclick="ocupyTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.reserveTable')}}</div>';
          }
          else{
            html = html + '<div class="close_table_button button_table full-gray-button" onclick="closeTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.closeTable')}}</div>';
          }  
      
          if(table.waiter_dnd == 0){
            html += '<div class="table_item_action_button_dnd close_table_button button_table" waiter_dnd="0" restaurant_id="'+table.restaurant_id+'" table_id="'+table.id+'" waiter_id="'+waiter_conectat.id+'">{{__('site.block')}}</div>';
          } else{
            html +=  '<div class="table_item_action_button_dnd close_table_button button_table" waiter_dnd="1" restaurant_id="'+table.restaurant_id+'" table_id="'+table.id+'" waiter_id="'+waiter_conectat.id+'">{{__('site.unblock')}}</div>';
          }
       
         html = html + '' +
          '  </div>'+
        ' </div> ';

        $('#table_popup .table-item').html(html);
        $('.table_popup').css('display','flex');
          
        timer = setInterval(() => {
          var seconds = 0;
          var minutes = 0;
          var hours = 0;
          var now = moment(new Date());
          var end = moment(table.updated_at);
          seconds =  moment.duration(now.diff(end))._data.seconds;
          minutes =  moment.duration(now.diff(end))._data.minutes;
          hours =  moment.duration(now.diff(end))._data.hours;
          if(seconds < 10) seconds = '0'+seconds; 
          $('#basicUsage').html(minutes+':'+seconds);
        }, 1000);
       
    });

    $(document).on('click','.table_item_optn_popup',function(){
      var table_id = $(this).attr('data-table');
      var table = tables.find(x => x.id == table_id);
      console.log(table);
      var seconds = 0;
      var minutes = 0;
      var hours = 0;
      var now = moment(new Date());
      var end = moment(table.updated_at);
      seconds =  moment.duration(now.diff(end))._data.seconds;
      minutes =  moment.duration(now.diff(end))._data.minutes;
      hours =  moment.duration(now.diff(end))._data.hours;
      var table_name_received = "{{__('site.table')}}";
      if(table.table_name != ''){
        table_name_received = table.table_name;
      }
          
      var html = '';
          if (table.status == 'occupied'){
                html = html + '<div class="table-number table-number-ocupata">';
          }
          else if (table.status == 'free'){
                html = html + '<div class="table-number table-number-neocupata">';
          }
          else{
            html = html + '<div class="table-number">';
          }
         
          html = html + '' +
              '<span>'+table_name_received+' '+table.name+' '+table.category+'</span>'+
              '<div onclick="closePopup()" class="close_popup_button"><img src="images/closePoup.svg" /></div>'+
          ' </div>'+
            '<div class="table-buttons">';

          if(table.status != 'occupied' && table.status != 'free')  {
              html = html + ''+
              '<div class="wait_time_container">'+
              '<span class="wait_time_label">{{__('site.time')}}</span>'+
              '<span class="wait_time_value" id="basicUsage">'+minutes+':'+seconds +'</span>'+
              '</div>';
          }

          if(table.status != 'occupied' && table.status != 'free')  {
            html = html + '' +
            ' <div class="button_table full-button_table_action">';
                    if(table.status == 'bill'){
                      if(table.paytype == 'cash'){
                      html = html + "{{__('site.cash')}}";
                     }
                     else{
                      html = html + "{{__('site.card')}}";
                     }
                    }
                    else if (table.status == 'turn'){
                      html = html + "{{__('site.askMore')}}";
                    }
                    else if (table.status == 'cancel'){
                      html = html + "{{__('site.cancelComand')}}";
                    }
                    else{
                      html = html + "{{__('site.isCalling')}}";
                    }
                    if(table.status == 'bill'){
                      html = html + '' +
            '</div> <div class="button_table bordered-gray-button" onclick="ocupyTableForBill('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.confirmAction')}}</div>';
                    }
                    else{
                      html = html + '' +
                      '</div> <div class="button_table bordered-gray-button" onclick="ocupyTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.confirmAction')}}</div>';
                    }
          
          }
          html = html + '' +
          ' </div>'+
          ' <div class="table-buttons">';

      
          if(table.status == 'free'){
            html = html + '<div class="close_table_button button_table full-gray-button" onclick="ocupyTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.reserveTable')}}</div>';
          }
          else{
            html = html + '<div class="close_table_button button_table full-gray-button" onclick="closeTable('+table.restaurant_id+','+table.id+','+waiter_conectat.id+')">{{__('site.closeTable')}}</div>';
          }
        //buton vezi istoric
          html = html + '<div class="close_table_button button_table full-gray-button" onclick="seeHistory('+table.id+')">{{__('site.seeHistory')}}</div>';
                       
          if(table.waiter_dnd == 0){
            html += '<div class="table_item_action_button_dnd close_table_button button_table" waiter_dnd="0" restaurant_id="'+table.restaurant_id+'" table_id="'+table.id+'" waiter_id="'+waiter_conectat.id+'">{{__('site.block')}}</div>';
          } else{
            html +=  '<div class="table_item_action_button_dnd close_table_button button_table" waiter_dnd="1" restaurant_id="'+table.restaurant_id+'" table_id="'+table.id+'" waiter_id="'+waiter_conectat.id+'">{{__('site.unblock')}}</div>';
          }
         html = html + '' +
          '  </div>'+
        ' </div> ';

        $('#table_popup .table-item').html(html);
        $('.table_popup').css('display','flex');
          
        timer = setInterval(() => {
          var seconds = 0;
          var minutes = 0;
          var hours = 0;
          var now = moment(new Date());
          var end = moment(table.updated_at);
          seconds =  moment.duration(now.diff(end))._data.seconds;
          minutes =  moment.duration(now.diff(end))._data.minutes;
          hours =  moment.duration(now.diff(end))._data.hours;
          if(seconds < 10) seconds = '0'+seconds; 
          $('#basicUsage').html(minutes+':'+seconds);
        }, 1000);
       
    });


    $('.versiune_vizualizare').on('click',function(){
      if(afisaj == 'complex'){
        afisaj = 'simple';  
        $(this).find('span').text('Simple');
      }
      else{
        afisaj = 'complex';
        $(this).find('span').text('Complex');
      }
      drawTables();
    })


    $('.table_popup').on('click',function(e){
        if(event.target.id == 'table_popup'){
              clearInterval(timer);
              $('.table_popup').css('display','none');
              window.stopPlayingSong();
        }
    });
    $('.table_history').on('click',function(e){
        var html_insert = '';
        if(event.target.id == 'table_history'){
              clearInterval(timer);
              $('.table_history').css('display','none');
              $('.history_products').html(html_insert);
              window.stopPlayingSong();
        }
    });
    $('.notification_close').on('click',function(e){
      $('.notification_container').css('right','-500px');
    });

    $('.category_select_button').on('click',function(){
      $('.tables_categories_container .bordered-button').addClass('bordered-gray-button');
      $('.tables_categories_container .bordered-button').removeClass('bordered-button');
        $(this).removeClass('bordered-gray-button');
        $(this).addClass('bordered-button');
        $(this).find('.tables_categories_button_bullet').css('display','none');
        var id = $(this).attr('data-id');
      
        var sound_url = $(this).attr('sound_url');
        if(sound_url != undefined){
          window.audio = new Audio(sound_url);
        } else{
          window.audio = new Audio('images/never.mp3');
        }
      
        if(!id){
          $('.table_box').css('display','flex');
          $('.table_item').css('display','flex');
        }
        else{
          $('.table_box').css('display','none');
          $('.table_item').css('display','none');
          $('.table_box.category_'+id).css('display','flex');
          $('.table_item.category_'+id).css('display','flex');
        }
    });

    drawTablesComplex();

  });

  var res_id;
  var tab_id;
  var wai_id;
  var wai_dnd;

  function closeTable(restaurant_id,table_id,waiter_id,bill = false){
    window.restaurant_id = restaurant_id;
    window.table_id  = table_id;
    window.waiter_id  = waiter_id;
    $('.confirm_popup').css('display','flex');
    if(bill)
      $('.confirm_popup_subtitle').text("{{__('site.wannaClose')}}");
    else
      $('.confirm_popup_subtitle').text("{{__('site.sureWannaClose')}}");
    res_id = restaurant_id;
    tab_id = table_id ;
    wai_id = waiter_id ;
  }
  
  function seeHistory(table_id){
    $.ajax({
          method: 'POST',
          url: '/get-orders-by-table',
          data: {table_id},
          context: this, async: true, cache: false, dataType: 'json'
      }).done(function(res) {
          if (res.success == true) {
            $('.table_history').children('.confirm_popup_inner').children('.confirm_popup_title').text("{{__('site.areOrders')}}");
            var html_insert = '';
            jQuery.each( res.orders, function( i, order ) {
              html_insert += '<div class = "history_product">'+
                                '<div class = "history_title">{{__('site.newCommand')}}</div>'+
                                '<div class = "history_date">'+order.created_at+'</div>'+
                               ' <div class = "history_waiter">{{__('site.waiter')}} '+order.waiter.name+'</div>'+
                                '<div class = "history_products_items">';
                                if(order.products && order.products.length>0){
                                  jQuery.each(order.products, function( i, product ) {
                                    html_insert += '<div class = "history_product_item">';
                                      if(product.quantity!=null){
                                        html_insert += '<div class = "history_product_title">{{__('site.product')}}: '+product.name+' x'+product.quantity+'</div>';
                                      }else{
                                       html_insert += '<div class = "history_product_title">{{__('site.product')}}: '+product.name+'</div>';
                                      }
                                      html_insert +='<div class = "history_product_description">{{__('site.productDescription')}} '+product.description+'</div>';
                                      if(order.message){
                                        html_insert +='<div class = "history_product_description">{{__('site.message')}}: '+order.message+'</div>';
                                      }
                                    if(product.price){
                                           html_insert +=
                                              '<div class = "history_product_price">{{__('site.initialPrice')}} '+product.price+' lei</div>'+
                                              '</div>';
                                         
                                    }else{
                                      html_insert += '</div>';
                                    }
                                  })
                                }
                                if(order.price){
                                  html_insert +=
                                  '<div class = "history_price">{{__('site.price')}} '+order.price+' lei </div>'+    
                                     '</div>'+
                                  '</div>';
                                }else{
                                  html_insert +=
                                     '</div>'+
                                  '</div>';
                                }
              });
            $('.history_products').html(html_insert);
          } else {
            $('.table_history').children('.confirm_popup_inner').children('.confirm_popup_title').text("{{__('site.noOrders')}}");
          }
      })
      .fail(function(xhr, status, error) {
         if(xhr.responseJSON.message.indexOf("CSRF token mismatch") >= 0){
           window.location.reload();
         }
      });
    $('.table_popup').css('display','none');
    $('.table_history').css('display','flex');
    tab_id = table_id ;
  }
//   ******************************************************************************************
  function seeDeals(restaurant_id,table_id,waiter_id,dealTitle,dealDescription){
    window.restaurant_id = restaurant_id;
    window.table_id = table_id;
    window.waiter_id = waiter_id;
    $('.confirm_popup_deal').find('.confirm_popup_subtitle').text(dealTitle);
    $('.confirm_popup_deal').css('display','flex');
    res_id = restaurant_id;
    tab_id = table_id ;
    wai_id = waiter_id ;
  }
  function seeServices(restaurant_id,table_id,waiter_id,dealTitle,dealDescription,servicePrice){
    window.restaurant_id = restaurant_id;
    window.table_id = table_id;
    window.waiter_id = waiter_id;
    $('.confirm_popup_service').find('.confirm_popup_subtitle').text(dealTitle);
    $('.confirm_popup_service').find('#service_price').text("{{__('site.price')}} " +servicePrice);
    $('.confirm_popup_service').css('display','flex');
    res_id = restaurant_id;
    tab_id = table_id ;
    wai_id = waiter_id ;
  }
  function seeOrder(restaurant_id,table_id,waiter_id,orderName,orderMessage){
    window.restaurant_id = restaurant_id;
    window.table_id = table_id;
    window.waiter_id = waiter_id;
    $('.confirm_popup_order').find('.confirm_popup_subtitle').text("{{__('site.person')}} " + orderName);
    $('.confirm_popup_order').find('#messageOrder').text("{{__('site.hasOrdered')}} " + orderMessage);
    $('.confirm_popup_order').css('display','flex');
    res_id = restaurant_id;
    tab_id = table_id ;
    wai_id = waiter_id ;
  }
  $(document).on('click','.btn-see-command',function(){
    window.restaurant_id = JSON.parse($(this).attr('restaurant_id'));
    window.table_id = JSON.parse($(this).attr('table_id'));
    window.waiter_id = JSON.parse($(this).attr('waiter_id'));
    window.order_id = JSON.parse($(this).attr('order_id'));
    var tableProducts = JSON.parse($(this).attr('products'));
    $('.table_command').children('.confirm_popup_inner').children('.confirm_popup_title').text("{{__('site.areOrders')}}");
    var html_insert = '';
      jQuery.each( tableProducts, function( i, product ) {
      html_insert += '<div class = "command_product">';
                html_insert += '<div class = "command_product_item">'+
                  '<div class = "command_product_title">'+product.name+'</div>';
                
                  html_insert +=
                  '<div class = "command_product_price">'+product.price+' lei x'+product.quantity+'</div>'+
                  '</div>'+ '</div>';
               
             
    });
    if($(this).attr('message')!="null"){
       html_insert +='<div class = "message-text">{{__('site.message')}}: '+$(this).attr('message')+'</div>';
     }
    html_insert +='<div class = "total-container">'
      +'<div class = "total-text">TOTAL: </div>' +'<div class = "total-price">'+$(this).attr('total')+' lei </div>'+
                  '</div>';
     html_insert +=
       '</div>'+
    '</div>';
    $('.command_products').html(html_insert);
    $('.table_command').css('display','none');
    $('.table_command').css('display','flex');
  });
  $(document).on('click','.confirm_popup_button_order',function(){
    $('.confirm_popup_deal').css('display','none');
    $('.table_command').css('display','none');
    $('.command_products').html('');
    $('.confirm_popup_order').css('display','none');
    $('.confirm_popup_service').css('display','none');
    
    ocupyTableforCommand(window.restaurant_id,window.table_id,window.waiter_id);
  });

  
  $(document).on('click', '.table_item_action_button_dnd', function(){
    $('.confirm_popup_dnd').css('display','flex');
    wai_dnd = $(this).attr('waiter_dnd') ;
    if(wai_dnd == 0){
      $(".confirm_popup_dnd .confirm_popup_subtitle").text("{{__('site.sureBlockTableNotifications')}}");
    } else{
      $(".confirm_popup_dnd .confirm_popup_subtitle").text("{{__('site.sureUnlockTableNotifications')}}");
    }
    res_id = $(this).attr('restaurant_id');
    tab_id = $(this).attr('table_id') ;
    wai_id = $(this).attr('waiter_id') ;
  });
//   function dndTablePopup(restaurant_id,table_id,waiter_id){
//     $('.confirm_popup_dnd').css('display','flex');
//     alert(wai_dnd);
//     if(wai_dnd == 0){
//       $(".confirm_popup_dnd>.confirm_popup_subtitle").text("Ești sigur că dorești să blochezi notificarile la masă?");
//     } else{
//       $(".confirm_popup_dnd>.confirm_popup_subtitle").text("Ești sigur că dorești să deblochezi notificarile la masă?");
//     }
//     res_id = restaurant_id;
//     tab_id = table_id ;
//     wai_id = waiter_id ;
//   }
  
  function dndTable(){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[tab_id])
      etimers[tab_id].stop();
      //clearInterval(timers[table_id]);
      $.ajax({
          method: 'POST', // Type of response and matches what we said in the route
          url: '/api/dndTable', // This is the url we gave in the route
          data: {
            'restaurant_id' : res_id,
            'table_id' : tab_id,
            'waiter_id' : wai_id,
          }, 
        headers: {'Language': '{{app()->getLocale()}}'},
          success: function(response){ // What to do if we succeed
//             alert(response.table.waiter_dnd);
              if(response.table.waiter_dnd == 0){
                $(".table_item_action_button_dnd[table_id="+tab_id+"]").text("{{__('site.block')}}");
                $(".table_item_action_button_dnd[table_id="+tab_id+"]").attr('waiter_dnd', response.table.waiter_dnd);
              } else{
                $(".table_item_action_button_dnd[table_id="+tab_id+"]").text("{{__('site.unblock')}}");
                $(".table_item_action_button_dnd[table_id="+tab_id+"]").attr('waiter_dnd', response.table.waiter_dnd);
              }
              if(response.table.waiter_dnd == 1){
                $(".notification_container>.notification_text").text("{{__('site.blocked_table')}}");
              } else{
                $(".notification_container>.notification_text").text("{{__('site.unblocked_table')}}");
              }
              $('.confirm_popup_dnd').css('display','none');
              $('.notification_container').css('right','50px');
              setTimeout(() => {
                $('.notification_container').css('right','-500px');
              }, 3000);
          },
          error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          }
      });
  }

  function confirmActionPopup(){
    $('.confirm_popup').css('display','none');
    closeTableConfirm(window.restaurant_id,window.table_id,window.waiter_id);
  }
  function cancelCommandPopup(){
    $('.confirm_popup').css('display','none');
    $('.confirm_popup_deal').css('display','none');
    $('.confirm_popup_service').css('display','none');
    $('.confirm_popup_order').css('display','none');
    $('.table_command').css('display','none');
    cancelComandConfirm(window.restaurant_id,window.table_id,window.waiter_id);
  }

  function closeTableConfirm(restaurant_id,table_id,waiter_id){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[table_id])
    etimers[table_id].stop();
    //clearInterval(timers[table_id]);
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/api/leaveTable', // This is the url we gave in the route
        data: {
          'restaurant_id' : restaurant_id,
          'table_id' : table_id,
          'waiter_id' : waiter_id,
        }, 
        headers: {'Language': '{{app()->getLocale()}}'},
        success: function(response){ // What to do if we succeed
            $('.table_popup').css('display','none');
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
  }
  
   function cancelComandConfirm(restaurant_id,table_id,waiter_id){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[table_id])
    etimers[table_id].stop();
    //clearInterval(timers[table_id]);
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/api/cancelCommand', // This is the url we gave in the route
        data: {
          'restaurant_id' : restaurant_id,
          'table_id' : table_id,
          'waiter_id' : waiter_id,
          'order_id' : window.order_id,
        }, 
        headers: {'Language': '{{app()->getLocale()}}'},
        success: function(response){ // What to do if we succeed
            $('.table_popup').css('display','none');
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
  }

  function closeConfirmPopup(){
      $('.confirm_popup').css('display','none');
      window.stopPlayingSong();
    }
    function closeTableCommand(){
      $('.table_command').css('display','none');
      window.stopPlayingSong();
    }
   function closeTableHistory(){
      $('.table_history').css('display','none');
      window.stopPlayingSong();
    }

  function closePopup(){
      $('.table_popup').css('display','none');
      clearInterval(timer);
      window.stopPlayingSong();
    }
  
  function closeConfirmPopupDnd(){
    $('.confirm_popup_dnd').css('display','none');
    window.stopPlayingSong();
  }
  
  function CancelCloseTable(){
    $('.confirm_popup').css('display','none');
  }


  function ocupyTableForBill(restaurant_id,table_id,waiter_id){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[table_id])
    etimers[table_id].stop();
    //clearInterval(timers[table_id]);
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/api/occupyTable', // This is the url we gave in the route
        data: {
          'restaurant_id' : restaurant_id,
          'table_id' : table_id,
          'waiter_id' : waiter_id,
        }, 
        headers: {'Language': '{{app()->getLocale()}}'},
        success: function(response){ // What to do if we succeed
            $('.table_popup').css('display','none');
            closeTable(restaurant_id,table_id,waiter_id,true);
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
  }

  function ocupyTable(restaurant_id,table_id,waiter_id){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[table_id])
    etimers[table_id].stop();
    //clearInterval(timers[table_id]);
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/api/occupyTable', // This is the url we gave in the route
        data: {
          'restaurant_id' : restaurant_id,
          'table_id' : table_id,
          'waiter_id' : waiter_id,
        }, 
        headers: {'Language': '{{app()->getLocale()}}'},
        success: function(response){ // What to do if we succeed
            $('.table_popup').css('display','none');
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
  }
  function ocupyTableforCommand(restaurant_id,table_id,waiter_id){
    clearInterval(timer);
    window.stopPlayingSong();
    if(etimers[table_id])
    etimers[table_id].stop();
    //clearInterval(timers[table_id]);
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/api/occupyTable', // This is the url we gave in the route
        data: {
          'restaurant_id' : restaurant_id,
          'table_id' : table_id,
          'waiter_id' : waiter_id,
          'order_id' : window.order_id,
        }, 
        headers: {'Language': '{{app()->getLocale()}}'},
        success: function(response){ // What to do if we succeed
            $('.table_popup').css('display','none');
          
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
  }
  

</script>

@endpush