<?php 
class Main{
	//fetch all mens products
	public function getMenProducts(){
		global $pdo;

		$query = $pdo->prepare('SELECT * FROM men_products');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    //fetch all women products
    public function getWomenProducts(){
		global $pdo;

		$query = $pdo->prepare('SELECT * FROM women_products');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    //fetch all children products
    public function getChildrenProducts(){
		global $pdo;

		$query = $pdo->prepare('SELECT * FROM children_products');
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
        // Some Work to be done here
		//fetch post data by post id 
		public function fetch_data($pid){
		global $pdo;

		$query = $pdo->prepare('SELECT * FROM post where post_id = ? order by post_date desc');
		$query->BindValue(1,$pid);
		$query->execute();

		return $query->fetch();
	}
		//check if admin user is logged in 
		public function logged_in(){
			 return (isset($_SESSION['loggedin'])) ? true : false;
		}
}

?>