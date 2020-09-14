<?php
$query = "SELECT * FROM posts ORDER BY id DESC";
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
  <div class="col-md-6">
    <a href="single.php?post=<?php echo $post_id; ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
      <img src="admin/images/<?php echo $post_image;?>" alt="Image placeholder">
      <div class="blog-content-body">
        <div class="post-meta">
          <span class="author mr-2"><?php echo "post_author";?></span>&bullet;
          <span class="mr-2"><?php echo $date;?> </span> &bullet;
          <span class="ml-2"><span class="fa fa-comments"></span> <?php echo "post_comment_count";?></span>
        </div>
        <h2><?php echo $post_title;?></h2>
      </div>
    </a>
  </div>

<?php }
 ?>
