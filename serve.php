<?php
// 외부 설정파일을 읽어 옵니다.
$path = "./config/serve.json";
if(file_exists($path)) {
    $file = file_get_contents($path);
    $conf = json_decode($file, true);
} else {
    $conf = [
        'port'=>"8000",
        'path'=>"./public"
    ];
}

/**
 * 메시지 출력
 */
echo "jinyPHP Development Server started at ".date("Y-m-d H:i:s")." \n";
echo "Listening on http://localhost:".$conf['port']." \n";
echo "Document root is ".$conf['path']." \n";
echo "Press Ctrl-C to quit. \n";

/**
 * 서버실행
 */
passthru("php -S localhost:".$conf['port']." -t ".$conf['path']." ", $status);
