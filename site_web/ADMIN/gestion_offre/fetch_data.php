<?php

//fetch_data.php

include('database_connection.php');

$query = "SELECT * FROM offre_t";
$statement = $connect->prepare($query);
if($statement->execute())
{
	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$data[] = $row;
	}

	echo json_encode($data);
}

?>