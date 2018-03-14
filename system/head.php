<?php

/*
* Name: FS
* Author: github.com/ptudweb-lab/project
* Version: VERSION.txt
*/
defined('_IN_FS') or die('Error: restricted access');
?>

    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-fixed.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script language="javascript" src="js/jquery.min.js"></script>
        <script language="javascript" src="js/popper.min.js"></script>
        <script language="javascript" src="js/bootstrap.min.js"></script>
        <script language="javascript" src="js/myScript.js"></script>
        <meta name="description" content="<?= $set['meta_description'] ?>">
        <meta name="keywords" content="<?= $set['meta_keywords'] ?>">
        <meta name="author" content="FS">
        <title>
            <?= $set['sitename'] ?>
        </title>
    </head>

    <body>
        <!-- Header -->
        <!-- Navigation bar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0" id="navbar">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <a href="/" class="navbar-brand">
                    <img src="img/logo.png" alt="FS" class="logo" height="30rem">
                </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 font-weight-bold">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-primary text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-th-list"></i> Danh mục sản phẩm</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item btn-primary" href="#">Danh mục 1</a>
                            <a class="dropdown-item btn-primary" href="#">Danh mục 2</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white btn-primary" href="#">
                            <i class="fas fa-newspaper"></i> Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-primary text-white" href="#">
                            <i class="fas fa-gift"></i> Khuyến mãi</a>
                    </li>
                </ul>

                <!--Search form-->
                <form class="form-inline">
                    <input class="form-control" size="35" type="text" placeholder="Bạn muốn tìm gì?">
                    <button title="Tìm kiếm" class="btn btn-success" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button type="button" formaction="#" class="btn btn-warning ml-3 mr-1">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-light">0</span>
                    </button>

                    <button type="button" class="btn btn-info text-right" data-toggle="modal" data-target="#loginForm">
                        <i class="fas fa-sign-in-alt"></i> Đăng nhập</button>
                </form>


            </div>
        </nav>
        <!-- nav mobile -->
        <nav class="navbar navbar-expand-mobile navbar-dark bg-primary p-0" id="navbar">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto m-0 font-weight-bold">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-secondary" href="#" id="dropdownIdMobile" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-th-list"></i>
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="dropdownIdMobile">
                            <a class="dropdown-item btn-primary" href="#">
                                <i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                            <a class="dropdown-item btn-primary" href="#">
                                <i class="fas fa-shopping-cart"></i> Giỏ hàng
                                <span class="badge badge-light">0</span>
                            </a>
                            <a class="dropdown-item btn-primary" href="#">
                                <i class="fas fa-newspaper"></i> Tin tức</a>
                            <a class="dropdown-item btn-primary" href="#">
                                <i class="fas fa-gift"></i> Khuyến mãi</a>
                        </div>
                    </li>
                </ul>

                <!--Search form-->
                <form class="form-inline p-0">
                    <input class="form-control-mobile-search" size="20" type="text" placeholder="Bạn muốn tìm gì?">
                    <button title="Tìm kiếm" class="btn btn-secondary pr-1 pl-1" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>


            </div>
        </nav>
        <!-- The Modal Login Form -->
        <div class="modal fade" id="loginForm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Đăng nhập vào tài khoản cá nhân</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="dangnhap.html" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="Nhập vào email của bạn" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mật khẩu:</label>
                                <input type="password" class="form-control" placeholder="Nhập vào mật khẩu tài khoản" id="pwd">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="text-secondary">Ghi nhớ cho lần đăng nhập sau</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            <button type="button" class="btn btn-info" formaction="dangky.html">Đăng ký</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">