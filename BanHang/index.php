<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body{
        background-color: #ddd;
    }
    table, th, td {
    border:1px solid black;
    }
    input{
        margin-top: 5px;
    }
    input:nth-child(1){
        margin-top: 0px;
    }
</style>
<body>
    <header>
        <div class="container text-center p-5">
            <h1>Web Bán Sản Phẩm</h1>
        </div>
    </header>
    <section >
        <div class="container pt-2 ps-5 pe-5">
            <div class="row">
                <div class="col-3">
                    <ul class="d-flex flex-column">
                        <input type="submit" value="Danh Sách Sản Phẩm">
                        <input type="submit" value="Quản Lý Sản Phẩm">
                        <input type="submit" value="Quản Lý Đơn Hàng">
                        <input type="submit" value="Quản Lý Tài Khoản">
                    </ul>
                </div>
                <div class="col-9 ps-5">
                    <form action="">
                        <table class="" style="width:100%; background-color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lương</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Vở</td>
                            <td>15.000</td>
                            <td>15</td>
                        </tr>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>