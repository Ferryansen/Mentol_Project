<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveIt - [Product]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/viewStyle.css">
    <script src="https://kit.fontawesome.com/9e886f53f9.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="boxView">
        <div class="info">
            <div class="top">
                @if ($product->file == null)
                    <img src="https://library.kissclipart.com/20180921/yiq/kissclipart-material-manager-cartoon-clipart-inventory-managem-f4b1148679eb31cc.jpg" alt="">
                @else
                    <img src="{{ asset('storage/', $product->file) }}" alt="{{$product->file}}">
                @endif
            </div>
            <div class="middle">
                <h3>{{ $product->name }}</h3>
                <br>
                <h4>Category: {{ $product->category }}</h4>
                <h4>Stock: {{ $product->stock }}</h4>
                <h4>Price: Rp. {{ $product->price }}</h4>
                <br>
                <h4>Changes were made {{ $product->created_at->diffForHumans() }}</h4>
            </div>
            <div class="bottom">
                <a href="{{ route('product.sets') }}"><button>go back?</button></a>
            </div>
        </div>
    </section>
</body>
</html>