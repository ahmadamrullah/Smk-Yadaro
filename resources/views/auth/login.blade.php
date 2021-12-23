<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-center">
            <div class="col-lg-6">
               <div class="card">
                   <div class="card-body">
                        <form action="{{ route('post_login') }}" method="post">
                            @csrf
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
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
</body>
</html>