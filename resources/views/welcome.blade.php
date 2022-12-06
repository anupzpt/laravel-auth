<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OutDoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .Container{
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="Container">
        <h1>Outdoor</h1>
        <form action="{{route('outDoor')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Batch" class="form-label">Batch number</label>
                <input type="text" class="form-control" id="" name="batch" placeholder="Batch Number">
              </div>
              <div class="mb-3">
                <label for="number" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="" name="quantity" placeholder="Quantity ">
              </div>
              <div class="mb-3">
                <label for="select" class="form-label">Selection</label>

                <select class="form-select" name="status" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="Good">Good</option>
                    <option value="Moderate">Moderate</option>
                    <option value="Worst">Worst</option>
                  </select>
              </div>
              <label for="select" class="form-label">Comments</label>

              <div class="form-floating">

                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment"></textarea>
                <label for="floatingTextarea">Comments</label>
              </div>
              <div>
                <button class="btn btn-primary" style="margin-top: 15px" type="submit">Done</button>
                </div>

        </form>
        <table class="table table-bordered mt-3 text-center">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Batch No</th>
                <th scope="col">Quantity</th>
                <th scope="col">Manufacture Date </th>
                <th scope="col">Status</th>
                <th scope="col">Remarks</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
                {{-- @int{ $sn=0}; --}}
                @php
                    $SN=1;
                @endphp
                @foreach ($list as $value)
                <tr>
                    <td>{{$SN++}}</td>
                    <td>{{$value->Batch}}</td>
                    <td>{{$value->Quantity}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->Status}}</td>
                    <td>{{$value->Comment}}</td>

                    <td>
                        <button class="btn btn-primary"><a href="{{url('/edit/'.$value->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                    </td>
                    <td>
                        {{-- <button class="btn btn-danger"><a href="delete/{{ $value->id}}" class="text-white"><span class="fas fa-trash ml-3"></a></button> --}}
                        <button class="btn btn-danger"><a href="{{url ('/delete/'.$value->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
