<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>

<body style="padding: 5rem;">
    <h1>Show all Products</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $el )
            <tr>
                <th>{{$el ->id}}</th>
                <td>{{$el ->name}}</td>
                <td>{{$el ->price}}</td>
                <td>{{$el ->descrebtion}}</td>
                <td>
                    <form action="{{route('stocks.destroy',$el->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{route('stocks.edit',$el->id)}}" class="btn btn-info">edit</a>
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('stocks.create')}}" class="btn btn-primary" style="margin-left: 71rem;">Create</a>
</body>

</html>