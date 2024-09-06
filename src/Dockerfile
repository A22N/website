FROM ubuntu:20.04

# Cập nhật và cài đặt các gói cần thiết
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql wget nano && \
    # Thiết lập múi giờ
    ln -sf /usr/share/zoneinfo/Asia/Ho_Chi_Minh /etc/localtime && \
    echo "Asia/Ho_Chi_Minh" > /etc/timezone

WORKDIR /var/www/html/

# Xóa tệp index.html mặc định của Apache
RUN rm -rf index.html

# Sao chép mã nguồn của website vào thư mục www
COPY ./Website ./

# Thay đổi quyền sở hữu và quyền truy cập cho thư mục images
RUN chown -R www-data:www-data /var/www/html/images/ && \
    chmod -R 777 /var/www/html/images/

# Kích hoạt Apache2
CMD ["apache2ctl", "-D", "FOREGROUND"]
