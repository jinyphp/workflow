<?php
/**
 * 컴포저 오토로드 로드 
 */
$autoload_path = "../vendor/autoload.php";
if (file_exists($autoload_path)) {
    $autoload = require "../vendor/autoload.php";
    \jiny\session_start();

    $start = \jiny\core\bootstart();
    echo $start->main();

    // 컨트롤러 직접 실행방법
    // $boot->controller("membersRegist");

    // 컴포저 패키지 실행
    // $boot->package("\Jiny\Members\Registration");
    // echo $boot->package("\Jiny\Members\Login");
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







