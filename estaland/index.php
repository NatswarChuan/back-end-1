<?php
include_once './config/config.php';
spl_autoload_register(function ($className) {
    include_once './models/' . $className . '.php';
});

$productModel = new ProductModel();
$products = $productModel->getProductIndex();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <base href="./">
    <link id="favicon" rel="shortcut icon" href="upload/hinhanh/logobe-4092_39.60396039604x40.png" type="image/x-icon" />

    <title>Công ty Bất động sản Estaland - Cung cấp giải pháp cho nhu cầu của gia đình bạn.</title>
    <meta name="description" content="Công ty Bất Động Sản Estaland thành lập 2016, với đội ngũ nhân sự chuyên nghiệp và giàu kinh nghiệm. Estaland hứa hẹn đồng hành cùng khách hàng từ lúc tìm kiếm cho đến khi giao dịch hoàn thành. Mỗi khách hàng đến với công ty sẽ luôn hài lòng về dịch vụ mà chúng tôi mang lại">
    <meta name="keywords" content="Công ty Bất động sản Estaland, công ty estaland, Bất động sản Estaland">


    <meta name="robots" content="noodp,index,follow" />
    <meta name="google" content="notranslate" />
    <meta name='revisit-after' content='1 days' />
    <meta name="ICBM" content="10.813690, 106.729369">
    <meta name="geo.position" content="10.813690, 106.729369">
    <meta name="geo.placename" content="69/10 Đường D2, Phường 25, Quận Bình Thạnh.">
    <meta name="author" content=" Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-178929257-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 743293820 -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-743293820');
    </script>

    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="plugin/font-awesome-4.3.0/css/font-awesome.min.css">
    <link href="js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <script src="js/owl.carousel.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_responsive.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,greek-ext,cyrillic-ext,vietnamese,greek' rel='stylesheet' type='text/css'>


    <link href="css/fotorama.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/jqueryslidemenu.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <link rel="stylesheet" href="css/jRating.jquery.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/icon.css" />
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.simplyscroll.css" />
</head>

