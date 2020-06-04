<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BKX Confessions - Administrator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center ">
            <div class="col-md-3 col-md-offset-4 ">
                @if (session('thongbao'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{session('thongbao')}}</strong>
                    </div>
                @endif
                <form action="" method="post">
                    @csrf
                    <h2 align ="center">Electric - Forecast</h2>
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="mail"  autofocus>
                        @if ($errors->has('mail'))
                            <div class="alert alert-danger" role="alert">
                            <strong> {{$errors->first('mail')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
                        @if ($errors->has('pass'))
                            <div class="alert alert-danger" role="alert">
                            <strong> {{$errors->first('pass')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6"><button type="submit" class="btn btn-primary" name="sbm">Đăng nhập</button></div>
                        <div class="col-md-6"><a href="register" class="btn btn-primary" name="sub">Đăng ký nhanh</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
