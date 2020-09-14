<?php
$query = "SELECT * FROM categories ORDER BY id DESC LIMIT 6";
$result = mysqli_query($connection, $query);
 ?>

<div class="sidebar-box">
  <h3 class="heading">Categories</h3>
  <ul class="categories">
    <?php
      while ($row = mysqli_fetch_array($result)) {
        $cat_id = $row['id'];
        $cat_title = $row['title'];
        $sql = mysqli_query($connection, "SELECT * FROM posts WHERE category_id=$cat_id");
        $span = mysqli_num_rows($sql);
        echo "<li><a href='category.php?cat_id=$cat_id'>$cat_title <span>($span)</span></a></li>";

      }

     ?>

  </ul>
</div>
