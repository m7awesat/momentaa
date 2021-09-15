## Steps

#### 1. clone the dir
```
git clone https://github.com/moamahfouz/momentaa.git
```
#### 2. composer dependencies
```
composer install 
```
#### 3. 
```
cp .env.example .env
```
change db name and password in ```.env``` file.

#### 4. 

```
php artisan migrate:fresh --seed
```

#### 5. that's all!


