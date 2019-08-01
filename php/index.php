<?php
    include_once 'php/phpconfig.php'; ?>
<style>
    <?php include 'main.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- CSS, JS, and PHP files worked on-->

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/css">
	<script src="php/phpconfig.php"></script>

	<title>Cross | Connect</title>


    </head>
<body>

<?php
    $sql = "SELECT * FROM courses;";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    ?>
    
    <?php
    
    echo "<p> Results</p>
					<table class='table mytable table-dark'>
        <thead>
			<tr>
				<th scope='col'>Course Name:</th>
				<th scope='col'>Semester:</th>
				<th scope='col'>Credits:</th>
				<th scope='col'>College:</th>
				<th scope='col'>Day(s):</th>
				<th scope='col'>Start Time:</th>
				<th scope='col'>End Time:</th>
			</tr>
		</thead>";
    
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //echo "<th scope='col'>Course Name:</th>";
            echo "<tbody>
                    <tr>";
            
            echo "<th scope='row'>";
            echo $row['Course Name'];
            echo "</th>";
            //echo "</ br>";
            
            //echo "<th scope='col'>Semester:</th>";
            echo "<td>";
            echo $row['Semester'];
            echo "</td>";
            //echo "</ br>";
            
            //echo "<th scope='col'>Credits:</th>";
            echo "<td>";
            echo $row['Credits'];
            echo "</td>";
            //echo "</ br>";
            
            //echo "<th scope='col'>School:</th>";
            echo "<td>";
            echo $row['School'];
            echo "</td>";
            //echo "</ br>";
            
            //echo "<th scope='col'>Day(s):</th>";
            echo "<td>";
            echo $row['Day(s)'];
            echo "</td>";
            
            //echo "<th scope='col'>Time Start:</th>";
            echo "<td>";
            echo $row['Time Start'];
            echo "</td>";
            
            //echo "<th scope='col'>Time End:</th>";
            echo "<td>";
            echo $row['Time End'];
            echo "</td>";
            
            echo "</tr>
						</tbody>";
        }
    }
    
    echo "<div id='screen-shader' style='
            transition: opacity 0.1s ease 0s; 
            z-index: 2147483647;
            margin: 0; 
            border-radius: 0; 
            padding: 0; 
            background: #fac563; 
            pointer-events: none; 
            position: fixed; 
            top: -10%; 
            right: -10%; 
            width: 120%; 
            height: 120%; 
            opacity: 0.4080;
            mix-blend-mode: multiply; 
			display: block;'>
</div>";
?>

<script src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

	<script src="js/jquery.scrollify.js"></script>

	<script src="js/main.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

</body>
</html>