FROM registry.access.redhat.com/ubi9/php-80:1-61
MAINTAINER Chris Jenkins "chrisj@redhat.com"
## Install postgres
USER 0
RUN dnf install -y php-pgsql
USER 1001
EXPOSE 8080
COPY . /opt/app-root/src
CMD /bin/bash -c 'php -S 0.0.0.0:8080'
