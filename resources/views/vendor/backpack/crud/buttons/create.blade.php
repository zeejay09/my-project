@if ($crud->hasAccess('create'))
	<a href="{{ url($crud->route.'/create') }}" class="btn btn-primary ladda-button" data-style="zoom-in"><!-- <span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }} {{ $crud->entity_name }}</span> -->
		<span class="ladda-label"><i class="fa fa-plus"></i> {{ trans('backpack::crud.add') }}</span></a>
@endif