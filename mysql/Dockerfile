FROM mysql:5.7.21
COPY ./my.cnf /etc/mysql/conf.d/

COPY ./init/* /docker-entrypoint-initdb.d/

CMD ["mysqld"]