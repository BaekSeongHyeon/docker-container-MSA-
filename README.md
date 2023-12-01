# docker-container 기반 MSA 실습코드

proxy DIR: API GateWay서버를 위한 Nginx config파일

mysql DIR: MYSQL 이미지를 이용하여 컨테이너 생성에 필요한 config파일 및 Doclkerfile

mianapp DIR: 메인 애플리케이션 담당하는 컨테이너 및 Dokcerfile과 index.html파일

app1 DIR: APP1 애플리케이션 담당하는 컨테이너 및 Dokcerfile과 index.php파일

app2 DIR: APP2(DB와 연동) 애플리케이션 담당하는 컨테이너 및 Dokcerfile과 test.php파일

컨테이너 생성시 소스 코드 수정을 위한 볼륨 마운트 방법
-> 커스텀 네트워크 사용
docker run -d -h app1 -v /home/ubuntu/app1/html:/usr/share/nginx/html --name app1 --net internal --restart always appimage
docker run -d -h app2 -v /home/ubuntu/app2/html:/usr/share/nginx/html --name app2 --net internal --restart always appimage



