<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student record using Eloquent</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-6">
                <form action="{{ route('update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}"/>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $student->name }}" >
                    </div>
                    <div class="form-group">
                      <label for="city">City:</label>
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="{{ $student->city }}" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter mobile no."
                        name="phone" maxlength="10" minlength="10" value="{{ $student->phone }}" >
                      </div>
                    <button type="submit" class="btn btn-success mt-1">Update</button>
                    <br>

                  </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
