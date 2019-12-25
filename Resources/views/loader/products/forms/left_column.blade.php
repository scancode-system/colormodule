<div class="form-group">
	{{ Form::label('color_id', 'Cor') }}
	<div class="input-group">
		<span class="input-group-prepend" data-toggle="modal" data-target="#modal_create_color">
			{{ Form::button('<i class="fa fa-plus-square-o"></i>', ['class' => 'btn btn-primary']) }}
		</span>
		{{ Form::select('color_id', $select_colors, null, ['class' => 'form-control', 'placeholder' => 'Cor indefinida']) }}
	</div>
</div>

