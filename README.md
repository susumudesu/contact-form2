# お問い合わせフォーム

## 環境構築

### dockerビルド

  1.git clone git@github.com:susumudesu/contact-form2.git
  
  2.docker compose up -d -build
  
  
※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

### laravel環境構築

  1.docker compose exec php bash
  
  2.composer install
  
  3..env.exampleファイルから.envを作成し、環境変数を変更
  
  4.php artisan key:generate
  
  5.php artisan migrate
  
  6.php artisan db:seed
  

## 使用技術

  ・PHP7.4.9
  
  ・laravel8.0
  
  ・MySQL8.0.26
  
  
## ER図

![Image](https://github.com/user-attachments/assets/0242382e-13cf-4737-8596-d017786bf62b)

## URL

・開発環境：http://localhost/

・phpMyAdmin：http://localhost:8080/





  
