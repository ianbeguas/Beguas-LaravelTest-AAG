# Beguas-LaravelTest-AAG

Instuction to Run Laravel Downlaoded from Github 

1. Go to Github https://github.com/ianbeguas/Beguas-LaravelTest-AAG.git
2. Change main branch to master brach because the files uploaded in master branch
3. Download The Zip File
4. After Downloading the ZipFile got to your Download file and Unzip The Downloaded File
5. Go To Unzip File directory and open cmd
6. In Cmd type composer install then enter
7. After finish installing, open the file in your code editor, my code editor is VsCode
8. After opening your project in your code editor, rename the .env.example  to  .env
9. Set up the database connection keep the DB_USERNAME=root and DB_PASSWORD= is empty
10. Then go to your mysql database and create database name it in "aag-beguas"
11. Then go back to your code editor and open cmd and type php artisan migrate then click enter
12. After migrating tables, double check it your database if the table is migrated
13. Then go back to your code editor and click .env file then check the APP_KEY=  if the APP_KEY is empty then lets generate APP_KEY
14. To generate APP_KEY go to cmd and type php artisan key:generate then click enter
15. After generate it copy it to APP_KEY=CopyHereYourGeneratedAppkey
16. Then go to cmd again and type php artisan storage:link then click enter
17. Then it's ready to run it type php artisan serve click enter
18. copy the url and paste it to your web browser

Compiled Instruction

1. git clone https://github.com/ianbeguas/Beguas-LaravelTest-AAG.git
2. cd beguas-aag
3. composer install
4. cp .env.exaple .env
5. set up .env file 
6. php artisan key:generate
7. php artisan storage:link
8. php artisan migrate 
9. php artisan serve

System Accounts

Admin:
email: admin@gmail.com
Password: beguasian2

User: 
email: ianbeguas@gmail.com
password: beguasian2
