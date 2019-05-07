<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>My Shop</title>
  </head>
  <body style="height:1500px">
    <style type="text/css">
      #id1{
        text-decoration-color: red;
      }
      #link_name{
        text-decoration: none;
      }
      th{
        text-align: center;
      }
      ul li:hover ul {
        display: block;   
      }
      li:hover {
        background: #00BB00;
      }
      #linkmau:hover{
      	color: red;
      	size: 14;
      }
      ul li ul li a {display:block !important;} 
      ul li ul li:hover {background: #666;}

      div.thumbnail:hover {
  		border: 1px solid gray;
}
    </style>
    
    <body>
      <table style="width: 50%">
        <tr>
          <th>name</th>
          <th>phone</th>
          <th>city</th>
        </tr>
        
        <?php 
        include('config.php');
        $sql = "select * from customers";
        $query = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
    			<td><?php echo $row['customerName'] ?></td>
    			<td><?php echo $row['phone'] ?></td>
    			<td><?php echo $row['city']?></td>
    		</tr>
        <?php } ?>

    	</table>
    
  </body>
</html>