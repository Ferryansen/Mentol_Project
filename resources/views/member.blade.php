<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentol - member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/memberStyle.css">
    <script src="https://kit.fontawesome.com/9e886f53f9.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="box">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <img id="logo" src="/asset/MentolLogo.png">
              <div class="content-nav">
                <label id="greetings">Hello, {{ Auth::user()->name }}</label>
                <div class="droppudown">
                    <i class="fas fa-user-circle fa-4x" id="user-icon"></i>
                    <label id="arrowDown" for="user-icon"><i class="fas fa-caret-down"></i></label>
                    <div class="dropdown-content">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="addbtn">
            <a href="{{ route('cart.faktur') }}">
                <button id="add" type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </a>
        </div>
        <div class="content">
            @foreach ($products as $product)
            <?php $taken = 0; ?>
            <div class="user">
                <div class="top">
                    <img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_08_28/danone-aqua_140327_big.jpg" alt="">
                    <div class="labelProduct">{{ $product->name }}</div>
                    <h6>Price: {{ $product->price }}</h6>
                </div>
                <div class="bott">
                    <button id="addToCart" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stockModal{{ $product->id }}">
                        <i class="fas fa-plus"></i>
                    </button>

                    @if ($product->stock > 0)
                    <div class="modal fade" id="stockModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $product->name }}</h5>
                                </div>
                                <div id="body-top">
                                    <h6>Category: {{ $product->category }}</h6>
                                    <h6>Price: Rp{{ $product->price }}</h6>
                                    <h6>Stock available: {{ $product->stock }}</h6>
                                </div>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="productid" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="category" value="{{ $product->category }}">
                                    <input type="hidden" name="price" type="number" value="{{ $product->price }}">
                                    <div class="modal-body" id="stock-body">
                                        <label>Quantity</label>
                                        <input name="quantity" type="number" min="1" value="{{ $taken }}" id="stock-input">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add to cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="modal fade" id="stockModal{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">We're sorry..</h5>
                            </div>
                            <div class="modal-body">
                                It seems like this stock is unavailable for a while, please choose another product :)
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
</body>
</html>