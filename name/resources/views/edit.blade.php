<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h2>Name form</h2>
                <form action="" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3 mt-3">
                        <label for="name">name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$name->name}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>