@if ($crud->hasAccess('delete'))
	<a href="javascript:void(0)" onclick="deleteEntry()" data-route="{{ url($crud->route.'/'.$entry->getKey()) }}" class="btn btn-xs btn-default" data-toggle="modal" data-target="#deleteModal-{{$entry->getKey()}}" data-button-type="delete"><i class="fa fa-trash"></i> {{ trans('backpack::crud.delete') }}</a>
  <div class="modal fade" id="deleteModal-{{$entry->getKey()}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-{{$entry->getKey()}}">{{ trans('backpack::crud.delete_modal_title') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          {{ trans('backpack::crud.delete_modal_text') }}
        </p>
        <input style = "width:100%;" type = "text" id = "input-delete-{{$entry->getKey()}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('backpack::crud.cancel') }}</button>
        <button type="button" class="btn btn-primary" onclick = "confirm_delete('{{$entry->getKey()}}','{{ url($crud->route.'/'.$entry->getKey()) }}')">{{ trans('backpack::crud.delete') }} </button>
      </div>
    </div>
  </div>
</div>
@endif

<script>
  function deleteEntry(){
    $('#myInput').trigger('focus');
  }
	if (typeof deleteEntry != 'function') {
	  $("[data-button-type=delete]").unbind('click');

	  function deleteEntry(button) {
	      // ask for confirmation before deleting an item
	      // e.preventDefault();
	      var button = $(button);
	      var route = button.attr('data-route');
	      var row = $("#crudTable a[data-route='"+route+"']").closest('tr');
  
	      if (confirm("{{ trans('backpack::crud.delete_confirm') }}") == true) {
	         
	      } else {
	      }
      }
	}
  
  function confirm_delete(id, route){
    if($('#input-delete-'+id).val().toLowerCase() =="delete"){
        $.ajax({
	              url: route,
	              type: 'DELETE',
	              success: function(result) {
		              if (result != 1) {
		              	// Show an error alert
		                  new PNotify({
		                      title: "{{ trans('backpack::crud.delete_confirmation_not_title') }}",
		                      text: "{{ trans('backpack::crud.delete_confirmation_not_message') }}",
		                      type: "warning"
		                  });
		              } else {
		                  // Show a success alert with the result
		                  new PNotify({
		                      title: "{{ trans('backpack::crud.delete_confirmation_title') }}",
		                      text: "{{ trans('backpack::crud.delete_confirmation_message') }}",
		                      type: "success"
		                  });

		                  // Hide the modal, if any
		                  $('.modal').modal('hide');
                      location.reload();

		                  // Remove the details row, if it is open
		                  if (row.hasClass("shown")) {
		                      row.next().remove();
		                  }

		                  // Remove the row from the datatable
		                  row.remove();
		              }
	              },
	              error: function(result) {
	                  // Show an alert with the result
	                  new PNotify({
	                      title: "{{ trans('backpack::crud.delete_confirmation_not_title') }}",
	                      text: "{{ trans('backpack::crud.delete_confirmation_not_message') }}",
	                      type: "warning"
	                  });
	              }
	          });
      }else{
         // Show an alert telling the user we don't know what went wrong
	          new PNotify({
	              title: "You must enter the word delete in the field",
	              text: "{{ trans('backpack::crud.delete_confirmation_not_deleted_message') }}",
	              type: "info"
	          });
      }
  }

	// make it so that the function above is run after each DataTable draw event
	// crud.addFunctionToDataTablesDrawEventQueue('deleteEntry');
</script>