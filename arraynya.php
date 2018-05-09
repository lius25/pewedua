<!DOCTYPE html>
<html>
<head>
	<title>Percobaan Array</title>
</head>
<body>
	<h1>belajar Array</h1>
	<?php 
$mahasiswa = ["husnul","hendri","bagas","chairul","fajar"];
	$prodi = [
		[ 
		  "id"=>1,
		  "nama"=>"sisfo",
		  "kuota"=>"58",
		  "kaprodi"=>"ilhamsyah"
		],
		[ 
		  "id"=>2,
		  "nama"=>"kelautan",
		  "kuota"=>"32",
		  "kaprodi"=>"nora"
		],
		[ 
		  "id"=>3,
		  "nama"=>"kimia",
		  "kuota"=>"40",
		  "kaprodi"=>"andi"
		],
		[ 
		  "id"=>4,
		  "nama"=>"fisika",
		  "kuota"=>"25",
		  "kaprodi"=>"nurhasanah"
		],
		[ 
		  "id"=>4,
		  "nama"=>"biologi",
		  "kuota"=>"40",
		  "kaprodi"=>"rizalinda"
		]
		];					
 ?>
<h2>  	
<?php 
	echo $prodi["kaprodi"];
	?>
</h2>

<h3>
	<?php 
		echo $prodi [3]["nama"];
	 ?>
</h3>

</body>
</html>	