<div class="btn btn-xs btn-primary btnGenerateApiKey" restaurant_id="{{$entry->getKey()}}" target="_blank"  style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px">
    <i style="font-size:17px;margin-right: 5px;" class="fa fa-key"></i>
    Generate API KEY
</div>
<div class="btn btn-xs btn-primary btnCopyApiKey" target="_blank" @if($entry->api_key != null) style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px;" @else style="background-color:#009688;border-color:#009688;margin-right:8px;padding:10px;margin-top: 10px;display: none;" @endif>
    <i style="font-size:17px;margin-right: 5px;" class="fa fa-copy"></i>
    <div style="display: none !important;" class="content-api-key">{{$entry->api_key}}</div>
    Copy API KEY
</div>

