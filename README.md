# basic template for using a php websocket ratchet in your app

## installation
first you need to clone it into your app :  
```
git clone https://github.com/adklay-solutions/ratchet_websocket.git
```

Then update composer dependencies
```
composer update
```

Change the app name (```MyApp```) in the folowwing file :

- ***composer.json***

this will look like this : 

```
{
    "autoload": {
        "psr-4": {
            "MyApp\\": "src"
        }
    },
    "require": {
        "cboden/ratchet": "^0.4"
    }
}
```

- ***chat-server.php***

<u>change the ```MyApp``` by the app name you write in composer.json.</u> This line : 

```
use MyApp\Chat;
```

- ***chat.php***

Same change : 

```
use MyApp\Chat;
```

## run 

Run the server : 

```
php bin/chat-server.php
```

then run your php (```php -S localhost:8080``` or else) and go to ```/websocket-test.php``` 

open your browser's console and if you see this, your socket is recognized :
```
Connection established!
```

then try to send a message, still in your browser's console :
```
conn.send('This is a test message');
```
=>
your server should return this :
```
Nouvelle connexion (51)
Connection 51 sending message "This is a test message" to 0 other connections
```
