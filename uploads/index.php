<!doctype html>
<html lang="en">
<?php require_once 'functions.php'; ?>

<head>
  <title>Import CSV</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="files">Files</label>
          <select class="form-control" name="files" id="files">
            <?php foreach (get_files() as $value) {
              echo "<option>$value</option>";
            } ?>
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="log">Log</label>
          <textarea class="form-control" name="log" id="log" rows="30"></textarea>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-primary start-button">Start</button>
    <button type="button" class="btn btn-danger stop-button">Stop</button>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script>
    $(() => {
      $('.start-button').click((e) => {
        $('.start-button').attr('disabled', true);
        console.log($('#files').val());
        $.post('process.php', {
          filepath: $('#files').val()
        }, (data, status) => {
          $('#log').append(data);
          $('.start-button').attr('disabled', false);
          if (data.startsWith('Insert')) {
            if ($('#files option:selected').next().length == 1) {
              $('#files option:selected').next().attr('selected', 'selected');
              $('.start-button').click();
            } else {
              alert('End');
            }
          } else {
            alert('Error');
          }
        });
      });
    });
  </script>
</body>

</html>