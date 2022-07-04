<?php
	trait HomeModel{
		// san pham noi bat
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,5");
			// tra ve tat ban ghi
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		// liet ke danh muc san pham -> chi lay cac san pham ben trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products)");
			// tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll(PDO::FETCH_OBJ);
		}

		// liet ke san pham thuoc danh muc(sau khi thuc hien ben ngoai co the bo di )
		/*public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by products limit 0,5");
			// tra ve tat ca cac ban ghi truy van duoc
			return $query->fetchAll(PDO::FETCH_OBJ);
		}*/
	} 
 ?>