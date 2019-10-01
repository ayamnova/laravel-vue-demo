<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
		<script>window.Laravel = { csrfToken: '{{csrf_token() }}' }</script>
        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="app">
                    Laravel
					<example-component></example-component>
				</div>
            </div>
        </div>
	<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>
