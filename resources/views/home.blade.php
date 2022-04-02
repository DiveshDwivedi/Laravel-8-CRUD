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
            {{-- insert data --}}
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="city">City:</label>
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter mobile no."
                        name="phone" maxlength="10" minlength="10" required>
                      </div>
                    <button type="submit" class="btn btn-success mt-1">Create</button>
                    <br>
                    @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                @endif
                  </form>

            </div>
            {{-- show data --}}
            <div class="col-sm-6">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (session()->has('delete'))
                        <div class="alert alert-danger" role="alert">{{ session()->get('delete') }}</div>
                        @endif
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->city }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="/delete/{{ $student->id }}" class="btn btn-danger">Delete</a>
                                <a href="/edit/{{ $student->id }}" class="btn btn-success">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity=
    "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
