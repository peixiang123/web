<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="profreg.css">
	<title>Insert Information</title>
</head>
<body>
<div class="container">

  <div class="brand-title">PROFILE</div>
  <div class="inputs">
    <form action= "insert.php" method="post" enctype="multipart/form-data">
  <p>
    <label>User Image: </label>
  <input type="file" name="fileToUpload" id="fileToUpload">
</p>
<p>
    <label>Name: </label>
  <input type="name" name="name">
</p>
      <p>
        <label>Age: </label>
      <input type="age" name="age">
  </p>
  <p>
      <label>Birthday: </label>
      <input type="date" name="birthday">
  </p>
  <p>
      <label>Phone: </label>
      <input type="phone" name="phone">
  </p>
  <p>
      <label>Email: </label>
      <input type="email" name="email">
  </p>
  <p>
      <label>Your Comment: </label>
      <textarea type='text' id='coment' name="coment"></textarea>
  </p>

  <button>submit</button>
</form>
  </div>
</div>
</body>
</html>