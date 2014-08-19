<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Er det vaskedag?</title>

	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
	<div class="app-wrapper">
		
		@if($washingday)
			<h1 class="is-it-washingday">Ja</h1>
			<h3 class="is-it-washingday-subtitle">Det er vaskedag i dag!</h3>
		@else
			<h1 class="is-it-washingday">Nej</h1>
			<h3 class="is-it-washingday-subtitle">Det er ikke vaskedag i dag.</h3>
		@endif

		<h2 class="upcomming-washing-days-title">Kommende vaskedage:</h2>
		<ul class="upcomming-washing-days">

			@if($washingdays->isEmpty())
				<p>Der er ingen kommende vaskedage</p>
			@else
				@foreach($washingdays as $washingday)
					<li>{{ $washingday->format() }}</li>
				@endforeach
			@endif
		</ul>

	</div>
</body>
</html>