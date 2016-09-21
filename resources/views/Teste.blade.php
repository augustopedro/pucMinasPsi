<html>
<body>

<form action="{{ route( 'cliente/create' )}}" method="post">
<!-- Name: <input type="text" name="name"><br> -->
<input type="text" name="email" id="email" value="{{ Request::old('email') }}">
<!-- E-mail: <input type="text" name="email"><br> -->
<input type="submit">
</form>

</body>
</html>