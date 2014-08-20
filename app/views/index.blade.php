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

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-29049796-2', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>