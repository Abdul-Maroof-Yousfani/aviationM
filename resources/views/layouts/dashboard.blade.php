<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>{{ config('app.name', 'International Aviation') }}</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    
    <link href="https://aviation.erpsolutionz.com/aviation/app-assets/vendors/css/vendors.min.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://aviation.erpsolutionz.com/aviation/app-assets/css/colors.css">
    <link href="https://aviation.erpsolutionz.com/aviation/assets/custom/css/loader.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME STYLE  -->
    <!--<link href="https://aviation.erpsolutionz.com/aviation/assets/css/font-awesome.css" rel="stylesheet" />-->
    <!-- CUSTOM STYLE  -->
    <link href="https://aviation.erpsolutionz.com/aviation/public/assets/css/aviationstyle.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/style.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/style2.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/main.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/main2.css" rel="stylesheet" />

    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/theme.css" rel="stylesheet">
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/color-one.css" id="changeStyle" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/fa.css" rel='stylesheet' type='text/css' />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/arrows.css" rel='stylesheet' type='text/css' />
<script src="https://aviation.erpsolutionz.com/aviation/assets/js/jquery.min.js"></script>
    <script src="https://aviation.erpsolutionz.com/aviation/assets/js/jquery-1.10.2.js"></script>

    <script src="https://aviation.erpsolutionz.com/aviation/assets/js/custom.js"></script>

    
    <script src="https://aviation.erpsolutionz.com/aviation/assets/js/bootstrap.js"></script>
    <link href="https://aviation.erpsolutionz.com/aviation/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://aviation.erpsolutionz.com/aviation/assets/MegaMenu/demo.css" rel="stylesheet">
    <link href="https://aviation.erpsolutionz.com/aviation/assets/MegaMenu/webslidemenu.css" rel="stylesheet">
    <link href="https://aviation.erpsolutionz.com/aviation/assets/custom/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/charts/apexcharts.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/assets/charts/chart-apex.css" rel="stylesheet" />
    <link href="https://aviation.erpsolutionz.com/aviation/app-assets/css/components.css" rel="stylesheet" />

    <script src="https://aviation.erpsolutionz.com/aviation/assets/MegaMenu/webslidemenu.js"></script>
    <script src="https://aviation.erpsolutionz.com/aviation/assets/custom/js/customFunctions.js"></script>
    <script src="https://aviation.erpsolutionz.com/aviation/assets/custom/js/customMainFunction.js"></script>
    <script src="https://aviation.erpsolutionz.com/aviation/assets/custom/js/jquery.cookie.min.js"></script>
    

    <script src="https://aviation.erpsolutionz.com/aviation/assets/custom/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <style type="text/css" media="print">
        @media  print {
            @page  {
                margin-top: 0;
            }
            body {
                padding-top: 72px;
            }
        }
    </style>
    <style type="text/css">


        /*Abdul Qadir*/
        #rotate, #rotate2 {
            width: 100px;
            height: 100px;
            background: red;
            border-top: 10px solid black;
            transition: transform .2s ease;
            margin: 20px auto;
            color: #fff;
        }

        .rotated {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }



        /*  bhoechie tab */
        div.bhoechie-tab-container{
            z-index: 10;
            background-color: #ffffff;
            padding: 0 !important;
            border-radius: 4px;
            -moz-border-radius: 4px;
            background-clip: padding-box;
            opacity: 0.97;
            filter: alpha(opacity=97);
        }
        div.bhoechie-tab-menu{
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group{
            margin-bottom: 0;
        }
        div.bhoechie-tab-menu div.list-group>a{
            margin-bottom: 7px;
        }

        div.bhoechie-tab-menu div.list-group>a .glyphicon,
        div.bhoechie-tab-menu div.list-group>a .fa {
            color: #31b0d5;
        }
        div.bhoechie-tab-menu div.list-group>a:first-child{
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a:last-child{
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a.active,
        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group>a.active .fa,
        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus{
            background-color: #31b0d5;
            background-image: #31b0d5;
            color: #ffffff;
            padding: 4px;
        }
        div.bhoechie-tab-menu div.list-group>a.active:after,{
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            margin-top: -13px;
            border-left: 0;
            border-bottom: 13px solid transparent;
            border-top: 13px solid transparent;
            border-left: 10px solid #31b0d5;
        }
        div.bhoechie-tab-content{
            background-color: #ffffff;
            /* border: 1px solid #eeeeee; */
            padding-left: 20px;
            padding-top: 10px;
        }
        div.bhoechie-tab div.bhoechie-tab-content:not(.active){
            display: none;
        }
        .list-group-item-collaps {
            margin-bottom: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            color: #9170E4;
            font-size: 15px;
            border-bottom: 5px double #f3961c;
            padding: 5px;
        }

        .rflabelsteric{
            font-size:17px !important;
            color:red !important;
        }
        a.list-group-item {
            color: #555;
            padding: 5px;
        }
        .triangle-isosceles.right:after {
            top: 12px;
        }
        .modalWidth{
            width: 80%
        }

        #content {
            display: table;
        }

        #pageFooter {
            display: table-footer-group;
        }

        #pageFooter:after {
            counter-increment: page;
            content: counter(page);
        }

        tr:hover {
            background-color: yellow;
        }


    </style>

</head>

<body>
    <style>
    img.logo_m{width:216px;}
    </style>

@include('includes.navbard')
@yield('content')


</body>
