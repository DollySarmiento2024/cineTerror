FROM mysql:latest
ENV MYSQL_ROOT_PASSWORD=fernanda
ENV MYSQL_DATABASE=cine
ENV MYSQL_USER=fernanda
ENV MYSQL_PASWORD=fernanda

COPY cine.sql /docker-entrypoint-initdb.d/
