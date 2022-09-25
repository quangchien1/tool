error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ip = file_get_contents('http://kiemtraip.com/raw.php');
/***[ Color ]***/
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$vang = "\033[1;93m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do= "\033[1;91m"; 
$luc = "\033[1;92m";
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
$_SESSION["C_LIKE"]   = " LIKE ";
$_SESSION["C_LIKE2"]  = "LIKE 2";
$_SESSION["C_CMT"]    = " CMT ";
$_SESSION["C_FOLLOW"] = "FOLLOW";
$_SESSION["C_SHARE"]  = "SHARE ";
$_SESSION["C_PAGE"]   = " PAGE ";
$_SESSION["C_CXCMT"]  = "CX CMT";
$_SESSION["C_LOVE"]   = " LOVE ";
$_SESSION["C_CARE"]   = " CARE ";
$_SESSION["C_HAHA"]   = " HAHA ";
$_SESSION["C_WOW"]    = " WOW  ";
$_SESSION["C_SAD"]    = " SAD  ";
$_SESSION["C_ANGRY"]  = "ANGRY ";
$_SESSION["C_GROUP"]  = "GROUP ";

$_SESSION['useragent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36';


$thanh_xau = $do."[".$luc."●".$do."]".$trang." => ";
$thanh_dep = $do."[".$luc."●".$do."]".$trang." => ";
$thanhngang = "\033[1;32m ────────────────────────────────────────────────────────────\n";
$thanhngang1 = "\033[1;32m ────────────────────────────────────────────────────────────\n";
$daucau = $do."[".$luc."●".$do."]".$trang." => ";
$daucauc = $do."[".$luc."●".$do."]".$trang." => ";
 $weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$banner = "\033[1;32m╔═══════════════════════════════════════════════════════════╗\n".
  $thanh_xau.$luc."Tool Trao Đổi Sub Cookie Đa Luồng " .$hong."2.0\n".
   $luc."$logo\n\n".
 $thanh_xau.$luc."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n".
 $thanh_xau.$luc."IP Tool Của Bạn: \033[1;97m$ip\n".
 $luc."╚═══════════════════════════════════════════════════════════╝\n";

$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";
@system('clear');
$daucau2= $do."[".$luc."●".$do."]".$trang." => ";
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(500);}
$listnv = [];
if (file_exists("TDS.txt")) { unlink("TDS.txt"); }
while (true){
if (file_exists("TDS_1.1.txt")){
$data = fread(fopen("TDS_1.1.txt", "r"), filesize("TDS_1.1.txt"));
if ($data == "") { unlink("TDS_1.1.txt"); continue; }
$_SESSION["username"] = explode("|",$data)[0];
$_SESSION['password'] = explode("|",$data)[1];
$login = login();
if ($login == false) { unlink("TDS_1.1.txt"); continue; }
echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION["username"]."\n";
echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Tài Khoản TDS Mới \n";
echo $thanh_dep.$luc."Nhập ".$trang."===>: $vang";
$chon_tk = trim(fgets(STDIN));
    if ($chon_tk == "2") {
        unlink("TDS_1.1.txt");
         
	} else if ($chon_tk == "1") {
    } else {
		echo $do." Lựa chọn không xác định !!!\n"; 
		  continue;
    }
}
if (!file_exists("TDS_1.1.txt")){
echo $thanh_dep."\033[1;32mNhập Tài Khoản TDS: \033[1;33m"; $tk = trim(fgets(STDIN));
echo $thanh_dep."\033[1;32mNhập Mật Khẩu TDS: \033[1;33m"; $mk = trim(fgets(STDIN));
$file = fopen("TDS_1.1.txt", "w+");
fwrite($file, $tk."|".$mk);
fclose($file);
}
$data = fread(fopen("TDS_1.1.txt", "r"), filesize("TDS_1.1.txt"));
$_SESSION["username"] = explode("|",$data)[0];
$_SESSION['password'] = explode("|",$data)[1];
$login = login();

if ($login == true) {
echo $thanh_dep.$xnhac."Đăng Nhập Thành Công.\n";
break;
} else {
echo $do." Đăng Nhập Thất Bại.\n";
unlink("TDS_1.1.txt");
unlink($_SESSION["username"].".txt");
}
}


echo $thanhngang1;
//print "$daucau2 \033[1;32mNhập Cookie Facebook : \033[1;35m";


$khoToken = [];

echo $daucau2.$luc."Lưu Ý: ".$hong."Nếu Muốn Dừng Lại Thì Nhấn Enter \n";
for ($a = 1; $a < 999999; $a++) {
    
 echo $daucau2.$luc."Nhập Cookie Thứ $a: $vang";
   $nhapck = (string)trim(fgets(STDIN));
    if ($nhapck == '') {
        break;
    }
    array_push($khoToken, $nhapck);
}
$js = json_encode($khoToken);
$demcki = count($khoToken);
@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1000);}

