<?php include "navbar.php";
?>

<div class="tablecontainer">
<table>
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Name</th>
      <th class="text-center">Email</th>
      <th class="text-center">Phone</th>
      <th class="text-center">Address</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include_once "config.php";
    $q = "select * from signup";
    $result = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td class='text-center'>$row[id]</td>
                            ";
      echo "<td class='text-center'>$row[name]</td>
                            ";
      echo "<td class='text-center'>$row[phone]</td>"
      ;
      echo "<td class='text-center'>$row[email]</td>"
      ;
      echo "<td class='text-center'>$row[address]</td>";
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