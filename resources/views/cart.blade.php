<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mentol - myCart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/CSS/cartStyle.css">
        <script src="https://kit.fontawesome.com/9e886f53f9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php  
            $invoiceNumber = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzASDFGHJKLQWERTYUIOPZXCVBNM"), 0, 2) . substr(str_shuffle("1234567890"), 0, 5);
        ?>
        <nav class="cartNav">
            <a href="{{ route('member.index') }}" id="goback"><button>go back ?</button></a>
            <div class="title">
                <h3 id="invoice">Invoice No. {{ $invoiceNumber }}</h3>
            </div>
        </nav>
        <?php $totalPrice = 0; ?>
        <section class="product">
            @foreach ($carts as $cart)
            <?php $subtotalPrice; ?>
            <div class="products">
                <img src="https://library.kissclipart.com/20180921/yiq/kissclipart-material-manager-cartoon-clipart-inventory-managem-f4b1148679eb31cc.jpg">
                <table>
                    <tr>
                        <td>{{ $cart->name }}</td>
                        <td>{{ $cart->category }}</td>
                        <td>
                            <div class="containerQuanPrice">
                                <div class="quanprice">
                                    <h5>x{{ $cart->quantity }}</h5>
                                    <h5>Rp {{ $subtotalPrice = $cart->price * $cart->quantity }}</h5>
                                    <input type="hidden" value="{{ $totalPrice = $totalPrice + $subtotalPrice }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btndel">Delete</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
        </section>
        <section class="form">
            <form class="isian" action="{{ route('member.order') }}" method="POST">
            @csrf
                <div class="top">
                    <div class="street">
                        <label>Alamat Pengiriman</label>
                        <input type="text" name="address">
                    </div>
                    <div class="pos">
                        <label>Kode POS</label>
                        <input type="text" maxlength="5" name="pos">
                    </div>
                    <input name="customer" type="hidden" value="{{ Auth::user()->name }}">
                    <input name="total_price" type="hidden" value="{{ $totalPrice }}">
                    <input name="invoice" type="hidden" value="{{ $invoiceNumber }}">
                </div>
                <div class="bot">
                    <h4>Total Price: Rp {{ $totalPrice }}</h4>
                    <button type="submit">Order</button>
                </div>
            </form>
        </section>

        <script src="/js/cart.js"></script>
    </body>
</html>