<link rel="stylesheet" type="text/css" href="style.css">
<div class="center">

<style> 
  input[type=submit]{
  background-color: #47B5FF;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
  <h1>ARHAN DONI SEPTIAN</h1>
  <h1>4180004</h1>
  <form
method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="inputbox">
      <input type="text" required="required" name="bil">
      <span>INPUT ANGKA BEBAS</span>
    </div>
    <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ 
			    echo "$bil Duar!"; 
		}else {
			    echo "$bil Plung!";
		}
	}
?>
  </form>
</div>