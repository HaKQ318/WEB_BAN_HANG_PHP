<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?> 
<section>
 <main>
    <div class="container">
    <div class="login-form">
        <form method="post" action="index.php?controller=account&action=registerPost" >
            <h1>Đăng kí nào mọi người ưiii</h1>
            <?php if(isset($_GET["notify"]) && $_GET["notify"] == "error"): ?>
            <p style="color:red; font-weight: bold;">Đăng ký thất bại, email đã bị trùng!</p>
            <?php elseif(isset($_GET["notify"]) && $_GET["notify"] == "success"): ?>
            <p style="color:red; font-weight: bold;">Đăng ký thành công, click vào đăng nhập để đăng nhập tài khoản</p>
            <?php else: ?>
            <?php endif; ?>
            <div class="input-box">
                <i ></i>
                <input  type="text" placeholder="Họ và tên" name="name" required>
            </div>
            <div class="input-box">
                <i ></i>
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
                <i ></i>
                <input type="text" placeholder="Địa chỉ" name="address" required>
            </div>
            <div class="input-box">
                <i ></i>
                <input type="text" placeholder="Điện thoại" name="phone" required>
            </div>
            <div class="input-box">
                <i ></i>
                <input type="password" placeholder="Mật khẩu" name="password" required>
            </div>
            <div class="btn-box">
                <button type="submit">
                    Đăng kí
                </button>
            </div>
        </form>
    </div>
    </div>
</main>
</section>