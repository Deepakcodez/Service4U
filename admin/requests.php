<?php include "navbar.php";
?>

<div class="tablecontainer">
<table>
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Name</th>
      <th class="text-center">Phone</th>
      <th class="text-center">Aadhar</th>
      <th class="text-center">Email</th>
      <th class="text-center">ocuupation</th>
      <th class="text-center">experience</th>
      <th class="text-center">Address</th>
      <th class="text-center">approve</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include_once "config.php";
    $q = "select * from requests";
    $result = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td class='text-center'>$row[id]</td>
                            ";
      echo "<td class='text-center'>$row[name]</td>
                            ";
      echo "<td class='text-center'>$row[phone]</td>"
      ;
      echo "<td class='text-center'>$row[aadhar]</td>"
      ;
      echo "<td class='text-center'>$row[email]</td>"
      ;
      echo "<td class='text-center'>$row[occupation]</td>";
      echo "<td class='text-center'>$row[experience]</td>";
      echo "<td class='text-center'>$row[address]</td>";
      
      ?>
     <form method="post" action="approve.php">
           <input type="hidden" name="row_id" value="<?php echo $row['id']; ?>"> <!-- Use the row's unique identifier as value -->
           <td class='text-center'><button class='approve' name="approve">Approve</button></td>
</form>
<?php
      echo "</tr>";
    }

    ?>

    <tr>

    </tr>

  </tbody>
</table>
</div>


<?php
include 'footer.php'; ?>