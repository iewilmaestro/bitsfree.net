<?php
/*
*
*Creator	: iewil
*Github		: https://github.com/iewilmaestro
*Youtube	: https://www.youtube.com/c/iewil
*Telegram	: @iewil57
*Support	: Team-Function-INDO
*
*/
error_reporting(0);
$zone = json_decode(file_get_contents("http://ip-api.com/json"),1)["timezone"];if($zone){date_default_timezone_set($zone);}
$a = ["iewil","bitsfree","1.0"];
$reg = "https://bitsfree.net/?r=46154";
$server = "https://pastebin.com/raw/5mri6gAM";
$disable = col("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".col("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".col("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".col("Family-Team-Function-INDO","b")."\n";
function Run($url, $httpheader = 0, $post = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body)[1];}}
function Short(){global $a,$server,$disable;$d=date("D");if(file_exists($_SERVER["TMPDIR"]."/".$a[1])){$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}else{file_put_contents($_SERVER["TMPDIR"]."/".$a[1],$d);$day=trim(file_get_contents($_SERVER["TMPDIR"]."/".$a[1]));}if($d==$day){}else{unlink($a[1]."/key.txt");unlink($_SERVER["TMPDIR"]."/".$a[1]);}$script = file_get_contents($server);$status = explode('|',explode('#'.$a[1].':',$script)[1])[0];if($status == "on"){RETRY:$rand = rand(0,14);$short = json_decode(file_get_contents('https://pastebin.com/raw/EiKBhp8U'),1);$link = file_get_contents($short[$rand]['url']);$pass = trim(explode(' ',explode('Password: ',$link)[1])[0]);$read = file_get_contents($a[1]."/key.txt");if(file_exists($a[1]."/key.txt")){}else{bn();echo col(" Link Password : ","h").col($short[$rand]['short'],'k')."\n";$p = readline(col(" Password : ","h"));if($pass == $p){file_put_contents($a[1]."/key.txt",$p);}else{echo col(" Password salah!","m")."\n";line();goto RETRY;}}}elseif($status == "off" or $status == null){bn();echo col("The script is disabled","m")."\n\n";echo Slow($disable);exit;}}Short();bn();	
function Save($namadata){if(file_exists($namadata)){$datauser=file_get_contents($namadata);}else{$datauser=readline("Input ".$namadata." > ");echo "\n";file_put_contents($namadata,$datauser);}return $datauser;}
function Col($str,$color){if($color=="rand"){$color=['h','k','b','u','m'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>"\033[107m\033[1;31m",'rt'=>"\033[106m\033[1;31m",'ht'=>"\033[0;30m",'p'=>"\033[1;37m",'a'=>"\033[1;30m",'m'=>"\033[1;31m",'h'=>"\033[1;32m",'k'=>"\033[1;33m",'b'=>"\033[1;34m",'u'=>"\033[1;35m",'c'=>"\033[1;36m",'rr'=>"\033[101m\033[1;37m",'rg'=>"\033[102m\033[1;34m",'ry'=>"\033[103m\033[1;30m",'rp1'=>"\033[104m\033[1;37m",'rp2'=>"\033[105m\033[1;37m");return $war[$color].$str."\033[0m";}
function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){echo $slowmo; usleep(70000);}}
function Line(){$len = 36;$var = '─';echo str_repeat($var,$len)."\n";}
function Bn(){global $a,$reg;system('clear');$m="\033[1;31m";$p="\033[1;37m";$k="\033[1;33m";$h="\033[1;32m";$u="\033[1;35m";$b="\033[1;34m";$c="\033[1;36m";$mp="\033[101m\033[1;37m";$cl="\033[0m";$mm="\033[101m\033[1;31m";$hp="\033[1;7m";$z=trim(strtoupper($a[1]));$x=18;$y=strlen($z);$line=str_repeat('_',$x-$y);echo "\n{$m}[{$p}Script{$m}]->{$k}[".$h.$z."{$k}]-[".$h.$a[2].$k."]".$p.$line.".\n{$u}.__              .__.__ 	    {$p}| \n{$u}|__| ______  _  _|__|  |	\n|  |/ __ \ \/ \/ /  |  |\n|  \  ___/\     /|  |  |__\n|__|\___  >\/\_/ |__|____/\n        \/\n{$mm}[{$mp}▶{$mm}]{$cl} {$k}https://www.youtube.com/c/iewil\n{$c}{$hp} >_{$cl}{$b} Team-Function-INDO\n{$p}────────────────────────────────────\nLink Reg : ".$reg."\n\n";}
function Vision($img){$content=base64_encode(file_get_contents($img));$head=["content-type: application/json"];$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);$result=Run("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data);$respon=strpos($result,'Enter the following:\n');if($respon){$respon=substr($result,$respon);$respon=str_replace('Enter the following:\n','',$respon);$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));}if(strlen($respon) > 25){}else{return $respon;}}
function Ocr($img,$img2){$apikey=Aocr();$respon=Vision($img);if($respon==null){system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;$respon = preg_replace("/[^a-zA-Z]/","", $hasil);}return $respon;}
function Aocr(){$a = "0123456789abcdef";$b = substr(str_shuffle($a), 0, 10);$c = $b."88957";return $c;}
function Head2(){$ua=Save('User_Agent');$h=["Host: api-secure.solvemedia.com","user-agent: ".$ua];return $h;}
function Gsolv($url,$ref){$arr=["accept: */*","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=Run($url,array_merge(Head2(),$arr));$ca=explode('"',$r)[5];return $ca;}
function Gmed($ca,$ref){$url="https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";$arr=["accept: image/webp,image/apng,image/*,*/*;q=0.8","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];$r=Run($url,array_merge(Head2(),$arr));return $r;}
function Build($a){return http_build_query($a);}
function RecaptchaV2($siteurl,$sitekey,$apikey){$ua=["Host: api.anycaptcha.com","Content-Type: application/json"];$data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"RecaptchaV2TaskProxyless","websiteURL"=>$siteurl,"websiteKey"=>$sitekey,"isInvisible"=>false)));$Create=json_decode(Run('https://api.anycaptcha.com/createTask',$ua,$data));if($Create->errorId == '1'){return 0;}else{$Task=$Create->taskId;while(true){echo col("processing...","m");$base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));$Result=json_decode(Run('https://api.anycaptcha.com/getTaskResult',$ua,$base));if($Result->status=='processing'){echo "\r             \r";echo col("processing......","m");sleep(5);echo "\r                \r";continue;}echo "\r             \r";return $Result->solution->gRecaptchaResponse;}}}
function Hcaptcha($siteurl,$sitekey,$apikey){$ua=["Host: api.anycaptcha.com","Content-Type: application/json"];$host="https://api.anycaptcha.com";$data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"HCaptchaTaskProxyless","websiteURL"=>$siteurl,"websiteKey"=>$sitekey)));$Create=json_decode(Run($host.'/createTask',$ua,$data));if($Create->errorId == '1'){return 0;}else{$Task=$Create->taskId;while(true){echo col("processing...","m");$base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));$Result=json_decode(Run($host.'/getTaskResult',$ua,$base));if($Result->status=='processing'){echo "\r             \r";echo col("processing......","m");sleep(5);echo "\r                \r";continue;}echo "\r             \r";return $Result->solution->gRecaptchaResponse;}}}
function head(){
	$user=Save("User_Agent");
	$cookie=Save("Cookie");
	$ua=["user-agent: ".$user,"cookie: ".$cookie];
	return $ua;
}
function host(){
	return "https://bitsfree.net";
}
function gptc(){
	$url = host()."/ptc";
	return Run($url,head());
}
function gview($id){
	$url = host()."/ptc/view/".$id;
	return Run($url,head());
}
function pview($id,$csrf,$token,$cap){
	$url = host()."/ptc/verify/".$id;
	$data = ["captcha"=>"recaptchav2","g-recaptcha-response"=>$cap,"csrf_token_name"=>$csrf,"token"=>$token];
	return Run($url,head(),build($data));
}
function gfaucet(){
	$url = host()."/faucet";
	return Run($url,head());
}
function pfaucet($csrf,$token,$cap){
	$url = host()."/faucet/verify";
	$data = ["csrf_token_name"=>$csrf,"token"=>$token,"captcha"=>"recaptchav2","g-recaptcha-response"=>$cap];
	return Run($url,head(),build($data));
}
function gfirewall(){
	$url = host()."/firewall";
	return Run($url,head());
}
function pfirewall($data){
	$url = host()."/firewall/verify";
	return Run($url,head(),build($data));
}
function gbonus(){
	$url = host()."/bonus";
	return Run($url,head());
}
function pbonus($csrf,$token,$cap){
	$url = host()."/bonus/verify";
	$data = "csrf_token_name=".$csrf."&token=".$token."&captcha=recaptchav2&g-recaptcha-response=".$cap;
	return Run($url,head(),$data);
}
function gauto(){
	$url = host()."/auto";
	return Run($url,head());
}
function pauto($token){
	$url = host()."/auto/verify";
	$data = "token=".$token;
	return Run($url,head(),$data);
}
function gwell(){
	$url = host()."/wheel";
	return Run($url,head());
}
function pwell($csrf,$token,$cap){
	$url = host()."/wheel/verify";
	$data = "csrf_token_name=".$csrf."&token=".$token."&captcha=recaptchav2&g-recaptcha-response=".$cap;
	return json_decode(Run($url,head(),$data),1);
}
function gwithdraw(){
	$url = host()."/withdraw";
	return Run($url,head());
}
function pwithdraw($csrf,$metod,$amm,$em){
	$url = host()."/withdraw/withdraw";
	$data=http_build_query(["csrf_token_name"=>$csrf,"method"=>$metod,"amount"=>$amm,"wallet"=>$em]);
	return Run($url,head(),$data);
}
function energy(){
	$r1=gwell();
	$en = trim(explode('</div>',explode('<p class="mb-0">Your Energy</p>',$r1)[1])[0]);
	return $en;
}
function gaciv(){
	$url = host()."/achievements";
	return Run($url,head());
}
function paciv($csrf,$id){
	$url = host()."/achievements/claim/".$id;
	$data = "csrf_token_name=".$csrf;
	return Run($url,head(),$data);
}
cookie:
Save('Cookie');Save('User_Agent');
$em=Save('Withdraw_Wallet');
$apikey=Save('Api_Anycaptcha');
bn();
$sitekey = "6Ld06asZAAAAAPKfIQIFkOct7aLdb2cDeEI1gFJ5";

