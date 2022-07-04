<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?> 
 <?php
  //lay so sao cua san pham co id truyen vao
    function modelGetStar($product_id,$star){
      //lay bien ket noi csdl
      $conn = Connection::getInstance();
      $query = $conn->query("select id from rating where product_id=$product_id and star=$star");
      //tra ve so luong ban ghi
      return $query->rowCount();
    } 
 ?>
<!--start:body-->

<section>
<link rel="stylesheet" type="text/css" href="assets/frontend/css/product.css">
<script defer type="text/javascript" src="assets/frontend/js/jquery.avatarme-1.0.min.js"></script>
<script src="assets/frontend/js/cloudzoom.js"></script>
<script defer src="assets/frontend/js/jquery.scrollto.js"></script>
 <div class="bg_in">
    <div class="wrapper_all_main">
       <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
          <div class="content_page">
             <div class="content-right-items margin0">
                <div class="title-pro-des-ct">
                   <h1>Sản phẩm:&nbsp; <?php echo $record->name; ?></h1>
                </div>
                <div class="slider-galery ">
                 <div >
                          <div class="item">
                              <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;border:1px solid red;" />
                          </div>
                   </div>  
                   
                </div>
                <div class="content-des-pro">
                   <div class="content-des-pro_in">
                      <div class="pro-des-sum">
                         <div class="price">
                            <p class="code_skin" style="margin-bottom:10px">
                               <span>Thương hiệu:&nbsp;
                                    <?php 
                                        $conn = Connection::getInstance();
                                        $queryCategory = $conn->query("select name from categories where id = {$record->category_id}");
                                        $category = $queryCategory->fetch(PDO::FETCH_OBJ);
                                        echo isset($category->name) ? $category->name : "";
                                     ?>
                                </span>
                            </p>
                            <div class="status_pro">
                               <span><b>Trạng thái:</b>  Còn hàng</span>
                            </div>
                            <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                         </div>
                         <div class="color_price">
                            <span class="title_price bg_green">Giá bán</span><?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫ </span>. (GIÁ CHƯA VAT)
                            <div class="clear"></div>
                         </div>
                         <div class="color_price">
                            <span class="title_price">Giá cũ</span> 
                            <del><?php echo number_format($record->price); ?>₫</del>
                         </div>
                      </div>
                      <div class="clear"></div>
                   </div>
                   <div class="content-pro-des">
                      <div class="content_des">
                         <p style="font-size: 16px;font-weight: bold;">Rating</p><br />
                          <table style="width: 100%;">
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/image/star.jpg"></td>
                                <td><span class="label label-primary"><?php echo modelGetStar($record->id,1) ?> vote</span></td>
                              </tr>
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"></td>
                                <td><span class="label label-warning"><?php echo modelGetStar($record->id,2) ?> vote</span></td>
                              </tr>
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"></td>
                                <td><span class="label label-danger"><?php echo modelGetStar($record->id,3) ?> vote</span></td>
                              </tr>
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"></td>
                                <td><span class="label label-info"><?php echo modelGetStar($record->id,4) ?> vote</span></td>
                              </tr>
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"> <img src="assets/frontend/image/star.jpg"></td>
                                <td><span class="label label-success"><?php echo modelGetStar($record->id,5) ?> vote</span></td>
                              </tr>
                            </table>
                      </div>
                   </div>
                   <div class="ct">
                      <div class="number_price">
                         <div class="custom pull-left">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                            <div class="clear"></div>
                         </div>
                         <div class="clear"></div>
                      </div>
                      <div class="wp_a">
                         <a onclick="return giohang(579);" class="view_duan">
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                         </a>
                         <a href="tel:090 66 99 038" class="view_duan">
                         <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                         </a>
                         <div class="clear"></div>
                      </div>
                      <div class="clear"></div>
                   </div>
                   <div class="tags_products prodcut_detail">
                      <div class="tab_link">
                         <h3 class="title_tab_link">TAGS: </h3>
                         <div class="content_tab_link"> <a href="tag/"></a></div>
                      </div>
                   </div>
                </div>
                <div class="content-des-pro-suport">
                   <div class="box-setup">
                      <div class="title-setup">
                         <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                      </div>
                      <div class="info-setup">
                         <div class="row-setup">
                            <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                            <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                         </div>
                      </div>
                   </div>
                   <div class="info-prod prod-price freeship">
                      <span class="title">
                         <p>
                             Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                         </p>
                      </span>
                      <span class="row more"><a href="" title="">Xem thêm</a>
                      </span>
                   </div>
                   <div class="bx-contact">
                      <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                      <p>Chat với chúng tôi :</p>
                      <p><img alt="icon skype " src="assets/frontend/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                      <p><img alt="icon skype " src="assets/frontend/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                      <p><img alt="icon skype " src="assets/frontend/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                   </div>
                </div>
                <div class="clear"></div>
             </div>
          </div>
       </div>
       <div class="wrapper_all_main_right">
          <div class="tabs-animation">
             <div class="bg_in">
                <div id="nav-anchor"></div>
                <nav class="nav-tabs">
                   <ul>
                      <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                      <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                      <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                   </ul>
                   <div class="name-product">
                      Iphone X
                      <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                   </div>
                   <div class="ct btn-wp">
                      <div class="wp_a">
                         <a onclick="return giohang(371);" class="view_duan">
                         <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                         </a>
                         <a href="tel:090 66 99 038" class="view_duan">
                         <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                         </a>
                         <div class="clear"></div>
                      </div>
                   </div>
                </nav>
             </div>
          </div>
          <div class="product_detail_info">
             <div class="module_pro_all" id="productDetail">
                <div class="box-title">
                   <div class="title-bar">
                      <h3>Chi tiết sản phẩm</h3>
                   </div>
                </div>
                <div class="tab_content content_text_product content-module">
                   <?php echo $record->content; ?>
                </div>
             </div>
             <div class="module_pro_all" id="inforProduct">
                <div class="box-title">
                   <div class="title-bar">
                      <h3>Thông số kỹ thuật</h3>
                   </div>
                </div>
                <div class="tab_content content_text_product content-module">
                   <p>CRW - Wallmount:<br />
                      - Cửa: 1 cánh trước Mica<br />
                      - Tủ treo tường (Wall mount)<br />
                      - -Màu sơn tĩnh&nbsp;<br />
                      - Tủ có đánh dấu số U trên thanh tiêu chuẩn&nbsp;<br />
                      - Logo COMRACK được dập nổi trên cánh trước của tủ<br />
                      - Đáy và nóc có đột lỗ chờ đi dây<br />
                      - Bảo hành 3 năm với tủ , 1 năm với phụ kiện&nbsp;
                   </p>
                </div>
             </div>
             <div class="fb-comments" data-href="http://dantri.com.vn" data-width="" data-numposts="5"></div>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
          <div class="dmsub">
             <div class="tags_products desktop">
                <div class="tab_link">
                   <h3 class="title_tab_link">TAGS: </h3>
                   <div class="content_tab_link"> 
                    <a href="tag/">Iphone x</a>
                    <a href="tag/">Iphone 10</a>
                     <a href="tag/">Iphone 11</a>
                      <a href="tag/">Iphone Like New</a>

                    </div>
                </div>
             </div>
          </div>
          </div>
                   <div class="clear"></div>
                </div>
                <div class="clear"></div>
             </div>
             <div class="clear"></div>
          </div>
       </div>
      
       <!--end:left-->
       <div class="clear"></div>
    </div>
    <div class="clear"></div>
 </div>
</section>
<!--end:body-->

