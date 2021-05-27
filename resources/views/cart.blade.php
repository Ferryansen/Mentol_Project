<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SaveIt - myCart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/CSS/cartStyle.css">
        <script src="https://kit.fontawesome.com/9e886f53f9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="cartNav">
            <a href="../html/index.html" id="goback"><button>go back ?</button></a>
            <div class="title">
                <h3 id="invoice"></h3>
            </div>
        </nav>
        <section class="product">
            <div class="products">
                <img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_08_28/danone-aqua_140327_big.jpg">
                <table>
                    <tr>
                        <td>[Product Name]</td>
                        <td>[Product Category]</td>
                        <td>
                            <div class="containerQuanPrice">
                                <div class="quanprice">
                                    <h5>x[Product Quantity]</h5>
                                    <h5>[Product Price]</h5>
                                </div>
                            </div>
                        </td>
                        <td><button class="btndel">Delete</button></td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="form">
            <form class="isian">
                <div class="top">
                    <div class="street">
                        <label>Alamat Pengiriman</label>
                        <input type="text">
                    </div>
                    <div class="pos">
                        <label>Kode POS</label>
                        <input type="number">
                    </div>
                </div>
                <div class="bot">
                    <h4>Total Price: Rp XXXXX</h4>
                    <button type="submit">Save</button>
                </div>
            </form>
        </section>

        <script src="/js/cart.js"></script>
    </body>
</html>