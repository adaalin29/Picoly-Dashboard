<!-- array input -->

<?php
    $max = isset($field['max']) && (int) $field['max'] > 0 ? $field['max'] : -1;
    $min = isset($field['min']) && (int) $field['min'] > 0 ? $field['min'] : -1;
    $item_name = strtolower(isset($field['entity_singular']) && !empty($field['entity_singular']) ? $field['entity_singular'] : $field['label']);

    $items = old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '';

    // make sure not matter the attribute casting
    // the $items variable contains a properly defined JSON
    if (is_array($items)) {
        if (count($items)) {
            $items = json_encode($items);
        } else {
            $items = '[]';
        }
    } elseif (is_string($items) && !is_array(json_decode($items))) {
        $items = '[]';
    }
  $sounds = \App\Models\Sound::get();

?>
<div ng-app="backPackTableApp" ng-controller="tableController" @include('crud::inc.field_wrapper_attributes') >

    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')

    <input class="array-json" type="hidden" id="{{ $field['name'] }}" name="{{ $field['name'] }}">

    <div class="array-container form-group">

        <table class="table table-bordered table-striped m-b-0" ng-init="field = '#{{ $field['name'] }}'; items = {{ $items }}; max = {{$max}}; min = {{$min}}; maxErrorTitle = '{{trans('backpack::crud.table_cant_add', ['entity' => $item_name])}}'; maxErrorMessage = '{{trans('backpack::crud.table_max_reached', ['max' => $max])}}'">

            <thead>
                <tr>

                    @foreach( $field['columns'] as $prop )
                    <th style="font-weight: 600!important;">
                        {{ $prop }}
                    </th>
                    @endforeach
                    <th class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-sort"></i> --}} </th>
                    <th class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-trash"></i> --}} </th>
                </tr>
            </thead>

            <tbody ui-sortable="sortableOptions" ng-model="items" class="table-striped">

                <tr ng-repeat="item in items" class="array-row">
<!-- AICI MODIFIC!!!!!!!!!!!!!!!! -->
                        @php
                        $table_locations = App\Models\ProductCategories::get();
                        $table_names = App\Models\TableNames::get();
                        @endphp
                      <td>
                      <select class="form-control input-sm select-table-category" ng-model="item.name" selected_id="item.id">
                          @foreach($table_locations as $category)
                            <option value = "{{$category->id}}">{{$category->getTranslation('name', (request()->get('locale')?:'en'), true)}}</option>
                          @endforeach
                      </select>
                    </td>
                    <td>
                         <select class="form-control input-sm" ng-model="item.name_table" placeholder="Name of field">
                          @foreach($table_names as $category)
                            <option value = "{{$category->id}}">{{$category->getTranslation('name', (request()->get('locale')?:'en'), true)}}</option>
                          @endforeach
                      </select>
                    </td>
                     <td>
                        <input class="form-control input-sm" placeholder="0" type="number" min="0" ng-model="item.number">
                    </td>
