<div class="container">
    <div class="mg-top">
    <div class="form-pass">
    <div class="addCategory">
        <h1>Thêm mới hàng hóa</h1>
    </div>
    <div class="content">
        <form action="index.php?vlt=addhh" method="post" enctype="multipart/form-data">
            <div class="form-password">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="masp" value="auto number" disabled>
            </div>
            <div class="form-password">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tensp">
            </div>
            <div class="form-password">
                <label for="">Giá</label>
                <input type="number" name="giasp">
            </div>
            <div class="form-password">
                <label for="">Sale</label>
                <input type="number" name="sale">
            </div>
            <div class="form-password">
                <label for="">Hình</label>
                <input type="file" name="hinh">
            </div>
            <div class="form-password">
                <label for="">Đặc biệt</label>
                <select name="dacbiet" id="">
                    <option value="0">Bình thường</option>
                    <option value="1">Đặc biệt</option>
                </select>
            </div>
            <div class="form-password">
                <label for="">Số lượt xem</label>
                <input type="number" name="view" id="">
            </div>
            <div class="form-password">
                <label for="">Mô tả</label>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-password">
                <label for="">Loại hàng</label>
                <select name="iddm" id="">
                    <option value="0" selected></option>
                    <?php
                        foreach($listdm as $dm){
                            extract($dm);
                            echo '<option value="'.$dm['ma_loai'].'">'.$dm['ten_loai'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="btn-pass">
                <input type="submit" name="add_sp" value="Thêm mới">
                <input type="submit" value="Nhập lại">
                <a href="index.php?vlt=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($message)&&$message != ""){
                    echo $message;
                }
                if(isset($err)&&$err != ""){
                    foreach($err as $e){
                        echo $e;
                    }
                }
            ?>
        </form>
    </div>
    </div>
    </div>
</div>