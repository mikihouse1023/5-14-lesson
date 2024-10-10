<?php 
$imagePath = $_POST['imagePath'] ?? "images/club/1.png";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pocker Program</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
</head>
<body>
<form id="email-form" action="poker.php" method="post">
  <select id="suit1" name="suit1">
    <option value=""></option>
    <option value="spade">spade</option>
    <option value="heart">heart</option>
    <option value="diamond">diamond</option>
    <option value="club">club</option>
  </select>
  <select id="number1" name="number1">
    <option value=""></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
  </select>
  <button type="submit">SEND</button>
</form>
<section>
  <h1>hand of cards：</h1>
  <img src="<?php echo htmlspecialchars($imagePath); ?>" alt="Card Image" id="card-image">
</section>
</body>
</html>
