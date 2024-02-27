<head>
  <?php
  $sql = "SELECT * FROM constants_home WHERE title = 'name logo'";
  $result = $conn->query($sql);
  while ($fetched = $result->fetch_assoc()) {
    $show = $fetched['text'];

    echo '
    <title>'.$show.' &mdash; Portfolio</title>
    ';
  }
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <?php
  $sql = "SELECT * FROM constants_about WHERE title = 'picture'";
  $result = $conn->query($sql);
  while ($fetched = $result->fetch_assoc()) {
    $show = $fetched['text'];

    echo '
    <link rel="shortcut icon" href="' . $show . '">
    ';
  }
  ?>



  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>