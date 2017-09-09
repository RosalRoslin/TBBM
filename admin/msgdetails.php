<?php 
require_once("../class/dbconnect.php");

$sql = "SELECT * FROM contact";
$result = $DBcon->query($sql); 
$DBcon->close();   
?>

<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Message Details</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    <tr class="table-row" contactid="row-<?php echo $row["contactid"]; ?>"> 
                      <td><h4>From:<?php echo $row["firstname"]; ?></h4></td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: <?php echo $row["website"]; ?></td>
                    </tr>
                    <tr>
                      <td >E-Mail Id: <?php echo $row["email"]; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <?php
        if ($result->num_rows > 0) {    
          while($row = $result->fetch_assoc()) {
      ?>
      <tr class="table-row" contactid="row-<?php echo $row["contactid"]; ?>"> 
                      <td class="width30">Contact ID:</td>
                      <td class="width70"><strong><?php echo $row["contactid"]; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Msg Time:</td>
                      <td><strong><?php echo $row["msgtime"]; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Msg From:</td>
                      <td><strong><?php echo $row["firstname"]; ?></strong></td>
                    </tr>
                  <td class="width30">Message:</td>
                    <td class="width70"><strong><?php echo $row["message"]; ?></strong> <br>
                      Contact No: <?php echo $row["website"]; ?> <br>
                      Email: <?php echo $row["email"]; ?></td>
                  </tr>
                    </tbody>
                  <?php
          }
        }
      ?>

                </table>
              </div>
            </div></div></div>
</div></div></div>