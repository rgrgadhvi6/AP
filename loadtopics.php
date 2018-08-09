<?php
include "include/db_config.php";

$courId = $_GET['courId'];
$query3 = "SELECT * FROM topic WHERE courId= $courId";
$result3 = mysqli_query($conn,$query3);
?>
<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="val-topic"> Select Topic<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select class="form-control" id="topId" name="topId">
        <option>Please select</option>

    </div>

</div>
<?php
    while($row3 = mysqli_fetch_assoc($result3))
      {
    ?>
      <option value="<?php echo $row3['topId'];?>"><?php echo $row3['topName']; ?></option>
      <?php
      }
      ?>
</select>