$r1 = dash();
echo col("Username   ~> ","h").col($r1["user"],"k")."\n";
echo col("Balance    ~> ","h").col($r1["balance"],"k")."\n";
echo col("Energy     ~> ","h").col(energy(),"k")."\n";
echo col("Wallet     ~> ","h").col($em,"k")."\n";
line();

menu:
echo col("1 >","m")." Daily Bonus\n";
echo col("2 >","m")." Faucet\n";
echo col("3 >","m")." Visit Ptc\n";
echo col("4 >","m")." Auto Faucet\n";
echo col("5 >","m")." Whell of fortune\n";
echo col("6 >","m")." achievements\n";
echo col("7 >","m")." Withdraw\n";
echo col("8 >","m")." Update Cookie\n";
$pil=readline(col("Input Number ","h").col("> ","m"));
line();
if($pil==1){goto daily;
}elseif($pil==2){goto faucet;
}elseif($pil==3){goto ptc;
}elseif($pil==4){goto auto;
}elseif($pil==5){goto well;
}elseif($pil==6){goto aciv;
}elseif($pil==7){goto withdraw;
}elseif($pil==8){unlink("Cookie");goto cookie;
}else{echo col("Bad Number\n","m")."\n";line();goto menu;}

daily:
$r1=gbonus();
if(preg_match('/Please come back tomorrow/',$r1)){
	echo col('Please come back tomorrow',"m")."\n";line();goto menu;
}
$csrf = explode('"',explode('_token_name" id="token" value="',$r1)[1])[0];
$token = explode('"',explode('<input type="hidden" name="token" value="',$r1)[1])[0];
$cap = RecaptchaV2(host()."/bonus",$sitekey,$apikey);
$r2=pbonus($csrf,$token,$cap);
$ss = explode("has",explode("Swal.fire('Good job!', '",$r2)[1])[0];
if($ss){
	echo col("Success    ~> ","h").col($ss,"k")."\n";
	echo col("Balance    ~> ","h").col(dash()["balance"],"k")."\n";
	line();goto menu;
}else{
	echo col("Invalid Captcha","m")."\n";
	line();
}

