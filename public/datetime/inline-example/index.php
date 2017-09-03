<?php
$date = new DateTime();
$dateStr = $date->format('Y-m-d');
 ?>


<html>
<!-- You can cp and paste this as index.php to practice
css and javascript  -->
<head>
<style>
body
{
  color: black;
}
</style>

<script src="/js/jquery-3.2.1.min.js"></script>

<script>
</script>


</head>



<body>
Today's date is <?php echo $dateStr ?>.

</body>

</html>
