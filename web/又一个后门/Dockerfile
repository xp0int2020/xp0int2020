FROM debian:buster


RUN apt-get update && apt-get install -y wget  apt-transport-https lsb-release ca-certificates  && \
    wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list && \
    apt-get update && apt-get install -y apache2 php      \
     && \
    apt-get autoremove -y && apt-get autoclean && apt-get clean && \
    rm -rf /tmp/* /var/tmp/* /var/lib/apt/lists/*


COPY ./index.php /var/www/html/index.php

RUN chmod -R 755 /var/www/html
RUN chown -R root:root /var/www/html


#RUN rm /usr/lib/php/*/imagick.so

ADD aaa.ini /etc/php/7.4/apache2/conf.d/aaa.ini

COPY files/readflag /readflag
COPY files/flag /flag

COPY files/start.sh /start.sh

RUN chmod 0700 /flag
RUN chmod 0755 /readflag
RUN chmod +s /readflag
RUN chmod +x /start.sh




EXPOSE 80

CMD ["/start.sh"]

# docker run --name=doc5 -p 8085:80 -d 503b82ab8ec0