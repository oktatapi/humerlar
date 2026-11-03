# Quick installation

## Install dependencies

  composer install
  npm install

## Create .env file

Windows:

```cmd
copy .env.example .env
```

Linux:

```bash
cp .env.example .env
```

## Create application key

```bash
php artisan key:generate
```


## Create datbase

```bash
php artisan migrate
```

## Seeding

```bash
php artisan db:seed
```

## Start application

```bash
php artisan serve
```