<!-- AICI MODIFIC!!!!!!!!!!!!!!!! -->
                    <td>
                        <select class="form-control input-sm select-sound" ng-model="item.sound_table" placeholder="Click to play sound">
                          @foreach($sounds as $sound_item)
                            <option value = "{{$sound_item->id}}" url="/storage/{{$sound_item->sound}}">{{$sound_item->title}}</option>
                          @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="disable-call-waiter" ng-model="item.disable_call_waiter" type="checkbox"/>
                    </td>
                    <td>
                        <input class="activate-add-cart" ng-model="item.activate_add_cart" type="checkbox"/>
                    </td>
                    <td>
                        <input class="show-personal-details" ng-model="item.show_personal_details" type="checkbox"/>
                    </td>
                    <td ng-if="max == -1 || max > 1">
                        <span class="btn btn-sm btn-default sort-handle"><span class="sr-only">sort item</span><i class="fa fa-sort" role="presentation" aria-hidden="true"></i></span>
                    </td>
                    <td ng-if="max == -1 || max > 1">
                        <button ng-hide="min > -1 && $index < min" class="btn btn-sm btn-default" type="button" ng-click="removeItem(item);"><span class="sr-only">delete item</span><i class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-default copy-url-generate" type="button" ng-click="copyItem(item)"><span class="sr-only">Copy url</span><i class="fa fa-copy" role="presentation" aria-hidden="true"></i></button>
                    </td>
                </tr>

            </tbody>

        </table>

        <div class="array-controls btn-group m-t-10">
            <button ng-if="max == -1 || items.length < max" class="btn btn-sm btn-default" type="button" ng-click="addItem()"><i class="fa fa-plus"></i> {{trans('backpack::crud.add')}} {{ $item_name }}</button>
        </div>

    </div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    {{-- @push('crud_fields_styles')
        {{-- YOUR CSS HERE --}}
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        {{-- YOUR JS HERE --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-sortable/0.14.3/sortable.min.js"></script>
        <script>

            window.angularApp = window.angularApp || angular.module('backPackTableApp', ['ui.sortable'], function($interpolateProvider){
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });

            window.angularApp.controller('tableController', function($scope){

                $scope.sortableOptions = {
                    handle: '.sort-handle',
                    axis: 'y',
                    helper: function(e, ui) {
                        ui.children().each(function() {
                            $(this).width($(this).width());
                        });
                        return ui;
                    },
                };

                $scope.addItem = function(){

                    if( $scope.max > -1 ){
                        if( $scope.items.length < $scope.max ){
                            var item = {category_id :  Math.floor(Math.random()  * (9999 - 1000) + 1000)};
                            $scope.items.push(item);
                        } else {
                            new PNotify({
                                title: $scope.maxErrorTitle,
                                text: $scope.maxErrorMessage,
                                type: 'error'
                            });
                        }
                    }
                    else {
                        var item = {category_id : Math.floor(Math.random()  * (9999 - 1000) + 1000)};
                        $scope.items.push(item);
                    }
                }

                $scope.removeItem = function(item){
                    var index = $scope.items.indexOf(item);
                    $scope.items.splice(index, 1);
                }
                
                $scope.copyItem = function(item){
                  console.log(item);
                  var cat_id = item.name;
                  var rest_id = location.pathname.split("/")[3];
                  var url_app = "picoly://menu/qr?rest_id="+rest_id+"&t_id="+cat_id;
                  copyToClipboard(url_app);
                }

                $scope.$watch('items', function(a, b){

                    if( $scope.min > -1 ){
                        while($scope.items.length < $scope.min){
                            $scope.addItem();
                        }
                    }

                    if( typeof $scope.items != 'undefined' ){

                        if( typeof $scope.field != 'undefined'){
                            if( typeof $scope.field == 'string' ){
                                $scope.field = $($scope.field);
                            }
                            $scope.field.val( $scope.items.length ? angular.toJson($scope.items) : null );
                        }
                    }
                }, true);

                if( $scope.min > -1 ){
                    for(var i = 0; i < $scope.min; i++){
                        $scope.addItem();
                    }
                }
            });

            angular.element(document).ready(function(){
                angular.forEach(angular.element('[ng-app]'), function(ctrl){
                    var ctrlDom = angular.element(ctrl);
                    if( !ctrlDom.hasClass('ng-scope') ){
                        angular.bootstrap(ctrl, [ctrlDom.attr('ng-app')]);
                    }
                });
            })
             $(document).on('change','.select-sound',function(){
                var selected_url = $(this).children("option:selected").attr('url');
                var audio = new Audio(selected_url);
                audio.play();
            });
           function copyToClipboard(url_app) {
            var $temp = $("<input class='test'>");
            $("body").append($temp);
            $temp.val(url_app).select();
            document.execCommand("copy");
            new PNotify({
                type: "success",
                title: "Menu URL",
                text: "MENU URL successfully copied: "+url_app
            });
            $temp.remove();
          }
        </script>

    @endpush
@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
