# workflow
git저장소를 복제하여 프로젝트를 초기화 합니다.

```
git clone https://github.com/jinyphp/workflow.git
```

## 로컬 개발환경
로컬 컴퓨터에서 프로젝트를 개발활 수 있는 환경을 제공합니다.

PHP 내장 웹서버를 이용하여 로컬호스트 서버를 실행할 수 있습니다.
workflow 코드의 시작은 `./public` 입니다.
```
php -S localhost:8000 -t ./public
```

또는 간단하게 제공하는 `serve.php` 를 통하여 실행이 가능합니다.  
`serve.php` 는 외부의 `./config/serve.json` 파일 설정을 통하여 다양한 포트와 시작위치를 지정할 수 있습니다.



