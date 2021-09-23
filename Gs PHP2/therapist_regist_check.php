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
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample2/modellist.php">モデル一覧→承認</a></li>
</ul>
		</div>
		
		<div class="col-md-10">
		
		
<?
	define('PVL_DIR_COMN_PATH','./system/'); //comnフォルダまでのpath(必ず設定して下さい)
	require_once(PVL_DIR_COMN_PATH.'config/app_conf.php');
	
$key =  substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);	
$size = $_POST['size_1'].'('.$_POST['size_4'].')/'.$_POST['size_2'].'/'.$_POST['size_3'];
	

try {

    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */
$_ = function($s){return $s;};//展開用
    // データベースに接続
    $pdo = new PDO("mysql:host={$_(PVL_DB_HOSTNAME)};dbname={$_(PVL_DB_DBNAME)};charset=utf8",PVL_DB_USER,PVL_DB_PASSWD,
[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
])
;

$stmt = $pdo -> prepare("INSERT INTO takasusukisample (name,modelname,age,birthday,bloodtype,career,height,weight,bust,west,hip,hobby,intro,bankcompany,bankbranch,banktype,banknumber,email)
 VALUES (:name,:modelname,:age,:birthday,:bloodtype,:career,:height,:weight,:bust,:west,:hip,:hobby,:intro,:bankcompany,:bankbranch,:banktype,:banknumber,:email)");
$stmt->bindParam(':name', $_POST['cont1'], PDO::PARAM_STR);
$stmt->bindParam(':modelname', $_POST['cont2'],  PDO::PARAM_STR);
$stmt->bindParam(':age', $_POST['cont3'],  PDO::PARAM_STR);
$stmt->bindParam(':birthday', $_POST['cont4'],  PDO::PARAM_STR);
$stmt->bindParam(':bloodtype', $_POST['cont5'], PDO::PARAM_STR);
$stmt->bindParam(':career', $_POST['cont6'],  PDO::PARAM_STR);
$stmt->bindParam(':height',$_POST['cont7'], PDO::PARAM_STR);
$stmt->bindParam(':weight',$_POST['cont9'],  PDO::PARAM_STR);
$stmt->bindParam(':bust', $_POST['cont10'], PDO::PARAM_STR);
$stmt->bindParam(':west',$_POST['cont11'], PDO::PARAM_STR);
$stmt->bindParam(':hip',$_POST['cont12'], PDO::PARAM_STR);
$stmt->bindParam(':hobby',$_POST['cont13'], PDO::PARAM_STR);
$stmt->bindParam(':intro',$_POST['cont14'], PDO::PARAM_STR);
$stmt->bindParam(':bankcompany',$_POST['cont15'], PDO::PARAM_STR);
$stmt->bindParam(':bankbranch',$_POST['cont16'], PDO::PARAM_STR);
$stmt->bindParam(':banktype',$_POST['cont17'], PDO::PARAM_STR);
$stmt->bindParam(':banknumber',$_POST['cont18'], PDO::PARAM_STR);
$stmt->bindParam(':email',$_POST['cont19'], PDO::PARAM_STR);

$stmt->execute();


$to = "tknamishi@gmail.com";
$subject = "モデルの登録";
$message = <<<EOM
モデルの登録が行われました。
速やかに承認宜しくお願いします。

名前：{$_POST['cont1']}　様

承認URL:
https://hystericend.sakura.ne.jp/takasusukisample2/modellist.php

EOM;

$headers = "From: fapeal@fapeal.com";
mb_send_mail($to, $subject, $message, $headers); 

$to = $_POST['cont19'];
$subject = "モデルの登録ありがとうございました。【fapeal】";
$message = <<<EOM
名前：{$_POST['cont1']}　様

モデルのご登録ありがとうございました。
3営業日以内に、審査を行い正式なモデル登録が完了いたします。
3営業日を超えても、審査結果が送信されない場合は、当社にご連絡ください。

EOM;

$headers = "From: fapeal@fapeal.com";
mb_send_mail($to, $subject, $message, $headers); 


    /* データベースから値を取ってきたり， データを挿入したりする処理 */

} catch (PDOException $e) {

    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);

}	

?>		
			
		
		
		<h2>モデル登録【完了】</h2>
		<p>登録完了しました。</p>
		<p>左メニューから移動してください。</p>
</div>
		
		</div>
</div>


 </main>
<footer>
</footer>
  
</body>
</html>