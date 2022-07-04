<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<section>
   <div class="bg_in">
      <div class="content_page cart_page">
         <div class="box-title">
            <div class="title-bar">
               <h1>Giỏ hàng của bạn</h1>
            </div>
         </div>
         <div class="content_text">
            <div class="container_table">
               <table class="table table-hover table-condensed">
                  <thead>
                     <tr class="tr tr_first">
                        <th >Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th style="width:100px;" >Số lượng</th>
                        <th style="width:100px;">Thành tiền</th>
                        <th>Xóa</th>
                        <th style="width:50px; text-align:center;"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <form action='index.php?controller=cart&action=update' method="post">
                        <?php foreach($_SESSION['cart'] as $product): ?>
                        <tr class="tr">
                           <td data-th="Hình ảnh">
                              <div class="col_table_image col_table_hidden-xs"><img src="assets/upload/products/<?php echo $product['photo']; ?>" alt="Máy in laser Canon LBP251DW" class="img-responsive"/></div>
                           </td>
                           <td data-th="Sản phẩm">
                              <div class="col_table_name">
                                 <h4 class="nomargin"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                              </div>
                           </td>
                           <td data-th="Giá"><span class="color_red font_money"><?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</span></td>
                           <td data-th="Số lượng">
                              <div class="clear margintop5">
                                 <div class="floatleft"><input type="number" class="inputsoluong" name="product_<?php echo $product['id']; ?>"  value="<?php echo $product['number']; ?>" required="Không thể để trống"></div>
                              </div>
                              <div class="clear"></div>
                           </td>
                           <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format($product['number']*($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</span></td>
                           <td class="actions aligncenter" data-th="">
                              <a  href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" class="btn_df btn_table_td_rf_del btn-sm"><i class="fa fa-trash-o"></i></a>                          
                           </td>
                        </tr>
                        <?php endforeach; ?> 
                     <!--  -->
                     <?php if((new CartController())->cartNumber()): ?>
                     <tr>
                        <td colspan="7" class="textright_text">
                           <div class="sum_price_all">
                              <span class="text_price">Tổng tiền thành toán</span>: 
                              <span class="text_price color_red"><?php echo number_format((new CartController())->cartTotal()); ?>₫</span>
                              <br>
                              <button style="width:100px; float:right;color:white;background-color:red;margin-top:10px;"><a href="index.php?controller=cart&action=checkout">Thanh toán</a> </div></button>
                           </div>
                        </td>
                     </tr>
                     <?php endif; ?>
                  </tbody>
                  <!-- co the goi ham trong CartModel -->
                  <?php if((new CartController())->cartNumber()): ?>
                  <tfoot>
                     <tr class="tr_last">
                        <td colspan="7">
                           <a href="." class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                           <button style="width:100px;color: red;margin-top:10px;"><a href="index.php?controller=cart&action=destroy" >Xóa toàn bộ</a></button>
                           <input type="submit" style="width:100px; float:right;color:white;background-color:red;margin-top:10px;" value="Cập nhật">
                        </td>
                        <div class="clear"></div> 
                     </tr>
                  </tfoot>
                  <?php endif; ?>
                  </form>
               </table>
            </div>
            <div class="contact_form">
               <div class="contact_left">
                  <div class="ch-contacts-details">
                     <ul class="contact-list">
                        <li class="addr">
                           <strong class="title">Địa chỉ của chúng tôi</strong>
                           <p><em><strong>QHA-SHOP</strong></em><br />
                           <p>Trung Tâm Bán Hàng:</p>
                           <p>CN1: Vĩnh Yên - Vĩnh Phúc</p>
                           <p>CN2: Đống Đa - Hà Nội</p>
                           <p>N3: Việt Trì - Phú Thọ</p>
                           <p> CN4: Vĩnh Yên - Vĩnh Phúc</p>
                           <p> Hotline: 0965 724 657 - 0965 724 657 (zalo)</p>
                           </p>
                        </li>
                     </ul>
                     <div class="hiring-box">
                        <strong class="title">Chào bạn!</strong>
                        <p>Mọi thắc mắc hãy gửi về mail của chúng tôi <strong>khongquanghano1@gmail.com</strong> chúng tôi sẽ giải đáp cho bạn.</p>
                        <p><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Về trang chủ</a></p>
                     </div>
                  </div>
               </div>
               <div class="contact_right">
                  <div class="form_contact_in">
                     <div class="box_contact">
                        <form name="FormDatHang" method="post" action="gio-hang/" >
                           <div class="content-box_contact">
                              <div class="row">
                                 <div class="input">
                                    <label>Họ và tên: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtHoTen" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Số điện thoại: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtDienThoai" required onkeydown="return checkIt(event)" class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Địa chỉ: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtDiaChi" required class="clsip" >
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Nội dung: <span style="color:red;">*</span></label>
                                    <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row btnclass">
                                 <div class="input ipmaxn ">
                                    <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng">
                                    <input type="reset" class="btn-gui" value="Nhập lại">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="clear"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>