<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	@if ($errors->any())
      <div style="padding: 1%; background: #fab6b6; width: 40%; text-align: initial; font-weight: bolder; border-radius: 5px;">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
	<form method="POST" action="{{ url('admin/login') }}">
		@csrf
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<button type="submit">Login</button>
	</form>
</body>
</html>