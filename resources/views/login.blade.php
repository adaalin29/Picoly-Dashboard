@extends('parts.template')

@section('title', 'Homepage')

@section('content')

<main class="">
  <div class="login-content">
    <img class="login-logo" src="images/logored.png">
    <div class="login-page-desc">
      Completează-ți datele de logare și începe experiența de a-i servi pe clienții tăi folosind aplicația Picoly.
    </div>
    <form id="form-login" action='{{ action("HomeController@signin") }}' method="post">
    {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Parola">
      <div class="error"></div>
      <div class="container-rememberme">
        <input type="checkbox" id="remember" name="remember"/>
        <label for="remember">Ține-mă minte</label>
      </div>
      <button style="margin-bottom:20px" type="button" class="btnLogin full-button">Log in</button>
    </form>
  </div>
</main>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
  $(document).on('keypress',function(e) {
      if(e.which == 13) {
          $(".btnLogin").trigger('click');
      }
  });
  $(".btnLogin").on('click', function (event) {
    $(this).attr('disabled', 'disabled');
    $.ajax({
      method: 'POST',
      url: $(this).parent().attr("action"),
      data: $(this).parent().serializeArray(),
      context: this,
      async: true,
      cache: false,
      dataType: 'json'
    }).done(function (res) {
      if (res.success == true) {
            window.location.href='/';
      } else {
        $('.error').html('<div style="padding:10px">'+res.error+'</div>');
        $(".btnLogin").prop('disabled', false);
      }
    });
    return;
  });
  });
</script>

@endpush