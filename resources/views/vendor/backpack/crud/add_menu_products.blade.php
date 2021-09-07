@extends('backpack::layout')

@section('header')
	<section class="content-header">
	  <h1>
        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
        <small>{!! $crud->getSubheading() ?? trans('backpack::crud.add').' '.$crud->entity_name !!}.</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
	    <li><a href="{{ url($crud->route).'?id_category='.request()->id_category.'&layout='.request()->layout }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
	    <li class="active">{{ trans('backpack::crud.add') }}</li>
	  </ol>
	</section>
@endsection

@section('content')
@if ($crud->hasAccess('list'))
	<a href="{{ url($crud->route).'?id_category='.request()->id_category.'&layout='.request()->layout }}" class="hidden-print"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a>
@endif

<div class="row m-t-20">
	<div class="{{ $crud->getCreateContentClass() }}">
		<!-- Default box -->

		@include('crud::inc.grouped_errors')

		  <form method="post"
		  		action="{{ url($crud->route) }}"
				@if ($crud->hasUploadFields('create'))
				enctype="multipart/form-data"
				@endif
		  		>
		  {!! csrf_field() !!}
		  <div class="col-md-12">

		    <div class="row display-flex-wrap">
		      <!-- load the view from the application if it exists, otherwise load the one in the package -->
		      @if(view()->exists('vendor.backpack.crud.form_content'))
		      	@include('vendor.backpack.crud.form_content', [ 'fields' => $crud->getFields('create'), 'action' => 'create' ])
		      @else
		      	@include('crud::form_content', [ 'fields' => $crud->getFields('create'), 'action' => 'create' ])
		      @endif
		    </div><!-- /.box-body -->
		    <div class="">

                <div id="saveActions" class="form-group">

                  <input type="hidden" name="save_action" value="{{ $saveAction['active']['value'] }}">

                  <div class="btn-group">

                      <button type="submit" class="btn btn-success">
                          <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                          <span data-value="{{ $saveAction['active']['value'] }}">{{ $saveAction['active']['label'] }}</span>
                      </button>

                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aira-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">&#x25BC;</span>
                      </button>

                      <ul class="dropdown-menu">
                          @foreach( $saveAction['options'] as $value => $label)
                            @if($value != "save_and_edit")
                              <li><a href="javascript:void(0);" data-value="{{ $value }}">{{ $label }}</a></li>
                            @endif
                          @endforeach
                      </ul>

                  </div>

                  <a href="{{ $crud->hasAccess('list') ? url($crud->route).'?id_category='.request()->id_category.'&layout='.request()->layout : url()->previous() }}" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;{{ trans('backpack::crud.cancel') }}</a>
              </div>

		    </div><!-- /.box-footer-->

		  </div><!-- /.box -->
		  </form>
	</div>
</div>
@push('after_scripts')
    <script>
      $(document).ready(function(){
        $("input[name=milliliters]").keyup('input', function(e) {
          console.log(e.keyCode);
            if(e.keyCode != 8){
              var input_val = $(this).val().toLowerCase();
              input_val = input_val.replace(' ml','');
              input_val = input_val+' ml';
              $("input[name=milliliters]").val(input_val);
            }
        });
      });
    </script>
@endpush
@endsection
