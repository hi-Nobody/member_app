<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 專案

我建立的專案中主要可以查看以下兩個功能:Task 與 User

- Task
<img src="https://i.imgur.com/RsjMUhv.jpeg" alt="任務總覽"></a>

- User
<img src="https://i.imgur.com/DjinfOv.jpeg" alt="使用者總覽"></a>


## 說明

- Task 
在任務列表中，沒有做任何權限設定，任何登入後台的人皆可操作CRUD

- User 
在使用者列表中，只有admin可以操作CRUD，其中我設定的角色(role)只有user/admin
展示如下圖:
- **[user]
<img src="https://i.imgur.com/DjinfOv.jpeg" alt="一般使用者總覽"></a>


- **[admin]
<img src="https://i.imgur.com/oTSsnTW.jpeg" alt="管理者總覽"></a>

## 設計說明

- Task
沒甚麼好說的

- User
1.在資料庫中主要以enum方法限定資料欄位role只能接受user/admin兩種角色
2.初始資料將會新增兩個使用者admin/user1，詳情資訊(email、密碼...等)請自行去看seeder
3.只有admin將賦予所有權限，從controller到view都有做相關設定，而user只能看

### 安裝說明
本專案是基於laravel 8 Jetstream開發，相關安裝說明可以參考[官網](https://jetstream.laravel.com/installation.html)

> [!IMPORTANT]  
> 由於@vite是在laravel 9底下才能運作的，所以需要到view/layout中的app和guest移除，並用舊的方法載入
> `<link rel="stylesheet" href="{{ asset('css/app.css') }}">`
> `<script src="{{ asset('js/app.js') }}" defer></script>`

1.建立sql檔:在database底下新增member.sqlite的檔案
2.複製.env.example後，改名為.env
3.在.env中修改以下資訊
`DB_CONNECTION=sqlite`
`DB_DATABASE=../database/member.sqlite`
> [!IMPORTANT]  
> 由於php artisan serve和開發中所吃的相對路徑不同，
> 所以當想要開發時，`DB_DATABASE=../database/member.sqlite`要改成`DB_DATABASE=database/member.sqlite`才能正常使用

4.在config/database.php中修改以下資訊
`'database' => env('DB_DATABASE', database_path('member.sqlite'))`
5.基礎環境設定好後，請在終端中再專案底下執行 
`php artisan migrate:fresh`
和 
`php artisan db:seed  --class=UserRoleSeeder`
即可使用。
