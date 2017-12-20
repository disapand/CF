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
            margin-left: 333px;
            margin-right: 210px;
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
                   <li><a href="#" class="middle">物业管理</a></li>
                   <li><a href="#">招商运营</a></li>
                   <li><a href="#">研学活动</a></li>
                   <li><a href="#">文旅交流</a></li>
                   <li><a href="#">定制服务</a></li>
                   <li><a href="#">综合服务</a></li>
               </ul>
           </div>
       </nav>
        <div class="col-md-12 navbar-bg">
            <p>test</p>
        </div>
    </div>

</body>
</html>