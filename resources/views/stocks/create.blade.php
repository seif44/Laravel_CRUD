<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>

<body style="padding: 5rem;">
    <h1>Add Product</h1>
    <form action="{{route('stocks.store')}}" method="post" >
        @csrf
        <label>name</label>
        <input type="text" class="form-control" name="name"><br>
        <label>price</label>
        <input type="text" class="form-control" name="price"><br>
        <label>description</label>
        <input type="text" class="form-control" name="descrebtion"><br>
        <input type="submit" class="btn btn-success">


    </form>
</body>

</html>