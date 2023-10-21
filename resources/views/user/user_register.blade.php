<!DOCTYPE html>
<html>
<head>
    <title>Đăng kí</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2>Đăng ký</h2>
                <form action="{{route('create_account')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="registerName">Họ và tên</label>
                        <input name="name" type="text" class="form-control" id="registerName" placeholder="Nhập họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="registerEmail" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Mật khẩu</label>
                        <input name="password" type="password" class="form-control" id="registerPassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Nhập Lại Mật khẩu</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="nhập lại mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>