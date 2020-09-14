<div class="sidebar-box">
  <h3 class="heading">Recent Posts</h3>
  <div class="post-entry-sidebar">
    <ul>
<?php
$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
  $post_id = $row['id'];
  $post_title = $row['title'];
  // $post_author = $row['author'];
  // $post_category = $row['post_category'];
  $post_category_id = $row['category_id'];
  $post_content = $row['body'];
  $post_tags = $row['post_tag'];
  $post_status = $row['published'];
  $post_image = $row['image'];
  $date = $row['created_at'];
  // $post_views = $row['views'];
  // $post_comment_count = $row['comment_count'];

  ?>


      <li>
        <a href="single.php?post=<?php echo $post_id; ?>">
          <img src="admin/images/<?php echo $post_image;?>" alt="Image placeholder" class="mr-4">
          <div class="text">
            <h4><?php echo $post_title;?></h4>
            <div class="post-meta">
              <span class="mr-2"><?php echo $date;?> </span>
            </div>
          </div>
        </a>
      </li>
<?php }
 ?>

 </ul>
 </div>
 </div>
