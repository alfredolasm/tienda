@extends('front.template.main')
@section('title', 'Inicio de sessión')

@section('content') 



<div class="container">
        <div class="col-md-4 offset-4"></div>
            <div class="panel panel-success">
                <div class="panel-heading"><h3 class="panel-title"></h3></div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="control-label">Dirección Correo Electronico</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                                 <a class="btn btn-link" href="#">Olvido su contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>                
</div>


@endsection
