<html>
<head>
<title>Exercise 2</title>
</head>
<body>
<h1> When did they die? </h1>
<p> <?php 
$authordeaths = array('Charles Dickens' => '1870', 'William Thackeray' => '1863', 'Anthony Trollope => '1882', 'Gerard Manley Hopkins' => '1889');
foreach($authordeaths as $name => $year){echo $name died in $year} ;?>
<p>

</body>
</html>