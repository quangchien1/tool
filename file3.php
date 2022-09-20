error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$BWhite = "\033[1;93m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$thuong = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$banner = "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n".
  $thuong.$vang."Tool Trao Đổi Sub Token Đa Luồng\n".
  $thuong.$xnhac."Bản Quyền Thưởng Channel\n".
  $thuong.$trang."Mua Tool Liên Hệ Zalo:".$luc." 0335716306\n".
  $thuong.$xduong."Web Bán Xu:".$do." http://thuongchannel.xyz\n".
  $thuong.$hong."Web Tăng Like Follow:".$do." http://thuonglike.tk\n".
 $thuong.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n".
 $luc."╚═══════════════════════════════════════════════════════════╝\n";
 //Key tool
if (!$sock = @fsockopen('www.google.com', 80)) {echo 'Vui lòng bật kết nối mạng';
exit;
  }

@system("clear");
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(2000);}
$dem =0;
//Token Trao Doi Sub
$_SESSION['check'] = file_exists("logtds_token.txt");
if ($_SESSION['check'] =='1'){
  luachon:
echo $thuong.$xnhac."Vào Tool Luôn".$xnhac." Bấm".$yellow." Enter".$xnhac." Thay Token TDS Nhập".$do." ok:$vang ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='ok' and $_SESSION['nhap'] != 'Ok' and $_SESSION['nhap'] !=''){
echo $thuong.$red."Nhập Sai Vui Lòng Nhập Lại\n";
GOTO luachon;
}
if ($_SESSION['nhap'] =='ok' or $_SESSION['nhap'] =='Ok'){
$my = fopen("logtds_token.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Access_Token TDS\e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
$tokenacc =trim(fgets(STDIN));
fwrite($my,$tokenacc);
    $my = file("logtds_token.txt");
$tokenacc = file_get_contents('logtds_token.txt');

}
if ($_SESSION['nhap'] == ''){
$tokenacc = file_get_contents("logtds_token.txt");
}
} else {
$my = fopen("logtds_token.txt","w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Access_Token TDS \e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
$tokenacc = $_SESSION["cc"]=trim(fgets(STDIN));

fwrite($my,$_SESSION["cc"]);
}
//Token Facebook
$khoToken = [];
if (file_exists('Tokenfb_tooltds.txt')){
  echo $thanhngang;
    echo $thuong.$luc."Vào Tool Luôn Bấm ".$trang."Enter".$luc." Thay Token FB Nhập ".$do."ok: $vang";
   $choice=trim(fgets(STDIN));
    if ($choice=='ok'){
        @system('rm Tokenfb_tooltds.txt');
        }
    }
if (!file_exists('Tokenfb_tooltds.txt')){
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Token Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("Tokenfb_tooltds.txt","a+");
fwrite($k, $js);
fclose($k);
echo $thuong.$luc."Bạn đã nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
sleep(2);
    }else{
        $khoToken = json_decode(fread(fopen("Tokenfb_tooltds.txt","r"),filesize("Tokenfb_tooltds.txt")),true);
        $demcki = count($khoToken);
    }
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
//login
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(2000);
}
echo $thuong.$do."Tài Khoản TDS: ".$vang.$user." Xu\n";
echo $thuong.$trang."Số Xu Hiện Tại: ".$hong.$xuhientai."\n";
echo $thuong.$xnhac."Số FB Đang Chạy: ".$trang.$demcki." Nick\n";
echo $thanhngang;
echo $thuong.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Like\n"; 
echo $thuong.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n"; 
echo $thuong.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Nhiệm Vụ Comment\n"; 
echo $thuong.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Nhiệm Vụ Share\n";
echo $thanhngang;
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Chọn Nhiệm Vụ \e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; 
$nhiemvu = trim(fgets(STDIN));
echo $thuong.$luc."Nhập Thời Gian Delay".$trang." Min: $vang"; 
$thoigianmin = trim(fgets(STDIN)); 
echo $thuong.$luc."Nhập Thời Gian Delay".$trang." Max: $vang"; 
$thoigianmax = trim(fgets(STDIN));
echo $thuong.$luc."Bật Chống Block Sau Bao Nhiêu Nhiệm Vụ: $vang";
$xxxxx = trim(fgets(STDIN));
echo $thuong.$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Block Bao Lâu: $vang"; 
$delaybl = trim(fgets(STDIN));
echo $thuong.$luc."Đổi Nick Sau Bao Nhiêu Nhiệm Vụ: $vang"; 
$doinick = trim(fgets(STDIN)); 
echo $thuong.$luc."Làm Bao Nhiêu Nhiệm Vụ Thì Dừng Tool: $vang"; 
$dungtool = trim(fgets(STDIN));  
while(true){
  if(count($khoToken) == 0){
    
for($a = 1; $a < 999999;$a++){
echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Token Facebook Thứ $a \e[0m\e[1;95m]
└──╼ \e[1;39m: $vang"; 
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("Tokenfb_tooltds.txt","a+");
fwrite($k, $js);
fclose($k);
echo $xanh."\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
$themtk = 0;
  for($xz=0;$xz<count($khoToken);$xz++){
 if ( $themtk == 1){ break; }
    $cookie = $khoToken[$xz];
$access_token = $cookie;
if (strpos($access_token, 'EAA') !== 0) {
    echo "\r";
    echo "                                                      \r";
    echo $thuong.$do."Token Facebook Bị Die!!!\n";
    array_splice($khoToken,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
    echo $thanhngang;
    echo $xnhac." Thưởng Tool".$trang." </> ".$luc." Đang Cấu Hình ID".$trang." </> ".$vang.$tenfb."".$res."\n";
    echo $thanhngang;
} else {
  echo $thanhngang;
    echo $do."Cấu Hình Thất Bại Bạn Chưa Thêm ".$vang.$tenfb." \033[1;91mVào Cấu Hình\n";
    continue;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = api($urllike);
            if($listlike == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listlike==''){
            $listlike = api($urllike);
          }}
            if (count($listlike) !== 0) {
                break;
            }
        }
if (count($listlike) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ like       \r"; 
                        }
                    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if($listsub == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listsub==''){
            $listsub = api($urlsub);
          }}
            if (count($listsub) !== 0) {
                break;
            }
        }
if (count($listsub) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ sub       \r"; 
                        }
                    }
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = api($urlcmt);
            if($listcmt == ''){
          echo $trang."❯ ".$do."Mạng không ổn định                          \r";
          while($listcmt==''){
            $listcmt = api($urlcmt);
          }}
            if (count($listcmt) !== 0) {
                break;
            }}
if (count($listcmt) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ cmt       \r"; 
                        }
                    }
    //listshare
        if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 10; $i++) {
            $listshare = api($urlshare);
            if($listshare == ''){
          echo $trang."  • ".$do."Mạng không ổn định                          \r";
          while($listshare==''){
            $listshare = api($urlshare);
          }}
            if (count($listshare) > 0) {
                break;
            }}
