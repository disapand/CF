<!doctype html>
<html lang="{{ app() -> getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield("title")</title>
    <style>
        .navbar-header{
            margin-left: 15%;
            margin-right: 10%;
        }

        .ejdh{
            margin-left: 33%;
        }
        .ejdh ul{
            height: 60px;
        }
        .ejdh ul a{
            padding-top: 15px;
            padding-bottom: 0;
            height: 100%;
        }

        .ejdh ul .active {
            color:#e9f4f4;
            border-bottom: #e9f4f4 solid 1px;
        }

        a:hover {
            background-color: transparent !important;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
       <nav class="navbar navbar-default" role="navigation">
           <div class="navbar-header">
               <img src="images/logo.png" alt="泾河城服">
           </div>
           <div>
               <ul class="nav navbar-nav">
                   <li>
                       <a href="#" class="active">走进城服</a>
                   </li>
                   <li><a href="#">物业管理</a></li>
                   <li><a href="#">招商运营</a></li>
                   <li><a href="#">研学活动</a></li>
                   <li><a href="#">文旅交流</a></li>
                   <li><a href="#">定制服务</a></li>
                   <li><a href="#">综合服务</a></li>
               </ul>
           </div>
       </nav>
        <div class="col-md-12 navbar-bg">
            <div class="row">
                <div class="col-md-6 ejdh">
                    <ul class="nav navbar-nav" style="height: 50px;">
                        <li><a href="#" class="active">企业简介</a></li>
                        <li><a href="#">发展愿景</a></li>
                        <li><a href="#">组织架构</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>