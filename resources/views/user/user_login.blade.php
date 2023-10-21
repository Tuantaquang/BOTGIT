<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col-md-6">
                <h2>Đăng nhập</h2>
                @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert"></button>
                            <strong>{{$message}}</strong>
                    </div>
                @endif
                <form action="{{route('post_login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="loginEmail" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Mật khẩu</label>
                        <input name="password" type="password" class="form-control" id="loginPassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div style="text-align: center" class="from-group">
                        <button style="margin: 10px; width: 150px;" type="submit" class="btn btn-primary">Đăng nhập</button>
                    </div>
                    
                    <div style="text-align: center" class="from-group">
                        <a href="{{route('register')}}" style="width: 150px;" class="btn btn-primary">Đăng kí  </a>
                    </div>

                </form>
            </div>
        </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>