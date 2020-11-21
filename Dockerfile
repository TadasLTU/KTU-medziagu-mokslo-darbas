FROM ubuntu:16.04
RUN apt-get update -y

RUN apt-get install -y apache2

RUN apt-get install -y php7.0

RUN rm -rf /var/www/html/*
ADD ./ /var/www/html

RUN chown -R www-data:www-data /var/www
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]