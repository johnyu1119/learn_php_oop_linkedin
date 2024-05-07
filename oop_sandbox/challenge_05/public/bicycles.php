<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<?php $bicycles=new Bicycles; 
$bicycles->readCSVfile(PRIVATE_PATH.'/used_bicycles.csv');
//echo "count is ".var_dump($bicycles)."<br />";
//echo "count is ".gettype($bicycles->bicycles)."<br />";
//$bicycles->printAllBicycle();
?>
<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>
      <?php foreach ($bicycles->bicycles as &$b)
      {  
        echo "<tr>";
        echo "<td>".$b->Brand."</td>";
        echo "<td>".$b->Model."</td>";
        echo "<td>".$b->Year."</td>";
        echo "<td>".$b->Category."</td>";
        echo "<td>".$b->Gender."</td>";
        echo "<td>".$b->Color."</td>";
        echo "<td>".$b->Weight."</td>";
        echo "<td>".$b->Condition."</td>";
        echo "<td>".$b->Price."</td>";
        echo "<tr>";
      }?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
