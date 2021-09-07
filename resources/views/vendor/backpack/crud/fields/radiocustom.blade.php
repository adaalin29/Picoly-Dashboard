<!-- radio -->
  <script src="/js/jquery.js" type="text/javascript"></script>

@php
    $optionPointer = 0;
    $optionValue = old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '';

    // if the class isn't overwritten, use 'radio'
    if (!isset($field['attributes']['class'])) {
        $field['attributes']['class'] = 'radio';
    }
@endphp

<div @include('crud::inc.field_wrapper_attributes') >

    <div>
        <label>{!! $field['label'] !!}</label>
        @include('crud::inc.field_translatable_icon')
    </div>
    @if( isset($field['options']) && $field['options'] = (array)$field['options'] )

        @foreach ($field['options'] as $value => $label )
            @php ($optionPointer++)

            @if( isset($field['inline']) && $field['inline'] )

            <label class="radio-inline" for="{{$field['name']}}_{{$optionPointer}}">
                <input  type="radio"
                        id="{{$field['name']}}_{{$optionPointer}}"
                        name="{{$field['name']}}"
                        value="{{$value}}"
                        @include('crud::inc.field_attributes')
                        {{$optionValue == $value ? ' checked': ''}}
                        > {!! $label !!}
            </label>

            @else

            <div class="radio">
                <label for="{{$field['name']}}_{{$optionPointer}}">
                    <input type="radio" id="{{$field['name']}}_{{$optionPointer}}" name="{{$field['name']}}" value="{{$value}}" {{$optionValue == $value ? ' checked': ''}}> {!! $label !!} 
                </label>
            </div>

            @endif

        @endforeach
      <div id = "layout_1_image" style = "display:none;">
        <img src = "/images/layout_produs.jpg">
      </div>
      <div id = "layout_2_image" style = "display:none;">
        <img src = "/images/layout_serviciu.jpg">
      </div>
      <div id = "layout_3_image" style = "display:none;">
        <img src = "/images/layout_oferte.jpg">
      </div>
          
  </div>

    @endif

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif

</div>
<script>
  $(document).ready(function(){
     $('.menu-date').parent().hide();
  });
  if($("input[name='promotion']:checked")){
    console.log('yes');
  }
  $("input[name='promotion']").change(function(){
    if($('.menu-date').parent().hide()){
      $('.menu-date').parent().show();
    }else{
       $('.menu-date').parent().hide();
    }
  })
  if($("input:checked").prev('layout_1')){
    $('.digital_menu').parent().parent().show();
     $('#layout_1_image').show(300).fadeIn();
     $('.menu_url').parent().hide();
  }else if($("input:checked").prev('layout_2')){
    $('#layout_2_image').show(300).fadeIn();
    $('.digital_menu').parent().parent().hide();
    $('.menu_url').parent().hide();
  }else{
    $('#layout_3_image').show(300);
    $('.digital_menu').parent().parent().show();
    $('.menu_url').parent().hide();
  }
  
   $('.digital_menu').click(function(){
       if($('.digital_menu').is(':checked')){
         $('.menu_url').parent().show();
        }else{
          $('.menu_url').parent().hide();
        }
   });
    $('#layout_1').click(function(){
       $('#layout_2_image').hide(300).fadeOut();
       $('#layout_3_image').hide(300).fadeOut();
       $('#layout_1_image').show(300).fadeIn();
       $('.digital_menu').parent().parent().show();
       $('.menu_url').parent().hide();
    });
    $('#layout_2').click(function(){
       $('#layout_1_image').hide(300).fadeOut();
       $('#layout_3_image').hide(300).fadeOut();
       $('#layout_2_image').show(300).fadeIn();
       $('.digital_menu').parent().parent().show();
       $('.menu_url').parent().hide();
    });
  $('#layout_3').click(function(){
       $('#layout_1_image').hide(300).fadeOut();
       $('#layout_2_image').hide(300).fadeOut();
       $('#layout_3_image').show(300).fadeIn();
       $('.digital_menu').parent().parent().hide();
       $('.menu_url').parent().hide();
    });
 
</script>
