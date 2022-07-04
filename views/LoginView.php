<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<section>
         <main>
            <div class="container">
            <div class="login-form">
                <form  method="post" action="index.php?controller=account&action=loginPost">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" placeholder="Mật khẩu" name="password" required>
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </main>
      </section>