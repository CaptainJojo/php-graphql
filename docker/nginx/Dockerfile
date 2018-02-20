FROM alpine:3.6

MAINTAINER Vincent Composieux <vincent.composieux@gmail.com>

RUN apk add --no-cache nginx shadow
RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

COPY nginx.conf /etc/nginx/nginx.conf
COPY graphql.conf /etc/nginx/conf.d/graphql.conf
COPY entrypoint.sh /entrypoint.sh

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log \
	&& rm -r /var/www/* /etc/nginx/conf.d/default.conf \
	&& echo "upstream php-upstream { server graphql:9000; }" > /etc/nginx/conf.d/upstream.conf \
	&& adduser -u 1000 -D -S -G www-data www-data

ENTRYPOINT /entrypoint.sh

EXPOSE 80
EXPOSE 443
