<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<div class="container">
    <h1>Cập nhật sách</h1>
    <form action="{{route('book.update',$book->id)}} " method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="" value="{{$book->id}}">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{$book->title}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Url Thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" value="{{$book->thumbnail}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="" value="{{$book->author}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="" value="{{$book->publisher}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Publication</label>
            <input type="datetime-local" name="publication" class="form-control" value="{{$book->publication}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="" value="{{$book->price}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="" value="{{$book->quantity}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <select  class="form-select" aria-label="Default select example" name="category_id">
                @foreach($categories as $cate)
                    <option value="{{$cate->id}}"
                    @if($cate->id === $book->category_id) selected @endif
                    >
                        {{$cate->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update book</button>
            <a href="{{route('book.index')}}" type="submit" class="btn btn-success " >List</a>
        </div>

    </form>
</div>

</body>
</html>


