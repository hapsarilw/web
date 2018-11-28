@extends('base')
@section('content')
    <!-- Main Section -->
    <style>
        ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
        li.active{border-bottom:3px solid silver;}

        .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
        .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
        .btn-success{width:100%;border-radius:0;}
        .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
        .title-price{margin-top:30px;margin-bottom:0;color:black}
        .title-attr{margin-top:0;margin-bottom:0;color:black;}
        .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
        .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
        div.section > div {width:100%;display:inline-flex;}
        div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
        .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
        .attr.active,.attr2.active{ border:1px solid orange;}

        @media (max-width: 426px) {
            .container {margin-top:0px !important;}
            .container > .row{padding:0 !important;}
            .container > .row > .col-xs-12.col-sm-5{
                padding-right:0 ;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > p{
                padding-left:0 !important;
                padding-right:0 !important;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > ul{
                padding-left:10px !important;

            }
            .section{width:104%;}
            .menu-items{padding-left:0;}
        }
    </style>
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Data Barang</h1>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <img src="getImage()" height="350px" width="auto"/>
                    </div>
                    <div class="col-xs-5" style="border:0px solid gray">
                        <!-- Datos del vendedor y titulo del producto -->
                        <h3>Nama Barang</h3>

                        <!-- Precios -->
                        <h6 class="title-price"><small>Harga</small></h6>
                        <h3 style="margin-top:0px;">Rp 1.000.000,00</h3>

                        <!-- Detalles especificos del producto -->
                        <div class="section">
                            <h6 class="title-attr" style="margin-top:15px;" ><small>Warna</small></h6>
                            <div>
                                <h4>Kuning</h4>
                            </div>
                        </div>
                        <div class="section" style="padding-bottom:20px;">
                            <h6 class="title-attr"><small>Jumlah Pesanan</small></h6>
                            <div>
                                <h4>10</h4>
                            </div>
                        </div>

                        <!-- Botones de compra -->
                        <div class="section" style="padding-bottom:20px;">
                            <button class="btn btn-success disabled"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Status Post Barang</button>
                        </div>
                    </div>

                    <div class="col-xs-9">
                        <ul class="menu-items">
                            <li class="active">Detail Produk</li>
                        </ul>
                        <div style="width:100%;border-top:1px solid silver">
                            <p style="padding:15px;">
                                <small>
                                    Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go.

                                    With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                                </small>
                            </p>
                            <small>
                                <ul>
                                    <li>Detail Barang</li>
                                </ul>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
    <script>
        $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })
        })
        function getImage(id) {
            return storage.ref("images/" + file + ".png").getDownloadURL();
        }
    </script>

@endsection
