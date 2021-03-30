FROM wordpress:latest
 
RUN apt-get update
RUN apt-get -y install wget unzip
RUN apt-get install -y libzip-dev zlib1g-dev
RUN docker-php-ext-install zip
 
WORKDIR /tmp/wp-plugins

# Required plugins.
RUN wget https://downloads.wordpress.org/plugin/custom-post-type-ui.1.5.6.zip
RUN wget https://downloads.wordpress.org/plugin/advanced-custom-fields.4.4.12.zip
RUN wget https://downloads.wordpress.org/plugin/duplicate-post.3.2.zip
RUN wget https://downloads.wordpress.org/plugin/jetpack.5.5.zip
RUN wget https://downloads.wordpress.org/plugin/all-in-one-seo-pack.2.4.2.zip
 
RUN unzip './*.zip' -d /usr/src/wordpress/wp-content/plugins
 
RUN apt-get clean
RUN rm -rf /tmp/*
 
RUN chown -R www-data:www-data /usr/src/wordpress/wp-content
 
WORKDIR /var/www/html
