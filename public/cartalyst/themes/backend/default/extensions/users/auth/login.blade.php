@layout('templates/blank')

@section('links')
	{{ Theme::asset('users::css/login.less') }}
@endsection

@section('body_scripts')
	{{ Theme::asset('users::js/login.js') }}
@endsection

@section('title')
	Login
@endsection

@section('content')
	<section id="login">

		<img src="{{ Theme::asset('img/brand.png') }}" title="Cartalyst" />
		<h1>cartalyst.settings.general.store_name</h1>

		{{ Form::open(null, 'POST', array('id' => 'login-form', 'class' => 'form-horizontal')) }}

			<!-- remove this later when we get errors via js ? -->
			<p class="errors"></p>
			<!-- end remove -->

			<input type="email" name="email" id="email" placeholder="{{ __('users::users.email') }}" autocomplete="off" />

			<div class="input-append">
				<input type="password" name="password" id="password" placeholder="{{ __('users::users.password') }}" autocomplete="off" /><button class="btn append" type="submit">{{ __('users::users.btn_login') }}</button>
			</div>

			<p class="help-block"><a href="{{ url(ADMIN.'/reset_password') }}">{{ __('users::users.reset_password') }}</a></p>

		{{ Form::close() }}

	</section>
@endsection