@layout('templates/template')

@section('title')
	{{ Lang::line('users::users.title_edit') }}
@endsection

@section('content')
<div>
	@widget('users::form.edit', $id)
</div>
@endsection