if (count($listshare) == 0) {
                            $rd = rand(1, 7);
                            echo $thuong.$rd.$red." Đang tạm thời hết nhiệm vụ share       \r"; 
                        }
                    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print $thuong.$luc."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
              $cainit = like($access_token,'129137116038118', $cookie);
              if ($cainit -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
print $res.$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1;
                    array_splice($khoToken,$xz,1);
                    break;
                }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Số Xu Hiện Tại Là: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, ' FOLLOW ', $idsub, $xujob, $xu,);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Số Xu Hiện Tại Là: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
           
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
                if ($g -> {'error'} -> {'code'} == 190) {
                        echo "Token die !!?!\n";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 368) {
print print $thuong.$green."Đợi 5s Xem Có Block Ảo Không Rồi Chạy Tiếp \r";
sleep(5);
$cainit = cmt($access_token,'129137116038118', $cookie,'ngon');
if ($cainit -> {'error'} -> {'code'} == 368) {
print "\r";
       print "                                                      \r";
print $res.$g-> {'error'}-> {'message'};
                    
print "\n";
array_splice($khocookie,$xz,1);
$spam = 1;
break;
}}
                    if ($g -> {'error'} -> {'code'} == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Số Xu Hiện Tại Là: ".$vang.$xu." Xu\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
              
            }}
                    ///share
                    if ($listshare !== NULL) {
                      $id = $listshare[$lap]["id"];
                    $g = share($access_token, $id);
                    if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."   >^_^<  ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "\033[1;91m".$g-> {'error'}-> {'message'};
                        echo "\n";
                        array_splice($khocookie,$xz,1);
                        $spam = 1; break;
                    }
                        $nhanshare = nhantien('SHARE', $id, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
                      $dungtool = 999999;
                      echo $do."[".$luc."●".$do."]".$red." ●".$ngan." Chạy Tool Hoàn Thành Số Xu Hiện Tại Là: ".$vang.$xu."\n";
                      exit;
                    }
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
    }
}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers?method=post&access_token=');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
	$t = date('H:i');
  $rd = rand(1, 7);
  $rd2 = rand(5, 7);
  echo "\r";
      echo "                                              \r";
    $a = "\033[1;91m[\033[1;93m".$dem."\033[1;91m]\033[1;91m ● \033[1;96m$t\033[1;31m ●\033[1;3".$rd."m$type\033[1;31m● \033[1;36mThưởng Tool \033[1;31m● \033[1;32m$xujob \033[1;31m● \033[1;93m".$xu." \033[1;91mXu\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
	$rd = rand(1, 7);
    $time = $delay; 
    for ( $x = $time; $x> 0; $x-- ) {
      echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;31m giây \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;32m giây \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;36m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
        }}
function delay2($delaybl){
  for($time = $delaybl;$time> 0;$time--){
echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;34m giây \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;31m giây \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;32m giây \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;36m giây \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mĐang Nghỉ Chống Block Vui Lòng Đợi ".$vang.$time."\e[1;34m giây \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
        }}
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
