# Tdd in Laravel
Tutorial from Beer and Code youtube channel:

Laravel test - Usando PHPUnit com Laravel

https://www.youtube.com/watch?v=f3tD-K796xo


## Naming 

### How to name test methods

```
UnityOfWork_StateUnderTest_ExpectedBehavior

ActionVerb_WhoOrWhatToDo_ExpectedBehavior

[verb]_[whoOrWhatToDo]_[expectedBehavior]()
{
    ...
}

--- 
    example 
/**
    @test
**/
public function check_if_user_culumn_is_correct()
{
    ...
}

```


example of verbs
```
check
create
read
delete
update
...
```


## Creating Tests class

### Feature Test
```
    php artisan make:test CustomerTest
```

### Unit Test
```
    php artisan make:test CustomerTest -- unit
```

### Browser test
- Install dusk
    ```
    composer require --dev laravel/dusk

    php artisan dusk:install
    ```
    if an error occur when you run "php artisan dusk:install", check the video https://youtu.be/f3tD-K796xo?t=1152
    
- Creating test
    ```
    php artisan dusk:make RegisterUserTest
    ```
- If needed change the chrome driver version according your version (installed)
    ```
    php artisan dusk:chrome-driver 93
    ```

## Running tests

Run all tests:
```
    vendor/bin/phpunit
```

Run one test
```
    vendor/bin/phpunit --filter check_if_user_culumn_is_correct
```


Run Dusk test
```
php artisan dusk
```

Run one Dusk test
```
php artisan dusk --filter check_if_user_can_login
```

