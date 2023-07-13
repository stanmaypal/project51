<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></a>
</head>
<body id="bd">
    <div class="container">
        <div class="row">
        <center><h1>Add Slide Page</h1>
  <form class="border-2 card" style="width:30%" action="add_slier.php" method="post" enctype="multipart/form-data">
  <div class="mb-3" style="">
    <label for="exampleInputEmail1" class="form-label">Select Slider</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="mimg" aria-describedby="emailHelp">
      </div>
  <div class="mb-3" style="">
    <label for="exampleInputPassword1" class="form-label">Write Heading</label>
    <input type="text" class="form-control" placeholder="Write heading...." name="head" id="exampleInputPassword1">
  </div>
  <div class="mb-3" style="">
    <label for="exampleInputPassword1" class="form-label">Write Content</label>
    <input type="text" class="form-control" placeholder="Write Content...." name="cnt" id="exampleInputPassword1">
  </div>
  
  <button type="submit" style="margin-bottom:10px;" name="btn" class="btn btn-primary">Submit</button>
</form>
</center>


        </div>
    </div>
  
</body>
</html>