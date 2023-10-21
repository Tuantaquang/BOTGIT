<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <div class="row justify-content mt-3">
              <div class="col">
                <a href="{{route('index')}}" class="btn btn-primary">Trang chủ</a>
              </div>
              <div class="col text-right">
                <a href="{{route('logout')}}" class="btn btn-danger">Log Out</a>
              </div>
            </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card" style="margin-bottom: 20px">
                    <h5 class="card-title" >Thông tin người Dùng</h5><hr>
                    <h6>Tên: {{Auth::user()->name}}</h6>
                    <h6>email: {{Auth::user()->email}}</h6>
                    <h6>ID: {{Auth::user()->id}}</h6>
                </div>
                <div class="col-auto">
                    <a href="{{route('add_product')}}" class="btn btn-success">thêm sản phẩm</a>
                </div>
                <h4 class="mb-3" style="text-align: center">Danh sách sản phẩm của {{Auth::user()->name}}</h4>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Mô Tả Sản Phẩm</th>
                            <th>Hình Ảnh Sản Phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_product as $pro)
                        <tr>
                            <td>{{$pro->product_name}}</td>
                            <td>{{number_format($pro->product_price)}}</td>
                            <td>{{$pro->product_content}}</td>
                            <td>{{$pro->product_img}}</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>