if (!file_exists('Setting_TDS_Cookie.txt')) {
    $settings = json_encode(['delaygr' => '23', 'delaylike' => '15', 'delayfollow' => '20', 'delaycmt' => '15', 'delaypage' => '20', 'delayshare' => '35', 'delaycx' => '10', 'delaycxcmt' => '10', 'nhiemvu' => '120', 'block' => '200']);
    file_put_contents('Setting_TDS_Cookie.txt', $settings);
}
if (file_exists('Setting_TDS_Cookie.txt')) {
    $json = json_decode(file_get_contents('Setting_TDS_Cookie.txt'), true);
    $a = "$daucau2\033[1;92mDelay LikePost Hiện Tại Là \033[1;93m" . $json["delaylike"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Follow Hiện Tại Là \033[1;93m" . $json["delayfollow"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Comment Hiện Tại Là \033[1;93m" . $json["delaycmt"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Page Hiện Tại Là \033[1;93m" . $json["delaypage"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay SharePost Hiện Tại Là \033[1;93m" . $json["delayshare"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Cảm Xúc Hiện Tại Là \033[1;93m" . $json["delaycx"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Cảm Xúc Cmt Hiện Tại Là \033[1;93m" . $json["delaycxcmt"] . "\033[1;92m Giây
$daucau2\033[1;92mDelay Group Hiện Tại Là \033[1;93m" . $json["delaygr"] . "\033[1;92m Giây
\033[1;32m────────────────────────────────────────────────────────────
$daucau2\033[1;92mKích Hoạt Chống Block Sau \033[1;93m" . $json["nhiemvu"] . "\033[1;92m Nhiệm Vụ
$daucau2\033[1;92mDelay Chống Block Hiện Tại Là \033[1;93m" . $json["block"] . "\033[1;92m Giây
\033[1;32m────────────────────────────────────────────────────────────
$daucau2\033[1;92mNhập \033[1;91m[\033[1;93m1\033[1;91m] \033[1;92mTiếp Tục Sử Dụng Settings_Delay Này!
$daucau2\033[1;92mNhập \033[1;91m[\033[1;93m2\033[1;91m] \033[1;92mSử Dụng Delay Được Đề Xuất Bởi Tool!
$daucau2\033[1;92mNhập \033[1;91m[\033[1;93m3\033[1;91m] \033[1;92mXoá Delay Này Và Tạo Delay Do Bạn Đặt Ra!
\033[1;32m────────────────────────────────────────────────────────────
$daucau2\033[1;92mNhập số: \033[1;33m";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        print $a[$x];
        usleep(800);
    }
    $_CHOOSE['settingdelay'] = trim(fgets(STDIN));
    echo $thanhngang1;
    if ($_CHOOSE['settingdelay'] == 1) {
        print "$daucau2\033[1;92mĐã Tiếp Tục Sử Dụng Settings_Delay Này!!\n";
        $_SESSION['delaylike'] = $json["delaylike"];
        $_SESSION['delayfollow'] = $json["delayfollow"];
        $_SESSION['delaycmt'] = $json["delaycmt"];
        $_SESSION['delayshare'] = $json["delayshare"];
        $_SESSION['delaypage'] = $json["delaypage"];
        $_SESSION['delaycx'] = $json["delaycx"];
        $_SESSION['delaycxcmt'] = $json["delaycmt"];
        $_SESSION['delaygr'] = $json["delaygr"];
        $_SESSION['nhiemvu'] = $json["nhiemvu"];
        $_SESSION['block'] = $json["block"];
        sleep(2);
        
    }
    if ($_CHOOSE['settingdelay'] == 2) {
        $_SESSION['delaylike'] = $delaylike = rand(5, 10);
        $_SESSION['delayfollow'] = $delaysub = rand(25, 40);
        $_SESSION['delaycmt'] = $delaycmt = rand(15, 25);
        $_SESSION['delaypage'] = $delaypage = rand(25, 40);
        $_SESSION['delayshare'] = $delayshare = rand(20, 35);
        $_SESSION['delaycx'] = $delaycx = rand(5, 10);
        $_SESSION['delaycxcmt'] = $delaycxcmt = rand(5, 10);
        $_SESSION['delaygr'] = $delaygr = rand(15, 30);
        $_SESSION['nhiemvu'] = $nhiemvu = rand(100, 200);
        $_SESSION['block'] = $block = rand(150, 200);
        print "$daucau2\033[1;92mDelay LikePost Được Đề Xuất  : \033[1;93m" . $delaylike . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Follow Được Đề Xuất : \033[1;93m" . $delaysub . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Comment Được Đề Xuất : \033[1;93m" . $delaycmt . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Page Được Đề Xuất : \033[1;93m" . $delaypage . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay SharePost Được Đề Xuất : \033[1;93m" . $delayshare . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay cảm Xúc Được Đề Xuất  : \033[1;93m" . $delaycx . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Cảm Xúc Cmt Được Đề Xuất  : \033[1;93m" . $delaycxcmt . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Group Được Đề Xuất  : \033[1;93m" . $delaygr . "\033[1;92m Giây\n";
        usleep(100000);
        print "$daucau2\033[1;92mChống Block Sau : \033[1;93m" . $nhiemvu . "\033[1;92m Nhiệm Vụ\n";
        usleep(100000);
        print "$daucau2\033[1;92mDelay Chống Block : \033[1;93m" . $block . "\033[1;92m Giây\n";
        usleep(100000);
        sleep(2);
        //end choose 2
    }
    if ($_CHOOSE['settingdelay'] == 3) {
        if (file_exists('Setting_TDS_Cookie.txt')) {
            system('rm Setting_TDS_Cookie.txt');
        }
        print "$daucau2\033[1;92mDelay Like : \033[1;33m";
        $_SESSION['delaylike'] = trim(fgets(STDIN));
        print "$daucau2\033[1;92mDelay Sub : \033[1;33m";
        $_SESSION['delayfollow'] = trim(fgets(STDIN));
        print "$daucau2\033[1;92mDelay Comment : \033[1;33m";
        $_SESSION['delaycmt'] = trim(fgets(STDIN));
        print "$daucau2\033[1;32mDelay Fanpage : \033[1;33m";
        $_SESSION['delaypage'] = trim(fgets(STDIN));
        print "$daucau2\033[1;32mDelay Cảm Xúc : \033[1;33m";
        $_SESSION['delaycx'] = trim(fgets(STDIN));
        print "$daucau2\033[1;92mDelay Share : \033[1;33m";
        $_SESSION['delayshare'] = trim(fgets(STDIN));
        print "$daucau2\033[1;32mDelay Reaction Comment : \033[1;33m";
        $_SESSION['delaycxcmt'] = trim(fgets(STDIN));
        print "$daucau2\033[1;32mDelay Group : \033[1;33m";
        $_SESSION['delaygr'] = trim(fgets(STDIN));       
        echo $thanh_dep.$luc."Sau Bao Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
        $_SESSION['nhiemvu'] = trim(fgets(STDIN));
        
        echo $thanh_dep.$luc."Sau ".$vang . $_SESSION['nhiemvu'] . $luc." Nhiệm Vụ Nghỉ Ngơi: $vang";
       $_SESSION['block'] = trim(fgets(STDIN));
    }
    
    print "$daucau2\033[1;92mĐã Lưu Setting_Delay Này!!\n";
    echo $thanhngang1;
    $setting_delay = json_encode([
        'delaylike' => $_SESSION['delaylike'],
        'delayfollow' => $_SESSION['delayfollow'],
        'delaycmt' => $_SESSION['delaycmt'],
        'delaypage' => $_SESSION['delaypage'],
        'delayshare' => $_SESSION['delayshare'],
        'delaycx' => $_SESSION['delaycx'],
        'delaycxcmt' => $_SESSION['delaycxcmt'],
        'delaygr' => $_SESSION['delaygr'],
        'nhiemvu' => $_SESSION['nhiemvu'],
        'block' => $_SESSION['block'],
    ]);
    file_put_contents('Setting_TDS_Cookie.txt', $setting_delay);
    sleep(2.5);
    //end choose 3
}
$url = "https://traodoisub.com/scr/user.php";
$head = array(
    "Host: traodoisub.com",
    "accept: application/json, text/javascript, */*; q=0.01",
    "x-requested-with: XMLHttpRequest",
    "save-data: on",
    "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://traodoisub.com/home/"
);
$ch   = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POST => 1,
    CURLOPT_HTTPGET => true,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_COOKIEFILE => "TDS.txt",
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_ENCODING => TRUE
));
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$user = $_SESSION["username"];
$nhiemvu = $_SESSION['nhiemvu'];

@system('clear');
$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(1000);}

print "$daucau2\033[1;92mTên Tài Khoản TDS: \033[1;33m$user\n";
print "$daucau2\033[1;92mXu Hiện Tại: \033[1;33m$sodu\033[1;32m Xu\n";
print "$daucau2\033[1;92mSố Cookie Facebook:\033[1;33m $demcki \n";
echo $thanhngang1;

echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "1" . $do . "]" . $luc . " Nhiệm Vụ Like\n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "2" . $do . "]" . $luc . " Nhiệm Vụ Like 2\n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "3" . $do . "]" . $luc . " Nhiệm Vụ Follow\n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "4" . $do . "]" . $luc . " Nhiệm Vụ Comment \n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "5" . $do . "]" . $luc . " Nhiệm Vụ Share   \n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "6" . $do . "]" . $luc . " Nhiệm Vụ Cảm Xúc  \n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "7" . $do . "]" . $luc . " Nhiệm Vụ Cảm Xúc Comment  \n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "8" . $do . "]" . $luc . " Nhiệm Vụ Like Page  \n";
echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "9" . $do . "]" . $luc . " Nhiệm Vụ Tham Gia Group  \n";
//echo $daucau2 . $luc . "Nhập " . $do . "[" . $vang . "8" . $do . "]" . $luc . " Nhiệm Vụ Join Group \n";
echo $thanhngang1;
echo $thanh_dep.$xnhac."Có Thể Chọn Nhiều Nhiệm Vụ (Ví Dụ 24) \n";
echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$loainvtt = trim(fgets(STDIN));
echo $thanh_dep.$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Đổi Nick: $vang";
$doiacc = (int)trim(fgets(STDIN));
echo $daucau2 . $luc . "Bạn Có Muốn Tạm Dừng Khi Hết Nhiệm Vụ (y/n): $vang";
$dunghetnv = trim(fgets(STDIN));

echo $daucau2 . $luc . "Bạn Có Muốn Nhập Lại Cookie Khi Die (y/n): $vang";
$nhaptkdie = trim(fgets(STDIN));




if (strpos($loainvtt, '1') !== false) {
    array_push($listnv, 'like');
}
if (strpos($loainvtt, '2') !== false) {
    array_push($listnv, 'like2');
}
if (strpos($loainvtt, '3') !== false) {
    array_push($listnv, 'sub');
}
if (strpos($loainvtt, '4') !== false) {
    array_push($listnv, 'cmt');
}
if (strpos($loainvtt, '5') !== false) {
    array_push($listnv, 'share');
}
if (strpos($loainvtt, '6') !== false) {
    array_push($listnv, 'cx');
}
if (strpos($loainvtt, '7') !== false) {
    array_push($listnv, 'cxcmt');
}
if (strpos($loainvtt, '8') !== false) {
    array_push($listnv, 'page');
}
if (strpos($loainvtt, '9') !== false) {
    array_push($listnv, 'group');
}

while (true) {
    while (true) {

        if (count($khoToken) == 0) {

            echo $do."Đã Xoá Tất Cả Cookie, Vui Lòng Nhập Lại  \n";
        echo $thanh_dep.$luc."Lưu Ý: ".$xduong."Nếu Muốn Dừng Lại Thì Nhấn Enter \n";
            for ($a = 1; $a < 999999; $a++) {
                echo $thanh_dep.$luc."Nhập Cookie Facebook Thứ $a: $vang";
                $nhapck = (string)trim(fgets(STDIN));
                if ($nhapck == '') {
                    break;
                }
                array_push($khoToken, $nhapck);
            }
        }

        $spam = 0;
        for ($xz = 0; $xz < count($khoToken); $xz++) {
            if ($demhetnv2 == (count($khoToken) * 2)) {
                $demhetnv2 = 0;
                $demhetnv = 0;

                if ($dunghetnv == "y") {
                    echo $luc . "────────────────────────────────────────────────────────────────────── \n";
                    echo $daucau2 . $luc . "Tất Cả Nick Đã Hết Nhiệm Vụ";

                    echo $daucau1 . $luc . "Ấn Enter Để Chạy Tiếp Hoặc Nhập 1 Để Thêm Cookie: $vang";
                    $lloafssd = trim(fgets(STDIN));

                    if ($lloafssd == '1') {
                        
        echo $thanh_dep.$luc."Lưu Ý: ".$xduong."Nếu Muốn Dừng Lại Thì Nhấn Enter \n";
                        for ($a = 1; $a < 999999; $a++) {
                            
                           echo $thanh_dep.$luc."Nhập Cookie Facebook Thứ $a: $vang";
 $nhapck = (string)trim(fgets(STDIN));
                            if ($nhapck == '') {
                                break;
                            }
                            array_push($khoToken, $nhapck);
                        }
                    }

     
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
                    curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
                    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
                    $login = array('username' => $username, 'password' => $password, 'submit' => ' Đăng Nhập');
                    curl_setopt($ch, CURLOPT_POST, count($login));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
                    curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
                    $source = curl_exec($ch);
                    curl_close($ch);
                }
            }


            $spam = 0;
            $cookie = $khoToken[$xz];

            
            $page = thongtin('me', $cookie, $useragent);
            $idfb = explode('%',explode('?lst=', $page)[1])[0];
            if ($idfb == '') {
                echo $red . "Cookie die\n";
                array_splice($khoToken, $xz, 1);
                $spam = 1; break;
            } else {
                

                // Lấy ID FB
                $page = thongtin('me', $cookie, $useragent);
                //lấy tên
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%',explode('?lst=', $page)[1])[0];


                if ($idfb != "") {
                    while (true) {
                        $spam = 1;
                        $demlgin++;

                        if ($demlgin <= 1 or $demlgin > 30) {
                            $demlgin = 1;
                            $data   = fread(fopen("TDS_1.1.txt", "r"), filesize("TDS_1.1.txt"));
                            $_SESSION["username"] = explode('|', $data)[0];
                            $_SESSION['password'] = explode('|', $data)[1];
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
                            curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
                            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
                            $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
                            curl_setopt($ch, CURLOPT_POST, count($login));
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
                            curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
                            $source = curl_exec($ch);
                            curl_close($ch);
                        }

                        
                        
                        $d = datnick($idfb);
                        if ($d == 1) {
                            $demlgin = 2;
                            
                            
                            echo "\r                            \r";
                            $demhetnv = 0;
                            echo "\033[1;32m────────────────────────────────────────────────────────────\n";
                            echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$luc.$tenfb."\n";
                            echo "\033[1;32m────────────────────────────────────────────────────────────\n";
                            $spam = 0;
                        } else {
                            echo "\r                            \r";
                            echo $do . "Cấu hình thất bại vui lòng thêm FB $idfb vào cấu hình";
                        }
                        if ($spam == 0) {
                            break;
                        } else {
                            usleep(1);
                        }
                    }
                } else {
                    
                    echo $do . "Cookie die   \n";
                    array_splice($khoToken, $xz, 1);
                    $spam = 1;
                    break;
                }
            }


            while (true) {

                if ($spam == 1) {
                    break;
                }
                
                $sodu = getxu();
                $rand = $listnv[array_rand($listnv, 1)];
                $page = thongtin('me', $cookie, $useragent);
                $idfb = explode('%',explode('?lst=', $page)[1])[0];
                if ($idfb == '') {
                    echo $red . "Cookie die\n";
                    array_splice($khoToken, $xz, 1);
                    $spam = 1; break;
                }
                
                //nvlike
                if ($rand == 'like') {
                    
                    $x = getnv('like');
                    if ($x != "") {

                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mLike Tạm Thời Hết Nhiệm Vụ            \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                $g = camxuc($id, 'LIKE', $cookie);
                             if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
                                    echo "                                                      \r";
                                    echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Like\n";
                                    array_splice($khocookie, $xz, 1);
                                    $spam = 1;
                                    break;}   
                            }
                            $s = nhantien('like', 'like', $id);

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            
                            if ($s == 2) {
                                $nv += 1;
                                $sodu += 300;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m".$_SESSION["C_LIKE"]."\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +300 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaylike');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    }
                    //like2
                } elseif ($rand == 'like2') {
                    
                    $x = getnv('likegiare');
                    if ($x != "") {

                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mLike 2 Tạm Thời Hết Nhiệm Vụ               \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                $g = camxuc($id, 'LIKE', $cookie);
                                if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
                                    echo "                                                      \r";
                                    echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Like\n";
                                    array_splice($khocookie, $xz, 1);
                                    $spam = 1;
                                    break;}
                            }
                            $s = nhantien('likegiare', 'likegiare', $id);

                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            
                            if ($s == 2) {
                                $nv += 1;
                                $sodu += 150;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;31m | \033[1;96m" . date("H:i") . "\033[1;91m | \033[1;93m".$_SESSION["C_LIKE2"]."\033[1;91m | \033[1;97m" . $id . "\033[1;91m |\033[1;92m +150 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                
                                loadtime('delaylike');
                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    }
                    //nvsub
                } else if ($rand == 'sub') {
                    
                    $x = getnv('follow');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mFollow Tạm Thời Hết Nhiệm Vụ               \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                $g = follow($id, $cookie);

                                if (strpos($g[0], 'Đăng nhập') !== false) {
                                    // $page = thongtin('me', $cookie, $useragent);
                                    // //lấy tên
                                    // $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                                    // $idfb = explode('%',explode('?lst=', $page)[1])[0];
                                    // if ($idfb != '') {
                                    // } else {
                                    //     echo "\r";
                                    //     echo "                                                      \r";
                                    //     echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Cookie Die\n";
                                    //     array_splice($khocookie, $xz, 1);
                                    //     $spam = 1;
                                    //     break;
                                    // }
                                } elseif (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
                                    echo "                                                      \r";
                                    echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Follow\n";
                                    array_splice($khocookie, $xz, 1);
                                    $spam = 1;
                                    break;
                                } elseif (strpos($g[1], 'loi') !== false) {
                                } else {
                                    $s = nhantien('follow', 'follow', $id);
                                    if ($nhapkhoa == "kkobtt") {
                                    huyfollow($id, $useragent, $cookie);
                                    }
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    $t = date('H:i:s');
                                    $rd = rand(1, 7);
                                    if ($s == 2) {
                                        $nv += 1;
                                        $sodu += 600;
                                        $d += 1;
                                        $duocne = $duocne + 1;
                                        //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m FOLLOW  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+600 \033[1;31m| \033[1;33m".$sodu."\n";
                                        $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m".$_SESSION["C_FOLLOW"]."\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                        for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                            print $tt[$i];
                                            usleep(200);
                                        }
                                        if ($spam == 1) {
                                            break;
                                        }
                                        if ($spam == 1) {
                                            break;
                                        }
                                        if (count($khoToken) > 1) {
                                            if ($duocne % $doiacc == 0) {
                                                $spam = 1;
                                                break;
                                            } else {
                                                usleep(1);
                                            }
                                        } else {
                                            usleep(1);
                                        }
                                        loadtime('delayfollow');

                                        if ($nv == $nhiemvu) {
                                            chongbl('block');

                                            $nv = "0";
                                        }
                                    } else {
                                        print "\r";
                                    }
                                }
                            }
                        }
                    }
                } else if ($rand == 'cxcmt') {
                    
                    $x = getnv('reactioncmt');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            $type = $info["data"]["" . $d . ""]["type"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mCảm Xúc CMT Tạm Thời Hết Nhiệm Vụ             \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                $g = reaction_cmt($id, $idfb, $type, $cookie);
                                if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
                                    echo "                                                      \r";
                                    echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Cảm Xúc Cmt\n";
                                    array_splice($khocookie, $xz, 1);
                                    $spam = 1;
                                    break;}
// $page = thongtin('me', $cookie, $useragent);
                                // $idfb = explode('%',explode('?lst=', $page)[1])[0];
                                // if ($idfb == '') {
                                //     echo $red . "Cookie die";
                                //     array_splice($khoToken, $xz, 1);
                                //     $spam = 1; break;
                                // }
                            }
                            $s = nhantien($type, 'reactioncmt', $id);
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $t = date('H:i:s');
                            $rd = rand(1, 7);
                            $id = explode('_', $id)[1];
                            
                            if ($s == 2) {
                                $nv += 1;
                                $sodu += 600;
                                $duocne = $duocne + 1;
                                //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m".$type."|CMT \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+600 \033[1;31m| \033[1;33m".$sodu."\n";

                                if (strpos($type, 'LIKE')) {
                                    $type = ' LIKE CMT ';
                                }
                                if (strpos($type, 'LOVE')) {
                                    $type = ' LOVE CMT ';
                                }
                                if (strpos($type, 'CARE')) {
                                    $type = ' CARE CMT ';
                                }
                                if (strpos($type, 'HAHA')) {
                                    $type = ' HAHA CMT ';
                                }
                                if (strpos($type, 'WOW')) {
                                    $type = '  WOW CMT ';
                                }
                                if (strpos($type, 'SAD')) {
                                    $type = '  SAD CMT ';
                                }
                                if (strpos($type, 'ANGRY')) {
                                    $type = ' ANGRY CMT';
                                }
                                $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m | \033[1;93m" . $type . "\033[1;91m | \033[1;97m" . $id . "\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                    print $tt[$i];
                                    usleep(200);
                                }
                                if ($spam == 1) {
                                    break;
                                }
                                if (count($khoToken) > 1) {
                                    if ($duocne % $doiacc == 0) {
                                        $spam = 1;
                                        break;
                                    } else {
                                        usleep(1);
                                    }
                                } else {
                                    usleep(1);
                                }
                                loadtime('delaycxcmt');

                                if ($nv == $nhiemvu) {
                                    chongbl('block');

                                    $nv = "0";
                                }
                            } else {
                                print "\r";
                            }
                        }
                    }
                } else if ($rand == 'page') {
                    
                    $x = getnv('fanpage');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mLike PAGE Tạm Thời Hết Nhiệm Vụ              \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                $g = page($id, $cookie);
                                $s = nhantien('fanpage', 'fanpage', $id);
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $t = date('H:i:s');
                                $rd = rand(1, 7);
                                
                                if ($s == 2) {
                                    $nv += 1;
                                    $sodu += 700;
                                    $duocne = $duocne + 1;
                                    //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m PAGE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+600 \033[1;31m| \033[1;33m".$sodu."\n";
                                    $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m".$_SESSION["C_PAGE"]."\033[1;91m| \033[1;97m".$id."\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";
                                    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                        print $tt[$i];
                                        usleep(200);
                                    }
                                    if ($spam == 1) {
                                        break;
                                    }
                                    if (count($khoToken) > 1) {
                                        if ($duocne % $doiacc == 0) {
                                            $spam = 1;
                                            break;
                                        } else {
                                            usleep(1);
                                        }
                                    } else {
                                        usleep(1);
                                    }
                                    loadtime('delaypage');

                                    if ($nv == $nhiemvu) {
                                        chongbl('block');

                                        $nv = "0";
                                    }
                                } else {
                                    print "\r";
                                }
                            }
                        }
                    }
                } else if ($rand == 'share') {
                    
                    $x = getnv('share');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mShare Tạm Thời Hết Nhiệm Vụ              \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                share($id, $cookie);
                                $s = nhantien('share', 'share', $id);
                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $t = date('H:i:s');
                                $rd = rand(1, 7);
                                
                                if ($s == 2) {
                                    $nv += 1;
                                    $sodu += 800;
                                    $duocne = $duocne + 1;
                                    // $tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m SHARE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+800 \033[1;31m| \033[1;33m".$sodu."\n";
                                    $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m".$_SESSION["C_SHARE"]."\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +800 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                        print $tt[$i];
                                        usleep(1500);
                                    }
                                    if ($spam == 1) {
                                        break;
                                    }
                                    if (count($khoToken) > 1) {
                                        if ($duocne % $doiacc == 0) {
                                            $spam = 1;
                                            break;
                                        } else {
                                            usleep(1);
                                        }
                                    } else {
                                        usleep(1);
                                    }
                                    loadtime('delayshare');

                                    if ($nv == $nhiemvu) {
                                        chongbl('block');

                                        $nv = "0";
                                    }
                                } else {
                                    print "\r";
                                }
                            }
                        }
                    }
                } else if ($rand == 'cx') {
                    
                    $x = getnv('reaction');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            $type = $info["data"]["" . $d . ""]["type"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mReaction Tạm Thời Hết Nhiệm Vụ             \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                camxuc($id, $type, $cookie);
                                if (strpos($g[1], 'Tài khoản của bạn hiện bị hạn chế') !== false) {
                                    echo "                                                      \r";
                                    echo "\033[1;31m [\033[1;37m✓\033[1;31m]\033[1;37m => \033[1;32m" . $red . "Đã Bị Block Cảm Xúc\n";
                                    array_splice($khocookie, $xz, 1);
                                    $spam = 1;
                                    break;}
                                $tp = $type;
                                $s = nhantien($tp, 'reaction', $id);

                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $t = date('H:i:s');
                                $rd = rand(1, 7);
                                
                                if ($s == 2) {
                                    $nv += 1;
                                    $sodu += 400;
                                    $duocne = $duocne + 1;
                                    //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m".$type." \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+400 \033[1;31m| \033[1;33m".$sodu."\n";

                                    if (strpos($type, 'LIKE')) {
                                        $type = $_SESSION["C_LIKE"];
                                    }
                                    if (strpos($type, 'LOVE')) {
                                        $type = $_SESSION["C_LOVE"];
                                    }
                                    if (strpos($type, 'CARE')) {
                                        $type = $_SESSION["C_CARE"];
                                    }
                                    if (strpos($type, 'HAHA')) {
                                        $type = $_SESSION["C_HAHA"];
                                    }
                                    if (strpos($type, 'WOW')) {
                                        $type = $_SESSION["C_WOW"];
                                    }
                                    if (strpos($type, 'SAD')) {
                                        $type = $_SESSION["C_SAD"];
                                    }
                                    if (strpos($type, 'ANGRY')) {
                                        $type = $_SESSION["C_ANGRY"];
                                    }
                                    $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m | \033[1;93m" . $type . "\033[1;91m | \033[1;97m" . $id . "\033[1;91m |\033[1;92m +400 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                        print $tt[$i];
                                        usleep(1500);
                                    }
                                    if ($spam == 1) {
                                        break;
                                    }
                                    if (count($khoToken) > 1) {
                                        if ($duocne % $doiacc == 0) {
                                            $spam = 1;
                                            break;
                                        } else {
                                            usleep(1);
                                        }
                                    } else {
                                        usleep(1);
                                    }
                                    loadtime('delaycx');

                                    if ($nv == $nhiemvu) {
                                        chongbl('block');

                                        $nv = "0";
                                    }
                                } else {
                                    print "\r";
                                }
                            }
                        }
                    }
                } elseif ($rand == 'cmt') {
                    
                    $x = getnv('comment');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            $msg = $info["data"]["" . $d . ""]["msg"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mCMT Tạm Thời Hết Nhiệm Vụ               \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                             \r";
                                //$g = cmt($access_token, $id, $cookie, $msg);
                                $g = cmt_fb_cookie_new($id,$cookie,$msg);
                                // $page = thongtin('me', $cookie, $useragent);
                                // $idfb = explode('%',explode('?lst=', $page)[1])[0];
                                // if ($idfb == '') {
                                //     echo $red . "Cookie die";
                                //     array_splice($khoToken, $xz, 1);
                                //     $spam = 1; break;
                                // } else {
                                    $s = nhantien('like', 'comment', $id);
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    $t = date('H:i:s');
                                    $rd = rand(1, 7);
                                    
                                    if ($s == 2) {
                                        $nv += 1;
                                        $sodu += 600;
                                        $duocne = $duocne + 1;
                                        //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m CMT  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+600 \033[1;31m| \033[1;33m".$sodu."\n";
                                        $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m |\033[1;93m".$_SESSION["C_CMT"]."\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;96m $msg\033[1;91m |\033[1;92m +600 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m | \n";

                                        for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                            print $tt[$i];
                                            usleep(200);
                                        }
                                        if ($spam == 1) {
                                            break;
                                        }
                                        if (count($khoToken) > 1) {
                                            if ($duocne % $doiacc == 0) {
                                                $spam = 1;
                                                break;
                                            } else {
                                                usleep(1);
                                            }
                                        } else {
                                            usleep(1);
                                        }
                                        loadtime('delaycmt');

                                        if ($nv == $nhiemvu) {
                                            chongbl('block');

                                            $nv = "0";
                                        }
                                    } else {
                                        print "\r";
                                    }
                                //}
                            }
                        }
                    }
                } elseif ($rand == 'group') {
                    
                    $x = getnv('group');
                    if ($x != "") {
                        $info = json_decode($x, true);
                        $d = "0";
                        while (true) {
                            $id = $info["data"]["" . $d . ""]["id"];
                            if ($id < '1') {
                                print "$daucau2 \033[1;31mGroup Tạm Thời Hết Nhiệm Vụ             \r";
                                if (count($khoToken) > 1) {
                                    $demhetnv++;
                                }
                                if ($demhetnv == 4) {
                                    $spam = 1;
                                }
                                break;
                            } else {
                                $demhetnv = 0;
                                $d += 1;
                                echo "\033[1;37m".$id."                            \r";
                                $g = group_fb($id, $useragent, $cookie);
                                $s = nhantien('group', 'group', $id);

                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                $t = date('H:i:s');
                                $rd = rand(1, 7);
                                
                                if ($s == 2) {
                                    $nv += 1;
                                    $sodu += 1400;
                                    $duocne = $duocne + 1;
                                    //$tt = " \033[1;31m[\033[1;30m".$ytb."\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m| \033[1;36m$t\033[1;31m | \033[1;3".$rd."m LIKE  \033[1;31m| \033[1;30mSUCCESS \033[1;31m| \033[1;32m+300 \033[1;31m| \033[1;33m".$sodu."\n";
                                    $tt = "\r\033[1;33m[\033[1;37m" . $duocne . "\033[1;33m]\033[1;91m | \033[1;96m" . date("H:i") . "\033[1;91m | \033[1;93m".$_SESSION["C_GROUP"]."\033[1;91m| \033[1;97m" . $id . "\033[1;91m |\033[1;92m +1400 \033[1;91m| \033[1;93m" . $sodu . "\e[0m\033[1;91m |\n";

                                    for ($i = 1; $i < (strlen($tt) + 1); $i++) {
                                        print $tt[$i];
                                        usleep(200);
                                    }
                                    if ($spam == 1) {
                                        break;
                                    }
                                    if (count($khoToken) > 1) {
                                        if ($duocne % $doiacc == 0) {
                                            $spam = 1;
                                            break;
                                        } else {
                                            usleep(1);
                                        }
                                    } else {
                                        usleep(1);
                                    }
                                    loadtime('delaygr');
                                    if ($nv == $nhiemvu) {
                                        chongbl('block');

                                        $nv = "0";
                                    }
                                } else {
                                    print "\r";
                                }
                            }
                        }
                        //nvsub
                    }
                }
            }
        }
    }
}

function thongtin($id, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);
    //echo "\n".$page."\n\n\n\n";

    // $code_post = explode('<span>', $page)[2];
    // $code_post = explode('</span>', $code_post)[0];
    //   echo "\n\n".$code_post;
    // $id_post = explode('mf_story_key":"', $code_post)[1];
    // $id_post = explode('"', $id_post)[0];


    // //tennguoidung
    return $page;
}

function logintds()
{
    $data   = fread(fopen("TDS_1.1.txt", "r"), filesize("TDS_1.1.txt"));
    $_SESSION["username"] = explode('|', $data)[0];
    $_SESSION['password'] = explode('|', $data)[1];
    $ch = curl_init();
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
    
    $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
    curl_setopt($ch, CURLOPT_POST, count($login));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
    $source = curl_exec($ch);
    curl_close($ch);
}
function group_fb($id, $useragent, $cookie)
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }

    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    
    $linkbv = 'https://mbasic.facebook.com/groups/' . $id2;
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
                    :'));
    // json_decode(curl_exec($ch), true);
    $post = curl_exec($ch);


    $link = explode('<form method="post" action="/a/group/join/?group_id=', $post)[1];
    $link = explode('"', $link)[0];
    $link = html_entity_decode($link);
    $link = "https://mbasic.facebook.com/a/group/join/?group_id=" . $link;
    // echo $link;
    // die();
    $linkreac1 = $link;
    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "referer:$linkbv",
        "cookie:$cookie",
    );
       
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkreac1);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $page = curl_exec($ch);
    $aa = $page;

    return $aa;
}


function follow($idtest, $cookie)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $idtest . '?_rdr');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "upgrade-insecure-requests: 1";
  // $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  // $head[] = "Accept-Language: en-us,en;q=0.5";
  // $head[] = "Accept-encoding: gzip, deflate, br";
  // $head[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-ch-ua-mobile: ?0";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
  //curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_REFERER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $access = curl_exec($ch);
  //return $access;
  $url1 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  if (strpos($access, '/a/subscribe.php?') !== false) {
    $haha = explode('<a href="', $access);
    //$haha2 = null;
    //echo 1;
    for ($v = 0; $v < count($haha); $v++) {
      if (strpos($haha[$v], '/a/subscribe.php?') !== false) {
        $haha2 = explode('" class=', $haha[$v])[0];
        break;
      }
    }
    //if()
    $link2 = html_entity_decode($haha2);
    // echo $url1;
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2 . '&_rdr');
    curl_setopt($ch, CURLOPT_REFERER, $url1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $fl = curl_exec($ch);
    //echo curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);
    //return $fl;
  } else {
    curl_close($ch);
    return 'id ' . $idtest . ' loi';
    //return $access;
  }
}

function like($access_token, $id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/likes');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
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
function cmt($access_token, $id, $cookie, $msg)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
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
function camxuc($id, $type, $cookie) 
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id2);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
    $page = curl_exec($ch);
    if ($id2 != $id && explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0]) {
        $get = explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0];
    } else {
        $get = $id2;
    }
    $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id=' . $get;
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LIKE') {
        $haha2 = explode('" style="display:block"', $haha[1])[0];
    } elseif ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } elseif ($type == 'CARE') {
        $haha2 = explode('" style="display:block"', $haha[3])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } elseif ($type == 'ANGRY') {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}

function page($id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/' . $id);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id=' . $id . '&origin=page_profile&pageSuggestionsOnLiking=1&gfid=' . $get . '&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);
}

function datnick($idfb)
{
    $data = "iddat=" . $idfb;
       
    $head = array(
        "Host: traodoisub.com",
        "content-length: " . strlen($data),
        "accept: */*",
        "x-requested-with: XMLHttpRequest",
        "sec-ch-ua-mobile: ?1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://traodoisub.com",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/view/cauhinh/"
    );
       
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://traodoisub.com/scr/datnick.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
       
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}



function getnv($loai)
{
    $head = array(
        "Host: traodoisub.com",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: */*",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/ex/" . $loai . "/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://traodoisub.com/ex/' . $loai . '/load.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function nhantien($tp, $loai, $id)
{
    $url  = "https://traodoisub.com/ex/" . $loai . "/nhantien.php";
    $data = "id=" . $id . "&type=" . $tp;
    $head = array(
        "Host: traodoisub.com",
        "content-length: " . strlen($data),
        "accept: */*",
        "origin: https://traodoisub.com",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "referer: https://traodoisub.com/ex/" . $loai . "/"
    );

    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function share($id, $cookie)
{
    $url  = "https://mbasic.facebook.com/" . $id . "";
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        print "\033[1;37m~\033[1;33m[\033[1;31mdie\033[1;33m] \033[1;37m=> \033[1;31mCookie Die !!!!\n";
        exit();
    }

    $one = explode("location: ", $data);
    $two = explode("rdr", $one[1]);
    $url = $two[0] . "rdr";
    if ($url == 'rdr') {
    } else {
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $a = curl_exec($ch);
        curl_close($ch);
        $data            = explode('"', explode('<a href="/composer/mbasic/?c_src=share&amp;', $a)[1])[0];
        $l1 = explode('amp;', $data)[0];
        $l2 = explode('amp;', $data)[1];
        $l3 = explode('amp;', $data)[2];
        $l4 = explode('amp;', $data)[3];
        $l5 = explode('amp;', $data)[4];
        $l6 = explode('amp;', $data)[5];
        $l7 = explode('amp;', $data)[6];
        $l8 = explode('amp;', $data)[7];
        $l9 = explode('amp;', $data)[8];
        $l10 = explode('amp;', $data)[9];
        $l11 = explode('amp;', $data)[10];
        $link = "https://mbasic.facebook.com/composer/mbasic/?c_src=share&" . $l1 . "" . $l2 . "" . $l3 . "" . $l4 . "" . $l5 . "" . $l6 . "" . $l7 . "" . $l8 . "" . $l9 . "" . $l10 . "" . $l11 . "";
    }
    #begin
    $head = array(
        "Host: mbasic.facebook.com",
        "cache-control: max-age=0",
        "save-data: on",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "referer: https://mbasic.facebook.com/home.php",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $link,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    curl_close($ch);
    $a            = explode('" id="composer_form"', explode('<form method="post" action="', $data)[1])[0];
    $a1 = explode('amp;', $a)[0];
    $a2 = explode('amp;', $a)[1];
    $a3 = explode('amp;', $a)[2];
    $a4 = explode('amp;', $a)[3];
    $link2 = "https://mbasic.facebook.com" . $a1 . "" . $a2 . "" . $a3 . "" . $a4 . "&ref=dbl";
    $fb_dtsg            = explode('" autocomplete="off"', explode('name="fb_dtsg" value="', $data)[1])[0];
    $jazoest            = explode('" autocomplete="off"', explode('name="jazoest" value="', $data)[1])[0];
    $target            = explode('"', explode('name="target" value="', $data)[1])[0];
    $csid            = explode('"', explode('name="csid" value="', $data)[1])[0];
    $privacyx            = explode('"', explode('name="privacyx" value="', $data)[1])[0];
    $cver            = explode('"', explode('name="cver" value="', $data)[1])[0];
    $m            = explode('"', explode('name="m" value="', $data)[1])[0];
    $shared_from_post_id            = explode('"', explode('name="shared_from_post_id" value="', $data)[1])[0];
    $cscr            = explode('"', explode('name="c_src" value="', $data)[1])[0];
    $referrer            = explode('"', explode('name="referrer" value="', $data)[1])[0];
    $ctype            = explode('"', explode('name="ctype" value="', $data)[1])[0];
    $sid            = explode('"', explode('name="sid" value="', $data)[1])[0];
    $waterfall_source            = explode('"', explode('name="waterfall_source" value="', $data)[1])[0];
    #break;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('d-m-Y | H:i:s');
    $data = "comment=Ngọc Tool&m=oneclick&privacyx=" . $privacyx . "&sid=" . $sid . "&shareID=" . $sid . "&fs=1&fr=null&internal_preview_image_id=null&should_share_post=false&direct=true&_ft_=" . $l11 . "&fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "__dyn=1KQEGiFo525Ujwh8-F42mml3onxG6UO3m2i5UfXwNwTwKwSwMxWUW16wZxm6Uhx6485-0SUhxm3O0AE8o11E52q3q5U2nweS787S78K1Jwt8-0lm68WUS2F0EU6i12wm8qwk888C0NEeo5Wq3q0H8-7E2swp82vwAwmE2ewnE2Lw5dw&__csr=&__req=7&__a=AYmQRaSRpckx8Ugg8YkSOfYUUczZWHGSt_e3GRCVZ-yzwoxI0JMFbt_4bf2bG-XPk4FOLrTs5QEGOofdlpo6f5hUReNVHgYej0SSg1hYsLZoMQ&__user=" . $target . "";
    $header = array(
        "Host: m.facebook.com",
        "content-length: " . strlen($data),
        "origin: https://m.facebook.com",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
        "x-response-format: JSONStream",
        "content-type: application/x-www-form-urlencoded",
        "accept: */*",
        "referer: https://m.facebook.com/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://m.facebook.com/a/sharer.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    curl_close($ch);
}

function group($id, $cookie)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://stoolnopro.com/admin/api/group.php?id=' . $id . '&cookie=' . $cookie);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $send = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $send;
}

function joingroup($id, $cookie)
{
    $url  = "https://mbasic.facebook.com/groups/" . $id . "";
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    if (strpos($a, "xs=deleted") == true) {
        print "\033[1;31m Cookie Die\n";
        exit();
    }
    $data            = explode('"', explode('/a/group/join/', $a)[1])[0];
    $l1 = explode('amp;', $data)[0];
    $l2 = explode('amp;', $data)[1];
    $l3 = explode('amp;', $data)[2];
    $fb_dtsg            = explode('" autocomplete="off"', explode('name="fb_dtsg" value="', $a)[1])[0];
    $jazoest            = explode('" autocomplete="off"', explode('name="jazoest" value="', $a)[1])[0];

    $link = "https://mbasic.facebook.com/a/group/join/" . $l1 . "" . $l2 . "" . $l3 . "";
    if ($link == 'https://mbasic.facebook.com/a/group/join/') {
    } else {
        $data = "fb_dtsg=" . $fb_dtsg . "&jazoest=" . $jazoest . "";
        $header = array(
            "Host: mbasic.facebook.com",
            "content-length: " . strlen($data),
            "cache-control: max-age=0",
            "origin: https://mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "content-type: application/x-www-form-urlencoded",
            "user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Kiwi Chrome/68.0.3438.0 Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            "referer: " . $url . ""
        );
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $link,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIE => $cookie,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_ENCODING => TRUE,
            CURLOPT_FOLLOWLOCATION => true
        ));
        $cc = curl_exec($ch);
        $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
    }
    return $location;
}

function reaction_cmt($id, $idfb, $type, $cookie)
{
    $url  = "https://mbasic.facebook.com/" . $id . "";
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    $one = explode("location: ", $data);
    $two = explode("rdr", $one[1]);
    $url = $two[0] . "rdr";
    if ($url == 'rdr') {
    } else {
        $idpost = explode('&id=', $url)[0];
        $idvictim = explode('&id=', $url)[1];
        curl_close($ch);
        if (strpos($data, "xs=deleted") == true) {
            //print "\033[1;37m→\033[1;31m Die Cookie !!!\n";
            //exit();
        }
        $head = array(
            "Host: mbasic.facebook.com",
            "cache-control: max-age=0",
            "sec-ch-ua-mobile: ?1",
            "save-data: on",
            "upgrade-insecure-requests: 1",
            "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site: none",
            "sec-fetch-mode: navigate",
            "sec-fetch-user: ?1",
            "sec-fetch-dest: document"
        );
        $ch   = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => 'https://mbasic.facebook.com/reactions/picker/?ft_id=' . $id . '&origin_uri=https://mbasic.facebook.com/' . $idvictim . '/posts/' . $idpost . '/?app=fbl&fbt_id=' . $id . '&lul&av=' . $idfb . '&__tn__=R',
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_COOKIE => $cookie,
            CURLOPT_ENCODING => TRUE
        ));
        $cx = curl_exec($ch);
        $haha = explode('<a href="', $cx);
        if ($type == 'LOVE') {
            $haha2 = explode('" style="display:block"', $haha[2])[0];
        } else if ($type == 'CARE') {
            $haha2 = explode('" style="display:block"', $haha[3])[0];
        } else if ($type == 'HAHA') {
            $haha2 = explode('" style="display:block"', $haha[4])[0];
        } else if ($type == 'WOW') {
            $haha2 = explode('" style="display:block"', $haha[5])[0];
        } else if ($type == 'SAD') {
            $haha2 = explode('" style="display:block"', $haha[6])[0];
        } else {
            $haha2 = explode('" style="display:block"', $haha[7])[0];
        }
        if ($type == 'LIKE') {
            $data            = explode('"', explode('<a href="/ufi/reaction/?ft_ent_identifier=', $cx)[1])[0];
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier=' . htmlspecialchars_decode($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            curl_close($ch);
        } else {
            $link2 = html_entity_decode($haha2);
            curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com' . $link2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $x = curl_exec($ch);
            $location = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            curl_close($ch);
        }
    }
    return $location;
}
function loadtime($loai)
{
    $so = 0;
    $delay = $_SESSION['' . $loai . ''];
    for($x = $delay ;$x>= 1;$x--){
        echo " \e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■ \e[1;34mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;31m giây";
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■ \e[1;33mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;32m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉ \e[1;31mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;36m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
    echo " \e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■ \e[1;36mVui Lòng Đợi A Thưởng Lấy Job Sau ".$vang.$x."\e[1;34m giây"; 
    usleep(180000); 
    echo "\r"; 
    echo " \r"; 
        }}

function gettoken($cookie, $useragent)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/business_locations",
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $access_token = 'EAAG' . explode('","', explode('EAAG', $access)[1])[0];
    if (strlen($access_token) > 5) {
        return $access_token;
    } else {
        return 'die';
    }
}
function    getxu()
{
    $url = "https://traodoisub.com/scr/user.php";
    $head = array(
        "Host: traodoisub.com",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://traodoisub.com/home/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    $sodu = $json["xu"];
    return $sodu;
}

function huyfollow($id, $useragent, $cookie)
{
    $ch = curl_init();
    if (strpos($id, '_')) {
        $uid = explode('_', $id, 2);
        $id2 = 'story.php?story_fbid=' . $uid[1] . '&id=' . $uid[0];
    } else {
        $id2 = $id;
    }

    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
       
    $linkbv = 'https://mbasic.facebook.com/' . $id2;
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
                    :'));
    // json_decode(curl_exec($ch), true);
    $post = curl_exec($ch);

    
    $link = explode('<a href="/a/subscriptions/remove?subject_id=', $post)[1];
    $link = explode('"', $link)[0];
    $link = html_entity_decode($link);
    $link = "https://mbasic.facebook.com/a/subscriptions/remove?subject_id=".$link;
    // echo $link;
    // die();
    $linkreac1 = $link;
    $header = array(
        "Host:mbasic.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "referer:$linkbv",
        "cookie:$cookie",
    );
       
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkreac1);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $page = curl_exec($ch);
    $aa = $page;
 
    return $aa;
}
function cmt_fb_cookie_new($id,$cookie,$msg){
$mr = curl_init();
$head = [
	"Host:mbasic.facebook.com",
	'sec-ch-ua:"Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"',
	"sec-ch-ua-mobile:?1",
	"cache-control:max-age=0",
	"upgrade-insecure-requests:1",
	"dnt:1",
	"save-data:on",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
	"accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
	"sec-fetch-site:same-origin",
	"sec-fetch-mode:navigate",
	"sec-fetch-user:?1",
	"sec-fetch-dest:document",
	"referer:https://mbasic.facebook.com/",
	"accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",];
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/$id");
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
$fb_dtsg = explode('"',explode('fb_dtsg" value="',$mr2)[1])[0];
$jazoest = explode('"',explode('jazoest" value="',$mr2)[1])[0];
$cmt = explode('"',explode('action="/a/comment.php?',$mr2)[1])[0];
$text = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&comment_text=".$msg;
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/comment.php?".htmlspecialchars_decode($cmt));
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_POSTFIELDS, $text);
$mr2 = curl_exec($mr);
curl_close($mr);
}
function login() {
    $DATA = http_build_query(
        array(
            "username" => $_SESSION["username"],
            "password" => $_SESSION['password'],
        )
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/scr/login.php",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $DATA,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEJAR => "TDS.txt",
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => 
            array(
                "Host:traodoisub.com",
                "content-length:".strlen($DATA),
                "accept:application/json, text/javascript, */*; q=0.01",
                "x-requested-with:XMLHttpRequest",
                "user-agent:".$_SESSION['useragent'],
                "content-type:application/x-www-form-urlencoded; charset=UTF-8",
            ),
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch), true);
    if ($login["success"] == "true") {
file_put_contents($_SESSION["username"].".txt", file_get_contents("TDS.txt"));
return true;
} else {
return false;
}
}
