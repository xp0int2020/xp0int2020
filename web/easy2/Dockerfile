# Origin image
FROM lanceaking/lamp

# Meta Information
MAINTAINER Donek1 "donek1@qq.com"

## delete index
RUN rm /var/www/html/index.html

## Copy code
COPY app/ /var/www/html/
COPY init.sql /init.sql

## port
EXPOSE 80