<body>

    <div class="main_wrapper">
        <header>
            <section id="header">
                <style>
                    /* .header{     box-sizing: border-box;
        padding: 35px 0 10px 0;
    background: url(images/sp/brhd.png);
    background-size: 100% 100%;} */
                </style>
                <style type="text/css" media="screen">
                    .header {
                        background: no-repeat;
                        padding-top: 5px;
                        background-size: cover;
                    }

                    .bg_dichvu {
                        background: url(upload/hinhanh/brdv-1028.png) no-repeat;
                        background-size: cover;
                    }

                    nav#menu {
                        background: no-repeat;
                        background-size: 100% 100%;
                    }

                    .bg_quangcao {
                        background: url(upload/hinhanh/trumsihuyhoang0916-4246.png) no-repeat;
                        background-size: cover;
                        background-position: center center;
                        min-height: 160px
                    }
                </style>

                <!--Header-->
                <?php
                include './header.php';
                ?>
            </section>

            <div class="clear"></div>
            <div class="bg_slider">
                <div class="box_slidershow">
                    <div id="bx-slidertop">
                        <div style="position: relative;">
                            <a href="" target="_blank">
                                <img src="thumb/1349x525/1/upload/hinhanh/498733752939379.jpg" alt="slidershow" title="" />
                            </a>
                            <div class="ab_slider">
                                <div class="bg-sl">
                                    <div class="name_slider">Sứ mệnh hoạt động </div>
                                    <div class="mota_slider">Kinh doanh bằng cả tâm huyết và sự uy tín.
                                        Mong muốn mang đến nhiều sản phẩm hoàn hảo nhất cho khách hàng. </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <a href="" target="_blank">
                                <img src="thumb/1349x525/1/upload/hinhanh/5641593109590790.jpg" alt="slidershow" title="" />
                            </a>
                            <div class="ab_slider">
                                <div class="bg-sl">
                                    <div class="name_slider">Giải pháp Bất Động Sản Toàn diện </div>
                                    <div class="mota_slider">Chúng tôi đưa thông tin sản phẩm chính xác đến khách hàng.
                                        Đưa ra giải pháp tối ưu nhất cho việc sỡ hữu nhà ở của Quý khách. </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <a href="" target="_blank">
                                <img src="thumb/1349x525/1/upload/hinhanh/3266626551491460.jpg" alt="slidershow" title="" />
                            </a>
                            <div class="ab_slider">
                                <div class="bg-sl">
                                    <div class="name_slider">Nhân sự chuyên nghiệp </div>
                                    <div class="mota_slider">Chúng tôi tạo nên môi trường làm việc năng động. Thường
                                        xuyên nâng cao kiến thức và kĩ năng mới cho đội ngũ nhân sự nồng cốt. Nhân sự sẽ
                                        luôn ngày một hoàn thiện và trưởng thành trong một môi trường năng động </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        var slider = $('#bx-slidertop').bxSlider({
                            mode: 'fade',
                            controls: true,
                            minSlides: 1,
                            maxSlides: 1,
                            responsive: true,
                            pager: true,
                            auto: true,
                            onSliderLoad: function(currentIndex) {
                                $('#bx-slidertop').children().eq(currentIndex).addClass('active-slide');
                            },
                            onSlideAfter: function($slideElement) {
                                $('#bx-slidertop').children().removeClass('active-slide');
                                $slideElement.addClass('active-slide');
                            }
                        });

                    });
                </script>
                <div class="box_search">
                    <script type="text/javascript">
                        function doEnter(evt) {
                            var key;
                            if (evt.keyCode == 13 || evt.which == 13) {
                                onSearch(evt);
                            }
                        }

                        function onSearch(evt) {
                            var keyword = document.getElementById("keyword").value;
                            if (keyword == '' || keyword == 'Nhập từ khoá...')
                                alert('Bạn chưa nhập từ khóa tìm kiếm!');
                            else {
                                location.href = "tim-kiem.htm&keywords=" + keyword;
                                loadPage(document.location);
                            }
                        }
                    </script>
                    <div class="wrapper clear-fix">
                        <div class="bg-search">
                            <div class="title-srch">
                                <span>Tìm kiếm nhu cầu phù hợp</span>
                                <span>( Hãy nhanh tay nhập ngay nhà đất mà bạn muốn tìm, chúng tôi sẽ tìm kiếm nhanh cho
                                    bạn !!! )</span>
                            </div>
                            <div class="search">
                                <div class="fix_srch">
                                    <form action="tim-kiem.html" method="POST" name="frm_srch">
                                        <input type="text" class="form-control txtsrch" name="keyword" id="keyword" value="" placeholder="Bạn muốn tìm gì? ..." required="required" />
                                        <input type="submit" class="btn btn-secondary btnsrch" value="Tìm kiếm">
                                        <div class="clear"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.txtsrch').focusin(function(event) {
                                $('.loc_srch').css({
                                    'display': 'block'
                                });
                            });
                            $('.xoa_tab').click(function() {
                                $('.loc_srch').css({
                                    'display': 'none'
                                });
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="clear"></div>
        </header>
        <div class="main_content">

            <div class='box_content'>
                <h1 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h1>
                <h2 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h2>
                <h3 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h3>
                <h4 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h4>
                <h5 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h5>
                <h6 class="visit_hidden"> Công Ty TNHH Đầu Tư Và Phát Triển BĐS Estaland</h6>


                <style>
                </style>
                <style type="text/css" media="screen">
                    #stnam {
                        background: url(upload/hinhanh/imgduan-6229.png);
                        background-size: 100% 100%;
                        box-sizing: border-box;
                        padding: 25px 0;
                    }

                    #stnu {
                        background: url(upload/hinhanh/tiemvangladasdamgiat1204-6047.jpg);
                        background-size: 100% 100%;
                        box-sizing: border-box;
                        padding: 25px 0;
                    }

                    #congtrinh_bg {
                        background-size: 100% 100%;
                        box-sizing: border-box;
                        padding: 25px 0;
                    }

                    #dichvu_bg {
                        background: url(upload/hinhanh/xaydungphucthadadanh1t102-6583.jpg);
                        background-size: 100% 100%;
                        box-sizing: border-box;
                        padding: 25px 0;
                    }
                </style>



                <section class="box_id">
                    <div class="wrapper clear-fix">
                        <div class="tieude_gt">
                            <h3>Căn hộ <span>Bán</span></h3>
                        </div>
                        <div class="mg-15">
                            <div id="idspid2">
                                <?php
                                foreach ($products as $product) {
                                ?>
                                    <div class="col-3 pd-15">
                                        <div class="product-item">
                                            <div class="border-item">
                                                <div class="hover-item">
                                                <!--nha dat ban-->    
                                                <a href="" title="<?php echo $product['post_title'] ?>">
                                                <img src="./images/<?php echo $product['post_image']?>" alt="<?php echo $product['post_title'] ?>"/></a>
                                                </div>
                                            </div>
                                            <div class="nd_sptc bg_w">
                                                <div class="ten_sptc">
                                                    <a href=""><?php echo $product['post_title'] ?></a>
                                                </div>
                                                <div class="item-address">
                                                <?php echo $product['product_address'] ?> </div>
                                                <div class="custom_ts">
                                                    <div class="chiso">
                                                        <span class="chiso-1">
                                                            <span><img src="images/sp/ts1.png" alt=""> <?php echo $product['product_area'] ?>m2</span>
                                                            <span><img src="images/sp/ts2.png" alt=""> <?php echo $product['product_bedroom'] ?> Phòng ngủ</span>
                                                            <span><img src="images/sp/ts3.png" alt=""> <?php echo $product['product_bathroom'] ?> Phòng tắm</span>
                                                        </span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="clear"></div>

                                                </div>
                                                <div class="custom-price-home">
                                                    <p class="price-home"> Giá: <span><?php echo $product['product_price'] ?> tỷ</span></p>
                                                    <p class="date-home"> <span><?php echo $product['post_date'] ?></span></p>
                                                    <div class="clear"> </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                </section>



                <script>
                    $(function() {
                        $("div.holderid1").jPages({
                            containerID: "idspid1",
                            perPage: 6
                        });
                    });
                </script>

                <script>
                    $(function() {
                        $("div.holderid2").jPages({
                            containerID: "idspid2",
                            perPage: 6
                        });
                    });
                </script>
            </div>

            <!--Footer-->
            <?php
            include './footer.php';
            ?>
<script src="js/jqueryslidemenu.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="js/fancybox-master/dist/jquery.fancybox.min.js"></script> -->
<link type="text/css" rel="stylesheet" href="./css/jquery.mbxslider.css">
<script type="text/javascript" src="./js/jquery.bxslider.js"></script>

<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>




<script type="text/javascript" src='js/jPages.js'></script>
<link rel="stylesheet" type="text/css" href="css/jPages.css">

<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery(".fancybox").fancybox();
        jQuery(".various3").fancybox({
            'width': '70%',
            'height': '60%',
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'type': 'iframe'
        });
        $('.content iframe').each(function(index, el) {
            $(this).wrap("<div class='video-container'></div>");

        });
        $('.content table').each(function(index, el) {
            $(this).wrap("<div class='table-responsive'></div>");

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $("#scroller1").simplyScroll({
            orientation: 'vertical',
            customClass: 'vert',
            auto: true
        });

        $('body').append('<div id="top" ></div>');
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $('#top').fadeIn();
            } else {
                $('#top').fadeOut();
            }
        });
        $('#top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });
    });
