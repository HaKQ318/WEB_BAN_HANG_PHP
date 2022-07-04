<?php
	// include file model vao day
	include "models/ProductsModel.php";
	class ProductsController {
		// ke thua class ProductsModel
		use ProductsModel;
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			// quy dinh so ban ghi tren 1 trang
			$recordPerPage = 20;
			// tinh so trang
			$numPage = ceil($this->modelTotalRecord($category_id)/$recordPerPage);
			// lay du lieu tu model
			$data = $this->modelread($recordPerPage);
			// goi view, truyen du lieu ra view
			return View::make("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage,"category_id"=>$category_id]);
		}
		// chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			// goi view, truyen du lieu ra view
			return View::make("DetailProductsView.php",["record"=>$record,"id"=>$id]);
		}
		// danh gia so sao(rating)
		public function rating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->modelRating();
			//do chuyen den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}

	} 
 ?>