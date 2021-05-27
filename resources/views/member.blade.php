<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveIt - member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/memberStyle.css">
    <script src="https://kit.fontawesome.com/9e886f53f9.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="box">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <img id="logo" src="../assets/MentolLogo.png">
              <div class="content-nav">
                <label id="greetings"></label>
                <div class="droppudown">
                    <i class="fas fa-user-circle fa-4x" id="user-icon"></i>
                    <label id="arrowDown" for="user-icon"><i class="fas fa-caret-down"></i></label>
                    <div class="dropdown-content">
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="addbtn">
            <a href="../html/cart.html">
                <button id="add" type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </a>
        </div>
        <div class="content">
            <div class="user">
                <div class="top">
                    <img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_08_28/danone-aqua_140327_big.jpg" alt="">
                    <div class="labelProduct">[Sample Product]</div>
                    <h6>Price: XX</h6>
                </div>
                <div class="bott">
                    <button id="addToCart" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stockModal">
                        <i class="fas fa-plus"></i>
                    </button>
        
                    <div class="modal fade" id="stockModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">[Sample Product]</h5>
                                </div>
                                <div id="body-top">
                                    <h6>Category: [Product Category]</h6>
                                    <h6>Price: Rp[Product Price]</h6>
                                    <h6>Stock available: [Stock]</h6>
                                </div>
                                <div class="modal-body" id="stock-body">
                                    <label>Quantity</label>
                                    <input type="number" min="0" value="0" id="stock-input">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/member.js"></script>
</body>
</html>