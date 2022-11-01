<?php
$img = [
  "https://phunugioi.com/wp-content/uploads/2022/03/Avatar-Gau.jpg",
  "https://img5.thuthuatphanmem.vn/uploads/2021/11/22/anh-avatar-gau-cute_092859783.jpg",
  "https://thuthuat.com.vn/wp-content/uploads/2022/07/hinh-anh-avatar-de-thuong-cute.jpg",
  "https://haycafe.vn/wp-content/uploads/2022/03/Avatar-de-thuong-cute.jpg",
  "https://symbols.vn/wp-content/uploads/2022/01/Hinh-meo-chibi-cam-co-bon-la-cute.jpg"
];
$arrLength = count($img);
?>

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
  <h2 class="text-center text-danger mt-5">Bai1-Lab2</h2>
  <div class="container">
    <div class="d-flex">
      
      <?php for ($i = 0; $i < $arrLength; $i++) { ?>
        <div class="card mt-5 ml-3" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo $img[$i]; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $i ?>">
              View
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img class="card-img-top" src="<?php echo $img[$i]; ?>" alt="Card image cap">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>