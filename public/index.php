<?php
/**
 * 컴포저 오토로드 로드 
 */
$autoload_path = "../vendor/autoload.php";
if (file_exists($autoload_path)) {
    // 컴포저 오토로드
    $autoload = require "../vendor/autoload.php";

} else {
    // 오류출력
    $msg = "오토로드 파일을 읽을 수 없어, 실행이 불가능 합니다.";
    $filename = "../resource/error.html";
    if (file_exists($filename)) {
        $body = file_get_contents($filename);
        echo str_replace("</body>", $msg."</body>", $body);
    } else {
        echo $msg;
    }
    exit;
}

// 세션시작
// \jiny\session_start();

// Boot 클래스를 통하여 App 객체를 얻어 옵니다.
// 클래스의 객체를 메모리에 상주하지 않고, 바로 실행합니다. 
$app = (new \Jiny\Core\Boot())->start();

$req = \jiny\http\request();
$res = \jiny\http\response();
echo $app->main($req,$res);





// BootStart
// $start = \jiny\core\bootstart();
    


    // 컨트롤러 직접 실행방법
    // $boot->controller("membersRegist");

    // 컴포저 패키지 실행
    // $boot->package("\Jiny\Members\Registration");
    // echo $boot->package("\Jiny\Members\Login");