</script>

<link rel="stylesheet" type="text/css" href="css/jquery.simplyscroll.css">
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<script type="text/javascript">
    (function($) {
        $(function() {
            $(".scroller6").simplyScroll({
                orientation: 'vertical',
                customClass: 'vert'
            });
        });
    })(jQuery);
</script>


<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('nav#menu').mmenu();
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178929257-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-178929257-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 743293820 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-743293820"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-743293820');
</script>



<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("#pre-loader").fadeOut(1000);
        }, 400);
    });
</script>

<!-- ff -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-576de24ed9275c77"></script>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=976604885739311";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function(event) {
            $getheight = $('#header').height();
            if ($(window).scrollTop() > $getheight) {
                $('.menu_rp').addClass('fix_header');
            } else {
                $('.menu_rp').removeClass('fix_header');
            }
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function(event) {
            $getheight = $('.header').height();
            if ($(window).scrollTop() > $getheight) {
                $('.bg_menu').addClass('fix_header');
            } else {
                $('.bg_menu').removeClass('fix_header');
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', '.add_to_basket2', function() {
            var pid = $(this).attr('rel');
            $.ajax({
                type: "POST",
                url: "ajax/add_giohang.php",
                data: "pid=" + pid,
                dataType: 'json',
                success: function(data) {
                    window.location = "gio-hang.html";
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', 'a.add-to-cart', function() {
            var pid = $(this).attr('rel');
            $.ajax({
                type: "POST",
                url: "ajax/add_giohang.php",
                data: "pid=" + pid,
                dataType: 'json',
                success: function(data) {
                    $('.loading').css({
                        'display': 'block'
                    });
                    setTimeout(function() {
                        $('.loading').css({
                            'display': 'none'
                        });
                    }, 1000);
                    $('.count-cart').html(data.count);
                    $('.price_cart').html(data.tongtien);
                    setTimeout(function() {
                        $('#myModal').modal('show');
                    }, 1200);
                }
            });
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('html,body').on('click', '.showcart', function() {
            $.ajax({
                url: "ajax/showcart.php",
                type: "POST",
                success: function(data) {
                    $('.addfromcart').html(data);
                },
            });
        });

    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#owl-video").owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            loop: true,
            singleItem: true,
            autoplay: true,
            items: 4,
            dots: false,
            nav: false,
            navText: ["<img src='images/sp/icon_prev.png'>", "<img src='images/sp/icon_next.png'>"],
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('.click_video').click(function() {
            id = $(this).attr('data-id');
            $.ajax({
                url: 'ajax/video1.php',
                data: 'id=' + id,
                type: 'get',
                async: true,
                success: function(res) {
                    $('#video11').html(res)

                }
            });
            return false;
        });
    });
</script>


<script type="text/javascript">
    $('.click_submit').click(function() {
        $('.success_submit').trigger('click');
    });
</script>

<script type="text/javascript">
    $('html,body').on('click', '.submit_comment a', function() {
        var checked_us = $(this).attr('user_comment');
        if (checked_us == '') {
            $('#mycomment').modal('show');
        }
    });

    $('.btn_cm').click(function() {
        var gettext = $(this).parents('#myModal').next().find('.txt_comment').val();
        var frm = document.forms['form_user'];
        var ten = frm['txtten'].value;
        var dienthoai = frm['txtdienthoai'].value;
        var email = frm['txtemail'].value;
        if (ten == '') {
            alert('Vui lòng nhập tên!');
            return false;
        } else if (dienthoai == '') {
            alert('Vui lòng nhập điện thoại!');
            return false;
        } else if (email == '') {
            alert('Vui lòng nhập Email!');
            return false;
        } else {
            $.ajax({
                url: 'ajax/user_comment.php',
                type: 'POST',
                data: {
                    ten: ten,
                    dienthoai: dienthoai,
                    email: email,
                    act: "dangky"
                },
                success: function(data) {
                    if (data == 0) {
                        alert('Tên này đã tồn tại!');
                        return false;
                    } else if (data == 1) {
                        alert('Đăng ký thành công!');
                        return true;
                    } else if (data == 2) {
                        alert('Lỗi đăng ký!');
                        return false;
                    }

                }

            });
        }
    });

    $(document).ready(function() {
        $('.submit_comment a').click(function() {
            var gettext = $(this).parents('.load_form').find('.txt_comment').val();
            var id_baiviet = $(this).attr('id_baiviet');
            var curr_page = $(this).attr('curr_page');
            var ip_add = $(this).attr('ip_add');

            var el = $(this);
            $.ajax({
                url: 'ajax/user_comment.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    text: gettext,
                    id_baiviet: id_baiviet,
                    act: "post_comment",
                    curr_page: curr_page,
                    ip_add: ip_add
                },
                success: function(data) {
                    if (data != '') {
                        $('#show_comment').append("<div class='item_comment'><div class='bd_text'><span class='name_cm'>" + data.tenuser + ":</span><div class='text_cm'>" + data.text_cm + "</div></div><div class='traloi_cm'><span class='time_cm'>" + data.time + "</span><!-- <span><a href='javascript:void(0)' >Trả lời</a></span> --></div></div><div class='clear'></div>");
                    } else {
                        alert('load lỗi !');
                    }
                }

            });
        });

        $('.delete_show').click(function() {
            if ($('.show_box_cart').hasClass('hide_box')) {
                $('.show_box_cart').removeClass('hide_box');
            } else {
                $('.show_box_cart').addClass('hide_box');
            }
        });

    });
</script>





<script type="text/javascript">
    $(document).ready(function() {
        $('.sltloaihinh').change(function() {
            if ($(this).val() == 84) {
                $('.hide-frm').css({
                    'display': 'none'
                });
            } else {
                $('.hide-frm').css({
                    'display': 'block'
                });
            }
        });
    })
</script>

<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.textillate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.text_name').textillate({
            in: {
                effect: 'bounceIn'
            },
            out: {
                effect: 'bounceOut'
            },
            loop: true
        });
    });
</script>
<script type="text/javascript">
    function opentab2(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("showhere2");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink2");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" activetab", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " activetab";
    }
</script>

<script type="text/javascript" src="js/jRating.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.basic').jRating();
        step: true;
        length: 5;
        type: 'small';
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $(".owl-sp").owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            loop: false,
            singleItem: true,
            autoplay: false,
            dots: false,
            nav: true,
            navText: ["<img src='images/sp/icon_prev.png'>", "<img src='images/sp/icon_next.png'>"],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>

</html>