FROM debian:bookworm

RUN apt-get -y update && apt-get install mariadb-server -y

COPY tools/script.sh .

RUN mkdir -p /run/mysqld
RUN chown -R mysql:mysql /run/mysqld

RUN	sed -i "s/127.0.0.1/0.0.0.0/" /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x script.sh

CMD [ "./script.sh" ]

