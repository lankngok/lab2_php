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
  <h2 class="text-center text-danger mt-5">Bai4-Lab2</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-4">
        <?php for ($i = 1; $i < 7; $i++) { ?>
          <?php if ($i > 3) { ?>
            <div class="form-check">
              <input class="form-check-input" checked type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } else { ?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } ?>
        <?php } ?>
      </div>

      <div class="col-lg-4">
        <?php for ($i = 1; $i < 7; $i++) { ?>
          <?php if ($i % 2 == 0) { ?>
            <div class="form-check">
              <input class="form-check-input" checked type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } else { ?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } ?>
        <?php } ?>
      </div>

      <div class="col-lg-4">
        <?php for ($i = 1; $i < 7; $i++) { ?>
          <?php if ($i == 1 || $i==5) { ?>
            <div class="form-check">
              <input class="form-check-input" checked type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } else { ?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Checkbox <?php echo $i ?>
              </label>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>