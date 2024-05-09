<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class=" container mt-5">
          <div class="row">
             <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="Model" class="form-label">Vehicel Name</label>
                        <input type="text" class="form-control" id="Model" name="vehiclename">
                    </div>
                    <div class="mb-2">
                        <label for="Price" class="form-label">Vehicle Price</label>
                        <input type="number" class="form-control" id="Price" name="price">
                    </div>
                    <div class="mb-2">
                        <label for="type" class="form-label">Vehicle Type</label>
                        <input type="value" class="form-control" id="type" name="type">
                    </div>
                    <div class="mb-2">
                        <label for="weight" class="form-label">Vehicle Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight">
                    </div>
                    <div class="mb-2">
                        <label for="image" class="form-label">Image</label>
                        <input type="image" class="form-control" id="image" name="image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">submit</button>
              </form>
             </div>
             <div class="col-sm-6">
             
               
             </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>