# 同学录
基于Laravel的简单同学录

## 预览
![登录](https://github.com/indes/classmates/raw/master/images/localhost_8000_auth_login.jpg)
![注册](https://github.com/indes/classmates/raw/master/images/localhost_8000_auth_signup.jpg)
![主页](https://github.com/indes/classmates/raw/master/images/localhost_8000_index.jpg)
![班级](https://github.com/indes/classmates/raw/master/images/localhost_8000_class.jpg)

## 安装


```shell
git clone https://github.com/indes/classmates.git && cd classmates
cp .env.example .env
composer install

//配置.env文件
php artisan key:generate
php artisan migrate
```

## License
This blog is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).