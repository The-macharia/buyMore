
<?php 
	/* Author: Cozy👽 */


	include ('../core/connection.php');
    include ('../core/functions/main.php');
    

	if(isset($_SESSION['loggedin'])===false){
		header('Location: ../index.php');
	}else{
	//check if user Publish a post
 	if($_POST){
		$productName = $_POST['productName'];
        $productDecscription = $_POST['productDescription'];
        $thePrice = $_POST['price'];
        $price = floatval($thePrice);
        $productCategory = $_POST['productCategory'];
        $productTarget = $_POST['productTarget'];
        $theProductQuantity = $_POST['productQuantity'];
        $productQuantity = intval($theProductQuantity);
        
        

 		if(empty($productName) or empty($productDecscription) or empty($price) or empty($productCategory) or empty($productTarget) or empty($productQuantity) or empty($productCategory)){
			$errors = '<div class="alert alert-warning"><strong> All fields are required! </strong> Please try again 😒</div>';
		}else{
			//check if product Image is set
			if (isset($_FILES['product_imagePath'])===true) {		 
				if (empty($_FILES['product_imagePath']['name']) ===true) {
					$errors = '<div class="alert alert-warning"><strong>Please Choose a Post Image</strong> Come on 😏 an image is way cool</div>';
				 
				 }else {   
				 	//check image format                                                                                                    
					 $allowed = array('jpg','jpeg','gif','png'); 
                     $file_name = $_FILES['product_imagePath']['name']; 
                     $my_temp = explode('.', $file_name);
					 $file_extn = strtolower(end($my_temp));
					 $file_temp = $_FILES['product_imagePath']['tmp_name'];
					 
					 if (in_array($file_extn, $allowed)===true) {
					 		//rename image name 
							$file_path = '../images/' . substr(md5(time()), 0, 10).'.'.$file_extn;
							//move image to image folder
                            move_uploaded_file($file_temp, $file_path);	

                            			 	
							$query = $pdo->prepare("INSERT INTO `buymore`.`men_products` ( `productID` ,`productName`, `productDescription`,`price`, `product_imagePath`, `productQuantity`, `productCategory`)
                             VALUES ( NULL,?, ?, ?, ?, ?, ? )");
							$query->bindValue(1, $productName);	
							$query->bindValue(2, $productDecscription);	
							$query->bindValue(3, $price);	
							$query->bindValue(4, $file_path);	
                            $query->bindValue(5, $productQuantity);
                            $query->bindValue(6, $productCategory);
                            
                            $query -> execute(); 
                            //$query->execute(array($productName,$productDecscription,$price,$file_path,$productQuantity,$productCategory));	
                             
                             //echo "Insertion Success";
                             //echo $productCategory;
							//header('Location: adminhome.php');	

					 }
				 	}
				}
						

		}



		
	}
	
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="main.js"></script>
    <script src="../ckeditor/ckeditor.js"></script> <!-- CK Editor-->
</head>
<body>
<header>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">BuyMore</a>
</div>
<ul class="nav navbar-nav">
<li><a href="index.php">Home</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<button type="button" class="btn btn-info">
<span class="glyphicon glyphicon-log-out">LogOut</span>
</button>
</ul>
</div>
</nav></header>
<div>
<form action="addNewProduct.php" method="POST" enctype="multipart/form-data">
    <label for="productName">Product Name</label><br>
    <input type="text" name="productName" id="" ><br />
    <label for="product_imagePath">Choose a Photo</label><br>
    <input type="file" name="product_imagePath" id="imgInput"><br/>
    <img id="preview" src="#"/><br/>
    <label for="productDescription">Give the Customers a Brief product description</label><br>
    <textarea name="productDescription" id="editor"  rows="3"></textarea><br/>
    <label for="price">How Much will the Product Cost in KSH?</label><br>
    <input type="number" name="price" id="" min="0"><br />
    <label for="productQuantity">How Much Quantity available per item</label><br>
    <input type="number" name="productQuantity" id="" min="0"><br />
    <label for="productTarget">Choose Product Target Audience</label><br/>
    <input type="radio" name="productTarget" value="men_products"> Male
    <input type="radio" name="productTarget" value="women_products"> Female
    <input type="radio" name="productTarget" value="children_products"> Children <br/>
    <label for="productCategory">Please Choose a Product Category</label><br>
    <select name="productCategory">
    <option value="Official">Official</option>
    <option value="Watches">Watches</option>
    <option value="Casual">Casual</option>
    <option value="Shoes">Shoes</option>
    <option value="Dresses">Dresses</option>
    <option value="Blouses">Blouses</option>
    <option value="Handbags">HandBags</option>
    <option value="Boys">Boys</option>
    <option value="Girls">Girls</option>
    <option value="Toddlers">Toddlers</option>
    </select>
    	<div>
        <!--show erros if isset-->
        <?php if(isset($errors)){
						echo $errors;
					}?>
    <br><input type="submit" value="Publish"></div>
     
    </form>
    </div>
    
    
    <script>
    //<!-- This Script Adds CK Editor to the page -->
          		  CKEDITOR.replace( 'editor' );
          		  function readURL(input) {

				    if (input.files && input.files[0]) {
				        var reader = new FileReader();

				        reader.onload = function (e) {
				            $('#preview').attr('src', e.target.result);
				        }

				        reader.readAsDataURL(input.files[0]);
				        $('#preview').show();
				    }
				}

					$("#imgInput").change(function(){
					    readURL(this);
					});
    </script>
</body>
</html>
<?php } ?> <!-- Don't touch this 😂😂-->