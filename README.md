<p align="center">
    <a href="#" target="_blank">
    <img src="https://github.com/KirinyetBrian/Baraton-Laravel/blob/main/Baraton-Laravel/public/images/logo3.png" width="400">
    </a>
</p>

## ABOUT BARATON
Baraton is a platform that students can use to  find accommodation around campus

## Libraries,Frameworks  used && 3rd party API
-Intervention : for  PHP Image Manipulation (https://image.intervention.io/v2 ) 

## INSTALLATION/RUNNING THE APP
Note: Make sure you have git installed locally on your computer first.
cd into the directory where you want to clone the project

1. Clone GitHub repo for this project locally
 ```
   git clone https://github.com/KirinyetBrian/Baraton-Laravel.git
   
  ``` 
2. cd into your project


3. Install Composer Dependencies
 
```
 composer install
```
    

4. Create a copy of your .env file
  
```
cp .env.example .env
```

5. Generate an app encryption key
```sh 
php artisan key:generate
```

6. Create an empty database for our application in php my admin


7. In the .env file, add database information to allow Laravel to connect to the database


8. Migrate the database
```
php artisan migrate
```

```

php artisan serve
```

9.You can now access the  app through
  <http://127.0.0.1:8000/>
