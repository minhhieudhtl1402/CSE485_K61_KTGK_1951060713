<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllUsers();
            require_once('view/index.php');
        }

    
        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtHoVaTen'])){
                $hovaten = $_POST['txtHoVaTen'];
                $ngaysinh = $_POST['txtNgaySinh'];
                $gioitinh=$_POST['txtGioiTinh'];
                $trinhdo = $_POST['txtTrinhDo'];
                $chuyenmon = $_POST['txtChuyenMon'];
                $hocham = $_POST['txtHocHam'];
                $hocvi = $_POST['txtHocVi'];
                $coquan = $_POST['txtCoQuan'];
                $model = new model;
                $result = $model->addUsers($hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtName'])){
                $hovaten = $_POST['txtHoVaTen'];
                $ngaysinh = $_POST['txtNgaySinh'];
                $gioitinh=$_POST['txtGioiTinh'];
                $trinhdo = $_POST['txtTrinhDo'];
                $chuyenmon = $_POST['txtChuyenMon'];
                $hocham = $_POST['txtHocHam'];
                $hocvi = $_POST['txtHocVi'];
                $coquan = $_POST['txtCoQuan'];
                $result = $model->updateUser($id,$hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteUser($id);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>