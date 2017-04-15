<!DOCTYPE html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>QM 管理系统</title>

<!-- Bootstrap Core CSS -->
<link href="{{asset("admin/index/css/bootstrap.min.css")}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset("admin/index/css/sb-admin.css")}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset("admin/index/css/plugins/morris.css")}}" rel="stylesheet">
	
<!-- Custom Fonts -->
<link href="{{asset("font-awesome-4.1.0/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")}}"></script>
    <![endif]-->
      <!-- jQuery Version 1.11.0 -->
    <script src="{{asset("admin/index/js/jquery-1.11.0.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("admin/index/js/bootstrap.min.js")}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset("admin/index/js/plugins/morris/raphael.min.js")}}"></script>
    <script src="{{asset("admin/index/js/plugins/morris/morris.min.js")}}"></script>
    <script src="{{asset("admin/index/js/plugins/morris/morris-data.js")}}"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ Session::get('nickname')}}</a>
            </div> 
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                	<li>
                        <a href="{{asset('/qm/woker/index')}}"><i class="fa fa-fw fa-bar-chart-o"></i>酒店内部人员管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/user/index')}}"><i class="fa fa-fw fa-bar-chart-o"></i>酒店会员管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/category/index')}}"><i class="fa fa-fw fa-edit"></i>房间类型管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/home/index')}}"><i class="fa fa-fw fa-desktop"></i>房间管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/foodcategory/index')}}"><i class="fa fa-fw fa-edit"></i>餐饮类型管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/food/index')}}"><i class="fa fa-fw fa-wrench"></i>餐饮管理</a>
                    </li>
                     <li>
                        <a href="{{asset('/qm/server/index')}}"><i class="fa fa-fw fa-wrench"></i>服务管理</a>
                    </li>
                     <li>
                        <a href="{{asset('/qm/order/index')}}"><i class="fa fa-fw fa-wrench"></i>订单管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/close/index')}}"><i class="fa fa-fw fa-wrench"></i>退房管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/clean/index')}}"><i class="fa fa-fw fa-wrench"></i>保洁管理</a>
                    </li>
                    <li>
                        <a href="{{asset('/qm/configure/index')}}"><i class="fa fa-fw fa-wrench"></i>网址配置管理</a>
                    </li>                                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
   @section('content')     
        
   @show
        
   

</body>

</html>
        