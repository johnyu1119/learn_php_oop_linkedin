<?php require_once('../../../private/initialize.php'); ?>


<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

<a href=<?php echo url_for('/staff/pages/index.php') ?>>&laquo; Back to List</a><br />

<?php


// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

echo "PageID: ".h($id);


?>


</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>