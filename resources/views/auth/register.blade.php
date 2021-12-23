<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-center">
            <div class="col-lg-6">
               <div class="card">
                   <div class="card-body">
                        <form action="{{ route('post_register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-valid' : '' }}">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control  {{ $errors->has('email') ? 'is-valid' : '' }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control  {{ $errors->has('password') ? 'is-valid' : '' }}">

                                @if ($errors->has('passworrd'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control  {{ $errors->has('password_confirmation') ? 'is-valid' : '' }}">

                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
</body>
</html>