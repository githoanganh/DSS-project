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
                <form action="" method="post">
                    @csrf
                    <h2 align ="center">Đăng ký</h2>
                    @if (session('thongbao1'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{session('thongbao1')}}</strong>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="mail"  type="text" class="form-control">
                        @if ($errors->has('mail'))
                            <div class="alert alert-danger" role="alert">
                            <strong> {{$errors->first('mail')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input class="form-control" name="pass"  type="password"  class="form-control">
                        @if ($errors->has('pass'))
                            <div class="alert alert-danger" role="alert">
                            <strong> {{$errors->first('pass')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input class="form-control" name="repass" type="password"  class="form-control">
                        @if ($errors->has('repass'))
                            <div class="alert alert-danger" role="alert">
                            <strong> {{$errors->first('repass')}} </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <select name="level" class="form-control">
                            <option value=1>Admin</option>
                            <option value=2>Manager</option>
                            <option value=3>Member</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><button type="submit" class="btn btn-primary" name="sbm">Đăng ký</button></div>
                        <div class="col-md-6"><a class="btn btn-primary" href="validation">Quay lại</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
