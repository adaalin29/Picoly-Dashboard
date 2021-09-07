/*
*
* Backpack Crud / List
*
*/

jQuery(function($){
  $(document).ready(function(){
    function copyToClipboard(element) {
      var $temp = $("<input class='test'>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      new PNotify({
          type: "success",
          title: "Api Key",
          text: "Api key successfully copied: "+$(element).text()
      });
      $temp.remove();
    }
    $(document).on("click", ".import-menu", function(event){
      if(confirm("Sigur doresti sa faci importul?Fisierul de import trebuie sa aiba formatul cerut si sa fie verificat inainte de import. Modificarile vor fi ireversibile!")){
        var formData = new FormData($(this).closest('form')[0]);
        event.preventDefault();
        $.ajax({
            method: 'POST',
            url: $(this).parent().attr("action"),
            data: formData,
            processData: false,
            contentType: false,
            context: this, async: true, cache: false, dataType: 'json'
        }).done(function(res) {
            if (res.success == true) {
               new PNotify({
                  type: "success",
                  title: "Success",
                  text: res.msg
               });
              $(this).closest('form').trigger("reset");
            } else { 
               new PNotify({
                  type: "error",
                  title: "Eroare",
                  text: res.msg
               });
            }
        });
        return false;
      }
      return false;
    });
    $(document).on("click", ".btnCopyApiKey", function(){
      copyToClipboard($(this).find($(".content-api-key")));
    });
     $(document).on("click", ".btnGenerateApiKey", function(){
       var vthis = $(this);
        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            url: '/admin/generate-api-key', // This is the url we gave in the route
            data: {
              'restaurant_id' : $(this).attr('restaurant_id'),
            }, 
            headers: {'Language': '{{app()->getLocale()}}'},
            success: function(response){ // What to do if we succeed
                if(response.success == true){
                  new PNotify({
                      type: "success",
                      title: "Success",
                      text: response.msg
                  });
                  var new_html = 
                      '<div class="btn btn-xs btn-primary btnCopyApiKey" target="_blank"  style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px">'+
                          '<i style="font-size:17px;margin-right: 5px;" class="fa fa-copy"></i>'+
                          '<div style="display: none !important;" class="content-api-key">'+response.api_key+'</div>Copy API KEY'+
                      '</div>';
                  vthis.parent().find(".btnCopyApiKey").replaceWith(new_html);
                  vthis.parent().find(".btnCopyApiKey").show();
                } else{
                  new PNotify({
                      type: "error",
                      title: "Eroare",
                      text: response.msg
                  });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
       
     });
  });
    'use strict';
});
