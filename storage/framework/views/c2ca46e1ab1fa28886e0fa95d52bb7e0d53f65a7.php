


<?php $__env->startSection('title' , 'KECAMATAN 1'); ?>

<?php $__env->startSection('container'); ?>
<link rel="stylesheet" href="css/kecamatan_1.css">
<table class="table">
  <thead class="thead-dark">

<?php
$host    = "localhost";
$pass	 = "";
$user    = "root";
$db_name = "simantel";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM tower");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
?>
echo "</table>";
    <tr>
      <th scope="col">NOMOR</th>
      <th scope="col">TOWER</th>
      <th scope="col">ID</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">local</th>
      <th scope="col">.....</th>
      <th scope="col">-----</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>qwrqerqer,kahgdflksablasvhaljsehf;aglkhsb</td>
    </tr>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/kecamatan_batinxxiv.blade.php ENDPATH**/ ?>