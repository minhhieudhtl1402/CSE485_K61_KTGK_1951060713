<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<h1 class="text-center mt-3">Xem thông tin </h1>
<div>
    <a class="btn btn-outline-info" href="index.php?act=add">Thêm</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mã GV</th>
            <th scope="col">Tên GV</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Trình Độ</th>
            <th scope="col">Chuyên Môn</th>
            <th scope="col">Học Hàm</th>
            <th scope="col">Học Vị</th>
            <th scope="col">Học Cơ Quan</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($datas as $data) {
        ?>
            <tr>
                <th scope="row"><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['magv']; ?></a></th>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hovaten']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['ngaysinh']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['gioitinh']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['trinhdo']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['chuyenmon']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hocham']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hocvi']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['coquan']; ?></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=edit&id=<?php echo $data['magv']; ?>"><i class="bi bi-pencil-square text-black"></i></a></td>
                <td><a class="text-black text-decoration-none" href="index.php?act=delete&id=<?php echo $data['magv']; ?>"><i class="bi bi-trash text-black"></i></a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
