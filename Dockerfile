FROM registry.access.redhat.com/ubi8/php-74

EXPOSE 8080
# Install postgres
USER 0
RUN dnf install -y php-pgsql
USER 1001

COPY . /var/www/html