ptc:
$nom = 1;
while(true){
	$r2 = gptc();
	$id = explode("'",explode("/view/",$r2)[$nom])[0];
	$reward = explode('</span>',explode('<i class="fas fa-gift"></i>: ',$r2)[$nom])[0];
	$tot = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r2)[1])[0];
	if($id){
		$r3 = gview($id);
		if($r3){
			$ads = explode('"',explode('<iframe id="ads" src="',$r3)[1])[0];
			echo col("Visit ","b").col($ads,"k")."\n";
			
			$csrf = explode('">',explode('_token_name" value="',$r3)[1])[0];
			$token = explode('">',explode('name="token" value="',$r3)[1])[0];
			$tmr = explode(';',explode('var timer = ',$r3)[1])[0];
			if($tmr){tmr($tmr);}
			$cap = RecaptchaV2(host()."/ptc/verify/".$id,$sitekey,$apikey);
			
			$r4 = pview($id,$csrf,$token,$cap);
			$r5 = gptc();
			$asu = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r5)[1])[0];
			if($tot==$asu){
				echo col("Invalid Captcha","m")."\n";
				line();
				$nom = $nom+1;
			}else{
				echo col("Success    ~> ","h").col($reward,"k")."\n";
				echo col("Balance    ~> ","h").col(dash()["balance"],"k")."\n";
				line();
			}
		}else{
			echo col("Link Error\n","m");line();
			$nom = $nom+1;
		}
	}else{
		echo col("Ptc habis\n","m");line();
		goto menu;
	}
}
faucet:
while(true){
	$r1 = gfaucet();
	if(preg_match('/Firewall/',$r1)){
		echo col("Firewall detect, pls Open web!","m");
		$r2 = gfirewall();
		$url = explode('"',explode('challenge.noscript?k=',$r2)[1])[0];
		$tipe = explode('"',explode('<input type="hidden" name="captchaType" value="',$r2)[1])[0];//recaptchav2
		$csrf = explode('"',explode('name="csrf_token_name" value="',$r2)[1])[0];
		echo "\r                              \r";
		if($tipe=="solvemedia"){
			$ref = host()."/firewall";
			$ca = Gsolv("https://api-secure.solvemedia.com/papi/_challenge.js?k=j2OzNTnKafklcpmyoVVoTwq9HT9s2jmh;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/64,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome80,os/android,os/android9,fwv/BY3SoQ.sdah34,htmlplus;am=KWKyeRoME4As729PGgwTgA;ca=script;ts=1643689668;ct=1643690323;th=white;r=0.49505334341653584",$ref);
			file_put_contents("img.png",Gmed($ca,$ref));
			$respon = Ocr("img.png","im.png");
			$data = ["adcopy_response"=>$respon,"adcopy_challenge"=>$ca,"captchaType"=>"solvemedia","csrf_token_name"=>$csrf];
		}elseif($tipe=="recaptchav2"){
			$cap = RecaptchaV2(host()."/firewall/verify",'6Ld06asZAAAAAPKfIQIFkOct7aLdb2cDeEI1gFJ5',$apikey);
			$data = ["g-recaptcha-response"=>$cap,"captchaType"=>"recaptchav2","csrf_token_name"=>$csrf];
		}elseif($tipe=="hcaptcha"){
			$cap = Hcaptcha(host()."/firewall/verify","4dc72c58-72a1-40b9-b244-83b5187a64aa",$apikey);
			$data = ["g-recaptcha-response"=>$cap,"h-captcha-response"=>$cap,"captchaType"=>"hcaptcha","csrf_token_name"=>$csrf];
		}
		$r3=pfirewall($data);
		if(dash()["balance"] == ""){}else{
			echo col("Firewall   ~> ","m").col($tipe,"p").col(" Success","h");
			echo "\n";
		}
		goto faucet;
	}
	$left = explode('/',explode('<p class="lh-1 mb-1 font-weight-bold">',$r1)[3])[0];
	if($left>=1){
		$csrf = explode('">',explode('_token_name" id="token" value="',$r1)[1])[0];
		$token = explode('">',explode('name="token" value="',$r1)[1])[0];
		$tmr = explode(';',explode('var wait = ',$r1)[1])[0];
		if($tmr){tmr($tmr);goto faucet;}
		$cap = RecaptchaV2(host()."/faucet/verify",$sitekey,$apikey);
		
		$r2 = pfaucet($csrf,$token,$cap);
		$ss = explode("has",explode("Swal.fire('Good job!', '",$r2)[1])[0];
		if($ss){
			echo col("Success    ~> ","h").col($ss,"k")."\n";
			echo col("Balance    ~> ","h").col(dash()["balance"],"k")."\n";
			echo col("Claim Left ~> ","h").col(($left-1),"k")."\n";
			line();
		}else{
			echo col("Invalid Captcha","m")."\n";
			line();
		}
	}else{
		echo col("Faucet habis\n","m");line();
		goto menu;
	}
}
auto:
while(true){
	$r1=gauto();
	if(preg_match("/You don't have enough energy/",$r1)){
		echo col("You don't have enough energy","m")."\n";line();goto menu;
	}
	$tmr=explode(',',explode('let timer = ',$r1)[1])[0];
	$token=explode('"',explode('name="token" value="',$r1)[1])[0];
	if($tmr){tmr($tmr);}
	$r2=pauto($token);
	$ss = trim(explode("</div>",explode("Autofaucet completed you will receive",$r2)[1])[0]);
	if($ss){
		echo col("Success    ~> ","h").col($ss,"k")."\n";
		echo col("Balance    ~> ","h").col(dash()["balance"],"k")."\n";
		echo col("Energy     ~> ","h").col(energy(),"k")."\n";
		line();
	}else{
		echo col("Invalid Token","m")."\n";
		line();
	}
}
well:
while(true){
	$r1=gwell();
	if(preg_match("/You don't have enough energy/",$r1)){
		echo col("You don't have enough energy","m")."\n";line();goto menu;
	}
	$csrf=explode('"',explode('_token_name" id="token" value="',$r1)[1])[0];
	$token=explode('"',explode('name="token" value="',$r1)[1])[0];
	$cap=RecaptchaV2(host()."/wheel/verify",$sitekey,$apikey);
	$r2=pwell($csrf,$token,$cap);
	$status=$r2["status"];
	$reward=$r2["reward"];
	if($status=="success"){
		echo col("Success    ~> ","h").col($reward,"k")."\n";
		echo col("Balance    ~> ","h").col(dash()["balance"],"k")."\n";
		echo col("Energy     ~> ","h").col(energy(),"k")."\n";
		line();
	}
	sleep(5);
}
aciv:
$r1=gaciv();
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];
$misi=explode('<tr>',$r1);
for($x=2;$x<count($misi);$x++){
	$y=$x-1;$var=24;$len=" ";
	$ms=explode('</td>',explode('<td>',$misi[$x])[1])[0];
	$mg=strlen($ms);$varmg=$var-$mg;$spc=str_repeat($len,$varmg);
	$ex=explode('</div>',explode('aria-valuemax="100">',$misi[$x])[1])[0];
	echo col($y." > ","m").col($ms,"h").$spc."~> ".col($ex,"k")."\n";
}
echo col('Back > ','m').col('Main Menu','h')."\n";
$chuck=readline(col('Input ','h').'> ');
line();
$check=strtoupper($chuck);
if($check=="BACK"){goto menu;}
$tot=count($misi)-2;
if($check == 0 or $check > $tot){
	echo col("serah lu ","m")."\n";line();goto aciv;
}
$cuk=$check+1;
$tea=$misi[$cuk];
$ms=explode('</td>',explode('<td>',$tea)[1])[0];
$id=explode('"',explode('achievements/claim/',$tea)[1])[0];
$r2=paciv($csrf,$id);
$ss=explode('have',explode("'Good job!', '",$r2)[1])[0];
if($ss){
	$ss=str_replace("and","\n              ",$ss);
	echo col("Success    ","h")."~> ".$ss."\n";
}else{
	echo col("An Error","m")."\n";
}
line();
goto aciv;

