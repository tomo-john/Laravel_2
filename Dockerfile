# ベースイメージの指定
FROM php:8.1-fpm

# ライブラリのインストール
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip git

# PHP拡張モジュールのインストール
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 作業ディレクトリの設定
WORKDIR /var/www

# アプリケーションコードのコピー
COPY . .

# サーバー起動コマンド
CMD ["php-fpm"]

