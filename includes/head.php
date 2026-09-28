<?php 
require_once("token.php");
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}



?>

  <base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Billing Services Company in the USA | NovaMedex</title>
  <meta name="description" content="NovaMedex is the USA's top-rated medical billing firm, deploying industry-leading billing and certified coding for healthcare providers with a 98% first-pass clean claim rate.">
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Clean Modular CSS -->
  <link rel="stylesheet" href="assets/css/variables.css">
  <link rel="stylesheet" href="assets/css/styles.css?v=<?= time() ?>">