<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangchu.php";
 ?>
<section>
    <div class="bg_in">
        <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="assets/frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="assets/frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">
            <div class="row">
                <div class="panel  panel-warning panel-styling">
                    <div class="panel-heading">Tin tức cập nhật</div>
                    <div class="panel-body scrollable-panel">
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-sm-4">
                                <img src="assets/frontend/image/iphone.png">
                            </div>
                            <div class="col-md-8 col-xs-8 col-sm-8">
                                <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-sm-4">
                                <img src="assets/frontend/image/iphone.png">
                            </div>
                            <div class="col-md-8 col-xs-8 col-sm-8">
                                <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-sm-4">
                                <img src="assets/frontend/image/iphone.png">
                            </div>
                            <div class="col-md-8 col-xs-8 col-sm-8">
                                <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-sm-4">
                                <img src="assets/frontend/image/iphone.png">
                            </div>
                            <div class="col-md-8 col-xs-8 col-sm-8">
                                <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
</section>

<section>
    <div class="bg_in">
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Sản phẩm HOT</h1>
                    <a class="read_more" href="#">
              Xem thêm
              </a>
                </div>
            </div>
            <div class="pro_all_gird" >
                <div class="girds_all list_all_other_page " >
                    <!-- <style type="text/css">
                      .discount{position: absolute; width: 50px; line-height: 50px; text-align: center; background: black; color: white; border-radius: 50px;}
                      .grids{position:relative;}
                    </style> -->
                    <?php
                        foreach($hotProduct as $rows): 
                    ?>
                    <div class="grids">
                        <!-- discount -->
                          <!-- <?php if($rows->discount > 0): ?>
                            <div class="discount"><?php echo $rows->discount; ?> %</div>
                          <?php endif; ?> -->
                        <!-- discount -->
                        <div class="grids_in" style="height: 400px; overflow: hidden;" > 
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
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php foreach($categories as $itemCategories): ?>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1><?php echo $itemCategories->name; ?></h1>
                    <a class="read_more" href="sanpham.html">
              Xem thêm
              </a>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                    <?php 
                      $conn = Connection::getInstance();
                      $queryProducts = $conn->query("select * from products where category_id = $itemCategories->id order by id desc limit 0,5");
                      $products = $queryProducts->fetchAll(PDO::FETCH_OBJ);
                    ?> 
                    <?php foreach($products as $rows): ?>
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
                                            <li>Sản phẩm chất lượng cao</li>
                                            <li>Mại zô !!! Mại Zô !!!</li>

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
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php endforeach; ?>
        <div class="module_pro_all">
            <div class="box-title">
                <div class="title-bar">
                    <h1>Tin tức</h1>
                </div>
            </div>
            <div class="pro_all_gird">
                <div class="girds_all list_all_other_page ">
                     <?php 
                        $conn = Connection::getInstance();
                        $queryNews = $conn->query("select * from news order by id desc limit 0,6");
                        $news = $queryNews->fetchAll(PDO::FETCH_OBJ);
                     ?>
                    <?php
                        foreach($news as $rows): 
                    ?>
                    <div class="grids">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" style="width:100%;" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>"> </a>
                                </div>
                                <div class="name-pro-right">
                                    <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                                <p class="desc"><?php echo $rows->description; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

</section>