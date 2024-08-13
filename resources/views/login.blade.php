<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="login-page">
        <div class="form">
          <form class="register-form"  action="{{route('register')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nombre" id="register-name"/>
            <input type="text" name="email" placeholder="Correo" id="register-email"/>
            <input type="password" name="password" placeholder="Contraseña" id="register-password"/>
            <select name="rol" id="register-level">
                <option value="">Nivel de usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Gerente</option>
                <option value="3">Chalan</option>
            </select>
            <button id="register-btn">create</button>
            <p class="message">ya tienes cuenta? <a href="#">Inicia Sesión</a></p>
          </form>
          <form class="login-form" action="{{route('loginapp')}}" method="POST">
            @csrf
            @if (session('message'))
                <p style="color: red"">{{ session('message') }}</p>
            @endif
            <input type="text" name="email" placeholder="Email" id="login-username"/>
            <input type="password" name="password" placeholder="Contraseña" id="login-password"/>
            <button id="login-btn">login</button>
            <p class="message">No estas registrado? <a href="#">Crea una cuenta</a></p>
          </form>
        </div>
        <script src="{{asset('js/script.js')}}"></script>
      </div>
</body>
</html>


