<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?> 
 <div class="module_pro_all">
            <div class="box-title">
               <div class="title-bar">
                  <h1>
                    <!-- bien key truyen tu controller ra view -->
                      Tìm kiếm: <?php echo $key; ?>
                  </h1>
                  <a class="col-lg-3 pull-right text-right" >
                    <?php 
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
                     ?>
                    <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
                      <option value="0">Sắp xếp</option>
                      <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                      <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                      <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                      <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                    </select>
                  </a>
               </div>
            </div>
            <div class="pro_all_gird">
               <div class="girds_all list_all_other_page ">
                <?php foreach($data as $rows): ?>
                  <div class="grids">
                        <div class="grids_in" style="height: 400px; overflow: hidden;">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                                        <img class="lazy img-pro content-image" src="assets/upload/products/<?php echo $rows->photo; ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                    </a>

                                    <div class="content-overlay"></div>
                                    <div class="content-details fadeIn-top">
                                        <ul class="details-product-overlay">
                                            <li>Sản phẩm hot</li>
                                            <li>Tưng bừng khuyến mãi !!!</li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="name-pro-right">
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                                        <h3><?php echo $rows->name; ?></h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new" style="height:60px;margin-left: 10px;" >
                                    <div class="price" >
                                        <span class="news_price" style="text-decoration: line-through;"><?php echo number_format($rows->price); ?>₫</span>
                                    </div>
                                    <br>
                                    <div class="price"  >
                                        <span class="news_price">Giá:<?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?>₫ </span>
                                    </div>
                                </div>
                                <p class="price-box" style="text-align:center;"> 
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/image/star.jpg"></a> 
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/image/star.jpg"></a> 
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/image/star.jpg"></a> 
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/image/star.jpg"></a> 
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/image/star.jpg"></a> 
                                </p>  
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                  <!-- paging -->
                    <div class="clear"></div>
                    <div  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                      <ul class="pagination">
                        <li class="page-item"><span>Trang</span></li>
                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=search&action=name&key=<?php echo $key; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                      </ul>
                    </div>
                    <!-- end paging -->
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>