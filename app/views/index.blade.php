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

	<!-- Fork me on Github -->
	<a href="https://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
	<p style="position: absolute; top: 70px; right: 70px; transform: rotate(45deg)">(lol)</p>

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