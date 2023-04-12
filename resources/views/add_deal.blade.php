<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-8 m-auto">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header" style="background: radial-gradient(#A3238A, #5E2E85);">
                    <h1 class="text-white text-center">Add product</h1>
                    
                </div>
                <label>Category</label>
                <select id="category" name="category" >
                    <option value="">select</option>
                    @foreach ($category as $row)
                    <option selected value="{{$row->id}}">{{$row->name}}</option>     
                    @endforeach <br/>   <br/></select><br>
                <label>Title</label>
                <input type="text"  name="title" /><br>
                <label>Actual price</label>
                <input type="number" name="actual_price" min="0"  step="any" /><br>
                <lable>Discounted Price</lable>
                <input type="number" name="discounted_price"  min="0"  step="any"/><br>
                <lable>Discription</lable>
                <input type="text" name="discription" /><br>
                <input type="file" name="image[]" multiple /><br></br>
                <button class="btn btn-success" name="submit" value="submit" type="submit">Submit</button><br>
                
            </div>



        </form>

    </div>
    
</body>
</html>