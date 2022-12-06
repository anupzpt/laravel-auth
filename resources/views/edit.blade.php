<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Outdoor</h1>
        <form action="{{route('updateOutdoor')}}" method="POST">
            @csrf
            <div>
                <input type="hidden" name="id" value={{$data->id}}>
            </div>
            <div class="mb-3">
                <label for="Batch" class="form-label">Batch number</label>
                <input type="text" class="form-control" id="" name="batch" placeholder="Batch Number" value="{{$data->Batch}}">
              </div>
              <div class="mb-3">
                <label for="number" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="" name="quantity" placeholder="Quantity" value="{{$data->Quantity}}">
              </div>
              <div class="mb-3">
                <label for="select" class="form-label">Selection</label>

                <select class="form-select" name="status" aria-label="Default select example" value="{{$data->Status}}">
                    <option selected>Open this select menu</option>
                    <option value="Good">Good</option>
                    <option value="Moderate">Moderate</option>
                    <option value="Worst">Worst</option>
                  </select>
              </div>
              <label for="select" class="form-label">Comments</label>

              <div class="form-floating">

                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comment" value="{{$data->Comment}}"></textarea>
                <label for="floatingTextarea">Comments</label>
              </div>
              <div>
                <button class="btn btn-primary" style="margin-top: 15px" type="submit">Done</button>
                </div>

        </form>
    </div>
</body>
</html>
