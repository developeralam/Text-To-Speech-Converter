<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      body{
        height:100vh;
        position: relative;
      }
      .container{
        position: absolute;
        left:50%;
        top:50%;
        transform: translate(-50%, -50%);
      }
      .result a{
        position: absolute;
        margin-top:10px;
        margin-left:5px;
      }

    </style>
    <title>Text To Speech Converter</title>
  </head>
  <body class="bg-light">
    <div class="container w-50 m-auto">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center font-italic">Text To Speech Converter</h2>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="text" class="font-italic font-weight-bold">Enter Your Text</label>
              <textarea name="text" id="text" cols="30" rows="7" class="form-control"></textarea>
            </div>
            <input type="submit" id="convert" class="btn btn-primary" value="Convert">
          </form>
          <div class="result mt-2"></div>
        </div>
        <div class="card-footer">
          <h3 class="text-center font-italic">Developed By <a href="https://facebook.com/developeralam">Md Alam</a></h3>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Custom Script  -->
    <script>
      $(document).ready(function(){
        $("#convert").click(function(){
          var text = $("#text").val();
          $.ajax({
              url:'convert.php',
              type:'post',
              data:'text='+text,
              success:function(data){
                $(".result").html(data);
              }
          });
              return false;
        })
      })
    </script>
  </body>
</html>