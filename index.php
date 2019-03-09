<html>
<head>
 

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="../project 2/css/bootstrap-grid.css">

<link href="index_css.css" rel="stylesheet" type="text/css">
<title> student registraion for placement</title>
<body class="body">
<table class="table1" height="150%" width="80%" align="center">
                <th id="th">
                  <font size="+2" color="#000000"><h2 align="center">PLACEMENT MANAGEMENT SYSTEM</h2></font></th>
                				  
		            <tr><td >
							<div class="div1">
							<table width="100%" height="5%">
							    <th class="head"><a href="?page=1">HOME</a></th>
								<th class="head"><a href="?page=2">CONTACT US</a></th>
								<th class="head"><a href="?page=3">ABOUT US</a></th>
								<th class="head"><a href="?page=4">STUDENT LOGIN</a></th>
								<th class="head"><a href="?page=5">ADMIN LOGIN</a></th>
								</table>
								</div>
								</td></tr>
	
				<tr><td>
				<div class="div2" align="center">
			<?php
			$a=$_GET['page'];
			switch($a)
			{
			case '':
			case '1': 
			include('home.php');
			break;
			case '2': 
			include('contact_us.php');
			break;
			case '3':
			include('about-us.php');
			break;
			case '4':
			include('reg.php');
			break;
			case '5':
			include('admin_login.php');
			break;
			case '6':
			include('details.php');
			break;
			case '7':
			include('create.php');
			break;
			}
			?>
			
			</div>
			</td>
			
			<tr><td height="3%">
			<h4 id="h4">&copy;&nbsp;Copyright Reserved</h4>
            </td>
</table>
</body>
</head>
</html>			
