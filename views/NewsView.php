<?php 
//load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>
<br>
<div class="content_page">
   <div class="box-title">
      <div class="title-bar">
         <h1>Tin tức</h1>
      </div>
   </div>
   <div class="content_text">
      <ul class="list_ul">
         <?php foreach($data as $rows): ?>
         <li class="lists">
            <div class="img-list">
               <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id ?>">
               <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" class="img-list-in">
               </a>
            </div>
            <div class="content-list">
               <div class="content-list_inm">
                  <div class="title-list">
                     <h3>
                        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                     </h3>
                  </div>
                  <div class="content-list-in">
                     <p><span style="font-size:16px"><?php echo $rows->description; ?></span></p>
                  </div>
                  <div class="xt"><a href="#">Xem thêm</a></div>
               </div>
            </div>
            <div class="clear"></div>
         </li>
         <?php endforeach; ?>
      </ul>
      <div class="clear"></div>
      <div class="wp_page">
         <div class="page">
            <ul class="pagination pull-right" style="margin-top: 0px !important">
               <li><a href="#">Trang</a></li>
               <?php for($i = 1; $i <= $numPage; $i++): ?>
               <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
             <?php endfor; ?>
          </ul>
         </div>
      </div>
   </div>
</div>