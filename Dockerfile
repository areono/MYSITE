# PHP와 Apache가 포함된 공식 이미지 사용
FROM php:8.1-apache

# Apache 설정
WORKDIR /var/www/areono
COPY src/ /var/www/areono/