withdraw:
$r1=gwithdraw();
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];
$rad=explode('<div class="card-radio">',$r1);
for($ri=1;$ri<count($rad);$ri++){
	$cur=explode('</span>',explode('<span>',$rad[$ri])[1])[0];
	echo col($ri." > ","m").col($cur,"k")."\n";
}
$me=readline(col('Input Number ','h').col('> ','m'));
line();
$metod=explode("']",explode("currencies['",$rad[$me])[1])[0];
$amm=explode('"',explode('id="usdBalance" value="',$r1)[1])[0];

$r2=pwithdraw($csrf,$metod,$amm,$em);
$ss = explode("'",explode("Swal.fire('Good job!', '",$r2)[1])[0];
$wr=strip_tags(explode("'",explode("Swal.fire('Error!', '",$r2)[1])[0]);
if($ss){
	echo col($ss,"h")."\n";
}else{
	echo col($wr,"m")."\n";
}
goto menu;
function dash(){
	$url = host()."/dashboard";
	$r = Run($url,head());
	$user = explode("<",explode("siteUserFullName: '",$r)[1])[0];
	$bal = explode('</h4>',explode('<h4 class="mb-0">',$r)[1])[0];
	return ["user"=>$user,"balance"=>$bal];
}
function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo col(date('i:s',$res),"rand");sleep(1);}}
