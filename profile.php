<!DOCTYPE html>
<html>
<head>
  <?php session_start(); 
  include ('runSQL.php');
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="profile.css">
  <script src="https://kit.fontawesome.com/759e025e11.js" crossorigin="anonymous"></script>
  <title>profile</title>
</head>
<body>
<div class="container">
  <div class="card">
    <img src="img/profile.jpeg" alt="me" class="card__image">
    <p class="card__name">TAN PEI XIANG</p>
    <a class="btn draw-border" href="#popup1">view profile</a>
    <a class="btn draw-border" href="profreg.php">Comment</a>
  </div>
</div>
<div id="popup1" class="overlay">
  <div class="popup">
    <h2>My Profile</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      <p><img style="width: 200px; height: 200px;" src="img/profile.jpeg" alt="me"></p>
      <br>
      <p>Name: TAN PEI XIANG</p>
      <p>Age: 23</p>
      <p>Birthday: 09-12-2000</p>
      <p>Phone: +60 12345678</p>
      <p>Email: xx@gmail.com</p>
    </div>
  </div>
</div>
<p> ----------------------------------------------------MESSAGES----------------------------------------------------------</p>
<?php
$sql="SELECT * FROM profile";
$result=mysqli_query($conn, $sql);

echo "<div class='container'>";
while ($row = mysqli_fetch_assoc($result)) {
 $user_id = $row['user_id'];
 
  echo "<div class='card'>";
   echo "<img src=".$row['user_image']." alt='Person' class='card__image'>";
   echo "<p class='card__name'>".$row['name']."</p>";
  echo "<a class='btn draw-border' href='userprofile.php?user_id=$user_id'>View Comment</a>";
  echo "<button class='btn draw-border' onclick='showConfirmation(".$row['user_id'].")'>Delete Comment</button>";
  echo "</div>";

  }

echo "</div>";
  ?>
<script>
  function showConfirmation(user_id) {
    var confirmed = confirm("Are you sure you want to delete this comment?");
    if (confirmed) {
      var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', 'delete.php');
    document.body.appendChild(form);

    var input_user_id = document.createElement('input');
    input_user_id.setAttribute('type', 'hidden');
    input_user_id.setAttribute('name', 'user_id');
    input_user_id.setAttribute('value', user_id);
    form.appendChild(input_user_id);

    form.submit();
    } else {
       console.log("Deletion canceled");
    }
  }
</script>

</body>
</html>