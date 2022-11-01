<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <h2 class="text-center text-danger mt-5">Bai3-Lab2</h2>
  <div class="container">

    <ul class="list-group mt-5">
      <?php for ($i = 1; $i < 100; $i++) { ?>
        <?php if ($i % 2 == 0) { ?>
          <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: pink; color:black">
            Item <?php echo $i ?>
            <span class="badge badge-primary badge-pill"><?php echo $i ?></span>
          </li>
        <?php } else { ?>
          <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: black; color:aliceblue">
            Item <?php echo $i ?>
            <span class="badge badge-primary badge-pill"><?php echo $i ?></span>
          </li>
        <?php } ?>
      <?php } ?>
    </ul>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>