<header>
    <div class="info_top">
        <div class="bg_in">
            <p class="p_infor" >
                <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: khongquanghano1@gmail.com |</span>&nbsp; &nbsp;
                <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0965-724-657 |</span>&nbsp; &nbsp;
                <?php if(isset($_SESSION['customer_email'])): ?>
                    <span><a href="#">Xin chào <?php echo $_SESSION['customer_email']; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>&nbsp; &nbsp;</span>
                <?php else: ?>
                <span><a href="index.php?controller=account&action=login">Đăng nhập </a>&nbsp; &nbsp;</span>
                <span><a href="index.php?controller=account&action=register">Đăng ký</a></span>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <div class="header_top_menu">
        <div class="header_top_menu_all">
            <div class="header_top">
                <div class="bg_in">
                    <div class="logo">
                        <a href="#"><img src="assets/frontend/image/qha.png" width="250px" height="125px" alt="logohere.jpeg" /></a>
                    </div>
                    <div class="menu_top">
                        <div class="search_form">
                                <input type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ cần tìm..." id="key" class="searchTerm">
                                <button class="searchButton" type="submit">
                                        <i class="fa fa-search" onclick="return search();"></i>
                                </button>
                        </div>
                        <form class="smart-search">
                             <ul>
                                 <li><img src="http://localhost/devpro/project_web_ban%20_dien_thoai/assets/upload/products/1654707183_apple-iphone-12-mini-2.png" alt="">Sản phẩm</li>
                                 <li><img src="http://localhost/devpro/project_web_ban%20_dien_thoai/assets/upload/products/1654707183_apple-iphone-12-mini-2.png" alt="">Sản phẩm</li>
                                 <li><img src="http://localhost/devpro/project_web_ban%20_dien_thoai/assets/upload/products/1654707183_apple-iphone-12-mini-2.png" alt="">Sản phẩm</li>
                             </ul>
                         </form>
                     </div>
                     <style type="text/css">
                      .menu_top{position: relative;}
                      .smart-search{position: absolute; width: 100%; background: white; height: 350px; overflow: scroll;z-index: 1; display: none;}
                      .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
                      .smart-search ul li{border-bottom: 1px solid #dddddd;}
                      .smart-search img{width: 70px; margin-right: 5px;}
                    </style>
                    <script type="text/javascript">
                      //khi an phim enter thi nhay den trang tim kiem theo ten
                      function searchForm(event){
                        //bat phim ener tu ban phim (phim enter co keyCode = 13)
                        if(event.keyCode == 13){
                          //lay gia tri cua the html co id=key
                          let key = document.getElementById("key").value;
                          //di chuyen den url tim kiem
                          location.href = "index.php?controller=search&action=name&key="+key;
                        }
                      }
                      function search(){
                        //lay gia tri cua the html co id=key
                        let key = document.getElementById("key").value;
                        //di chuyen den url tim kiem
                        location.href = "index.php?controller=search&action=name&key="+key;
                      }
                      //---
                      //de thuc hien cac dong code ben duoi thi website can phai load thu vien jquery
                      /*
                        de kiem tra xem website da load thu vien jquery chua thi thuc hien test bang doan code sau
                      */
                      //$(document).ready(function(){alert('jquery da duoc load vao trang');});
                      $(".input-control").keyup(function(){
                        var strKey = $("#key").val();
                        if(strKey.trim() == ""){
                          $(".smart-search").attr("style","display:none;");
                        }else{
                          $(".smart-search").attr("style","display:block;");
                          //---
                          //lay du lieu bang ajax
                          $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                            //clear cac the li ben trong ul
                            $(".smart-search ul").empty();
                            //them du lieu vao ul
                            $(".smart-search ul").append(data);
                          });
                          //---
                        }
                      });
                      //---
                    </script>
                    <div class="cart_wrapper">
                        <div class="cols_50">
                            <div class="hot_line_top">
                                <span><b>Trụ sở chính</b></span>
                                <br/>
                                <span class="red">Vĩnh Yên - Vĩnh Phúc</span>
                            </div>
                        </div>
                        <div class="cols_50">
                            <div class="hot_line_top">
                                <span><b>Văn phòng chi nhánh</b></span>
                                <br/>
                                <span class="red">Vĩnh Yên</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="btn_menu_search">
            <div class="bg_in">
                <div class="table_row_search">
                    <div class="menu_top_cate">
                        <div class="">
                            <div class="menu" id="menu_cate">
                                <div class="menu_left">
                                    <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                </div>
                                <div class="cate_pro">
                                    <div id='cssmenu_flyout' class="display_destop_menu">
                                        <ul>
                                            <span>
                                                <?php
                                                  // co the ket noi csdl de truy van o day
                                                  $conn = Connection::getInstance();
                                                  $query = $conn->query("select *from categories where parent_id = 0 order by id desc");
                                                  $categories = $query->fetchAll(PDO::FETCH_OBJ); 
                                                 ?>
                                                 <?php
                                                  foreach($categories as $rows): 
                                                  ?>
                                                <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                                <?php
                                                  $querySub = $conn->query("select *from categories where parent_id = {$rows->id} order by id desc");
                                                  $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
                                                 ?>
                                                 <?php
                                                  foreach($categoriesSub as $rowsSub): 
                                                  ?>
                                                <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                                 <?php endforeach; ?>
                                              <?php endforeach; ?>
                                            </span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_top">
                        <div id='cssmenu'>
                            <ul>
                                <li class='active'><a href='index.php'>Trang chủ</a></li>
                                <li class=''><a href='#'>Giới thiệu</a></li>
                                <li class=''><a href='index.php?controller=cart'>Giỏ hàng</a></li>
                                <li class=''><a href='index.php?controller=news'>Tin tức</a></li>
                                <li class=''><a href='index.php?controller=contact'>Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>