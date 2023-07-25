 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="profile.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>user profile</title>
 </head>
 <?php session_start(); 
  include ('runSQL.php');
  ?>
 <body>
<?php
  $user_id = $_GET['user_id'];
  $sql2="SELECT * FROM profile WHERE user_id = '$user_id'";
  $result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);
  
  if($row){ ?>
  <div class="profile">
    <h2>My Profile</h2>
    <div class="content">
      <p><img style="width: 200px; height: 200px;" src="<?php echo $row['user_image']; ?>" alt="me"></p>
      <br>
      <p>Name:<?php echo $row['name']; ?></p>
      <p>Age: <?php echo $row['age']; ?></p>
      <p>Birthday: <?php echo $row['birthday']; ?></p>
      <p>Phone: +60 <?php echo $row['phone']; ?></p>
      <p>Email: <?php echo $row['email']; ?></p>
      <p>Comment: <?php echo $row['coment']; ?></p>
    </div>
  </div>
</div>
<?php } ?>
</body>
 </html>