FROM mysql:8.0.19
COPY ./dump/db_milk.sql /docker-entrypoint-initdb.d/init.sql