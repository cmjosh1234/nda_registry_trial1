<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/styletabs.css">
<script src="../assets/js/tabs.js"></script>
</head>
<body>

<div class="header">
    <img src="../assets/logo1.png" alt="">
    <h1>NDA REGISTRY</h1>
</div>

<div class="navbar">
  <a href="#" class="active">HOME</a>
  <a href="index.php">INCOMING 2021</a>
  <a href="letters_without_reference_2021/index.php">LETTERS WITHOUT REFERENCE 2021</a>
  <a href="paste_errors/index.php">PASTE ERRORS</a>
  <a href="Staff/index.php" class="right">STAFF</a>
</div>

<div class="row">
  <div class="side">
    <h2>NDA Profile</h2>
    <img src="../assets/NDAimage.jpg" style="height:270px;" >
    <p>The National Drug Authority (NDA) was established in 1993 by the National Drug Policy and Authority Statute which in 2000 became the National Drug Policy and Authority (NDP/A) Act, Cap. 206 of the Laws of Uganda (2000 Edition).</p>
    <p>The Act established a National Drug Policy and National Drug Authority to ensure the availability, at all times, of essential, efficacious and cost-effective drugs to the entire population of Uganda as a means of providing satisfactory healthcare and safeguarding the appropriate use of drugs.</p>
  </div>
  <div class="main">
    <!-- Tab links -->
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Vision')">VISION</button>
    <button class="tablinks" onclick="openCity(event, 'Mission')">MISSION</button>
    <button class="tablinks" onclick="openCity(event, 'CoreValues')">CORE VALUES</button>
  </div>
  
  <!-- Tab content -->
  <div id="Vision" class="tabcontent">
    <h3>VISION</h3>
    <p>A world class Drug Regulatory Agency.</p>
  </div>
  
  <div id="Mission" class="tabcontent">
    <h3>MISSION</h3>
    <p>To protect and promote Human and Animal health through the effective regulation of drugs and healthcare products.</p>
  </div>
  
  <div id="CoreValues" class="tabcontent">
    <h3>CORE VALUES</h3>
    <ul>
        <li>We Care for the people of Uganda.</li>
        <li>We take Pride in what we do</li>
        <li>We serve with Integrity</li>
        <li>We value Team spirit.</li>
        <li>We Embrace new knowledge and Innovation.</li>
    </ul>
  </div>
  </div>
</div>

<div class="footer">
<?php 
	include_once('includes/footer.php')
?>
</div>

</body>

</html>
