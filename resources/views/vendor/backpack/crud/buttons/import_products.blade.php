<form class="btn btn-xs btn-primary form-upload-menu" style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px" action="import-menu" method="post" enctype="multipart/form-data">
  <input type="hidden" name="restaurant_id" value="{{$entry->getKey()}}"/>
  <input type="file" name="import_file" accept=".csv" class="input-file-upload-menu"/>
  <button type="button" class="import-menu" style="margin-top: 10px; background-color: #605ca8; border-color: #605ca8;">
    <i style="font-size:17px;margin-right: 5px;" class="fa fa-upload"></i>
   Import menu
  </button>
</form>

