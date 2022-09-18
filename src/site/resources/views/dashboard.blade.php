<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin dashboard</title>
	@livewireStyles
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
	<!-- Chartisan -->
	<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
	<!-- Your application script -->
</head>
<body>
	<div class="container mt-3">
		<div id="chart-university" style="height: 300px;"></div>
		<div id="chart-celec" style="height: 300px;"></div>
	</div>
	<div class="container mt-3">
		<div class="row">
			<h1 class="mt-3">Users: </h1>
			@livewire("user-table")
			<hr/>
			<br/>
			<h1 class="mt-3">Messages: </h1>
			@livewire("message-table")
			<hr/>
			<br/>
			<h1 class="mt-3">Comments: </h1>
			@livewire("comment-table")
			<hr/>
			<h1>Mailling: </h1>
			@livewire('mail')
		</div>
	</div>
</body>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>
	new Chartisan({
		el: '#chart-university',
		url: "@chart('users_usthb_chart')",
		hooks: new ChartisanHooks().colors(['#ECC94B', '#4299E1']).title("University")
	});
	new Chartisan({
		el: '#chart-celec',
		url: "@chart('users_celec_chart')",
		hooks: new ChartisanHooks().colors(['#329ea8', '#d45f84']).title("Celec members")
	});
</script>
</html>