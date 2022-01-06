<?php
    require_once 'config/db.php';
    class model{
        private $magv,$hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM giangvien";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $datas = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }
            $this->closeDb($conn);

            return $arr_users;
        }

        public function addUsers($hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham,$hocvi,$coquan){
            $conn = $this->connectDb();
            $sql = "INSERT INTO giangvien(hovaten,ngaysinh,gioitinh,trinhdo,chuyenmon,hocham,hocvi,coquan) VALUES ('$hovaten', '$ngaysinh', '$gioitinh', '$trinhdo', '$chuyenmon', '$hocham','$hocvi','$coquan')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }


        public function getUser($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM giangvien WHERE magv = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function updateUser($magv,$hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){
            $conn = $this->connectDb();

            $sql = "UPDATE giangvien SET hovaten='$hovaten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', trinhdo='$trinhdo', chuyenmon='$chuyenmon', hocham='$hocham',hocvi='$hocvi',coquan='$coquan' WHERE bd_id = '$magv'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

        function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM giangvien WHERE magv = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>