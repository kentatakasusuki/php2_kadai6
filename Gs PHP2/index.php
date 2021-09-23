<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>モデル登録</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title></title>
    <!-- BootstrapのCSS読み込み -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="./js/bootstrap.min.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
</head>
<body>
<main>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
<h2>管理メニュー</h2>
<ul>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample2/">モデル登録</a></li>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample2/modellist">モデル一覧→承認</a></li>
</ul>
		</div>
		
		<div class="col-md-10">
<h2>モデル登録</h2>
<form action="therapist_regist_check.php" method="POST" class="form-horizontal">		
	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">名前</label>
		<div class="col-sm-5">
			<input  type="text" name="cont1" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">HN/modelname</label>
		<div class="col-sm-5">
			<input  type="text" name="cont2" class="form-control" id="InputEmail" >
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">年齢</label>
		<div class="col-sm-1">
			<input  type="number" name="cont3" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">生年月日</label>
		<div class="col-sm-2">
			<input  type="date" name="cont4" class="form-control" id="InputEmail" >
		</div>
		
		<label class="col-sm-1 control-label" for="InputEmail">血液型</label>
		<div class="col-sm-1">
		<select class="form-control" id="InputSelect" name="cont5">
				<option value="A">A型</option>
				<option value="B">B型</option>
				<option value="O">O型</option>
				<option value="AB">AB型</option>
		</select>	
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">職業</label>
		<div class="col-sm-4">
			<input  type="text" name="cont6" class="form-control" id="InputEmail" >
		</div>		
	</div>

	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">身長</label>
		<div class="col-sm-1">
			<input  type="text" name="cont7" class="form-control" id="InputEmail" >
		</div>
	
		<label class="col-sm-1 control-label" for="InputEmail">体重</label>
		<div class="col-sm-1">
			<input  type="text" name="cont9" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">B</label>
		<div class="col-sm-1">
			<input  type="text" name="cont10" class="form-control" id="InputEmail" >
		</div>

		<label class="col-sm-1 control-label" for="InputEmail">W</label>
		<div class="col-sm-1">
			<input  type="text" name="cont11" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">H</label>
		<div class="col-sm-1">
			<input  type="text" name="cont12" class="form-control" id="InputEmail" >
		</div>
	</div>
			
	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">趣味・特技</label>
		<div class="col-sm-5">
			<input  type="text" name="cont13" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">メールアドレス</label>
		<div class="col-sm-5">
			<input  type="email" name="cont19" class="form-control" id="InputEmail" >
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">金融機関名</label>
		<div class="col-sm-2">
			<input  type="text" name="cont15" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">支店名</label>
		<div class="col-sm-2">
			<input  type="text" name="cont16" class="form-control" id="InputEmail" >
		</div>
		
		<label class="col-sm-1 control-label" for="InputEmail">預金種別</label>
		<div class="col-sm-2">
				<select class="form-control" id="InputSelect" name="cont17">
				<option value="普通口座">普通口座</option>
				<option value="当座口座">当座口座</option>
				</select>	
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">口座番号</label>
		<div class="col-sm-2">
			<input  type="text" name="cont18" class="form-control" id="InputEmail" >
		</div>		
	</div>
		<div class="form-group">
	
	<label class="col-sm-1 control-label" for="InputEmail">自己紹介</label>
		<div class="col-sm-11">
<textarea name="cont14" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		</div>
	
	
	
	
	

<input type="submit">
</form>
</div>
		
		</div>
</div>


</main>
<footer>
</footer>

</body>
</html>