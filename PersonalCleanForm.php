<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Personal Clean Form</title>
    <Style>
        .margin{
            margin-top: 50px;
        }
        .hh{
            padding:10px;
           
        }

    </Style>
</head>

<body>
    <div class="container hh" style="border:3px solid black; background-color: lightgrey;">

       

        <div class="text-center">
            <h1>Personal Clean Form</h1>
            <hr>
        </div>
        <hr>
        <p>Payment may charged</p>
        <h3>Work Type</h3>
       <div> <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">PERSONAL HOUSE CLEANING </option>
            <option value="2">WATERTANK AND RELATED CLEANING</option>
            <option value="3">OTHERS </option>
          </select>
        </div>
        <div>
            <form class="row g-3 needs-validation margin" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Mobile Number </label>
                    <input type="number" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">CITY</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div> <br>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Photo(Optional)</label>
                    <button type="button" class="btn btn-primary">View</button>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>










                

                <div class="col-12">
                    <button class="btn btn-success center" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>