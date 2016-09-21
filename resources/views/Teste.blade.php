<<<<<<< HEAD
<html>
<body>

<form action="{{ route( 'cliente/create' )}}" method="post">
<!-- Name: <input type="text" name="name"><br> -->
<input type="text" name="email" id="email" value="{{ Request::old('email') }}">
<!-- E-mail: <input type="text" name="email"><br> -->
<input type="submit">
</form>

</body>
=======
<!-- View stored in resources/views/Teste.php -->

<html>
    <body>
        <h1>Hello, {{ $nome }}</h1>
    </body>
>>>>>>> 0a534890a7f00c03769e108cc974bf46e18cb35f
</html>