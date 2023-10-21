<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 50px">
            <h2 style="text-align: center">Thêm sản phẩm</h2>
        <form style="margin: 10px" action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Tên sản phẩm:</label>
                <input name="product_name" type="text" class="form-control" id="productName" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="productPrice">Giá:</label>
                <input name="product_price" type="number" class="form-control" id="productPrice" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="productDescription">Mô tả:</label>
                <textarea name="product_content" class="form-control" style="resize: none" id="productDescription" rows="5" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>
            <div class="form-group">
                <label for="productPrice">Hình ảnh</label>
                <input name="product_img" type="file" class="form-control" id="productPrice" placeholder="Hình ảnh">
            </div>
            <div class="text-center">
                <button  type="submit" class="btn btn-primary">Thêm</button>
            </div>
            
        </form>
    </div>
        </div>
        

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>