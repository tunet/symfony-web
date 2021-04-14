FROM nginx:1.19-alpine

COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf

ARG NGINX_PORT
RUN sed -i "s|__LISTEN_PORT__|$NGINX_PORT|" /etc/nginx/conf.d/default.conf
