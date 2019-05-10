## This package is work in progress

### Installation instructions

#### Step 1: Install package
```composer require blixx/forcehttps```

#### Step 2: Add to Web middleware in app/Http/Kernel.php:**
```
protected $middlewareGroups = [
'web' => [
    ...
    \Blixx\ForceHttps\Middleware\ForceHttpsMiddleware::class,
],
```

#### Step 3: Set your env to live in the .env file**
This package will only run in live or staging mode, so please set your live environment properly:

```APP_ENV=live```

#### You're set!

## This package is work in progress
