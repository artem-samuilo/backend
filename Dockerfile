FROM php:7.4-fpm
RUN apt-get update -y \
&& apt-get install -y nginx \
&& apt-get install -y awscli
RUN mkdir /code &&\
    chown www-data:www-data -R /code
COPY ./code/index.php /code/index.php
COPY ./nginx-conf/nginx-back.conf /etc/nginx/sites-available/default
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]