<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>html5用户注册页面模板</title>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

<link href="{{asset('hotel/register/css/normalize.css')}}" rel="stylesheet"/>
<link href="{{asset('hotel/register/css/jquery-ui.css')}}" rel="stylesheet"/>
<link href="{{asset('hotel/register/css/jquery.idealforms.min.css')}}" rel="stylesheet" media="screen"/>

<style type="text/css">
body{font:normal 15px/1.5 Arial, Helvetica, Free Sans, sans-serif;color: #222;background:url(pattern.png);overflow-y:scroll;padding:60px 0 0 0;}
#my-form{width:755px;margin:0 auto;border:1px solid #ccc;padding:3em;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.2);}
#comments{width:350px;height:100px;}
</style>

</head>
<body>


<div class="row">

  <div class="eightcol last">

    <!-- Begin Form -->

    <form id="my-form" action="qm/home/register/add" enctype="multipart/form-data" method="post">
	<input type="hidden"  name="_token" value="{{csrf_token()}}">
  

          <div><label>用户名:</label><input id="username" name="username" type="text"/></div>
          <div><label>密码:</label><input id="pass" name="password" type="password"/></div>
          <div><label>邮箱:</label><input id="email" name="email" data-ideal="required email" type="email"/></div>
          <div><label>出生日期:</label><input name="date" class="datepicker" data-ideal="date" type="text" placeholder="月/日/年"/></div>
          <div><label>上传头像:</label><input id="file" name="file" multiple type="file"/></div>
         <div><label>性别</label>
            <label><input type="radio" name="radio" checked/>1</label>
            <label><input type="radio" name="radio"/>2</label>
         
          </div>
      

        </div>
   

      <div><hr/></div>

      <div>
        <button type="submit">提交</button>
        <button id="reset" type="button">重置</button>
      </div>

    </for>

    <!-- End Form -->

  </div>

</div>


<script type="text/javascript" src="{{asset('hotel/register/js/jquery-1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hotel/register/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hotel/register/js/jquery.idealforms.js')}}"></script>
<script type="text/javascript">
var options = {

	onFail: function(){
		alert('还有' +$myform.getInvalid().length +' 未填写.' )
	},

	inputs: {
		'password': {
			filters: '请输入密码',
		},
		'username': {
			filters: '请输入用户名',
			data: {
			//ajax: { url:'validate.php' }
			}
		},
		'file': {
			filters: 'extension',
			data: { extension: ['jpg'] }
		},
		'comments': {
			filters: 'min max',
			data: { min: 50, max: 200 }
		},
		'states': {
			filters: 'exclude',
			data: { exclude: ['default'] },
			errors : {
				exclude: '选择国籍.'
			}
		},
		'langs[]': {
			filters: 'min max',
			data: { min: 2, max: 3 },
			errors: {
				min: 'Check at least <strong>2</strong> options.',
				max: 'No more than <strong>3</strong> options allowed.'
			}
		}
	}
	
};

var $myform = $('#my-form').idealforms(options).data('idealforms');

$('#reset').click(function(){
	$myform.reset().fresh().focusFirst()
});

$myform.focusFirst();
</script>
<div style="text-align:center;">

</div>
</body>
</html>