# E-Certificate Generator
A php web application to generate certificates after verifying in the database.


>Configure the db.php according to your database.
```php
$server="localhost";
$username="<mysql_server_username>";
$password="<mysql_server_password";
$dbname="<database_name>";
```
> Change the certificate.jpg with your certificate template image.

```php
    header('content-type:image/jpeg');
    // name to be printed on certificate
    $name = $_GET['name']; 
    // font to be used
    $font="./assets/fonts/BRUSHSCI.TTF";
    // select template
    $image=imagecreatefromjpeg("./certificate.jpg");
    // set font color
    $color=imagecolorallocate($image,19,21,22); 
    // (template, fontSize, angle, x-coordinate, y-coordinate, color, font, text)
    imagettftext($image,50,0,365,420,$color,$font,$name);
```


## Steps to generate certificate:-
- Host the directory on a web server such as Apache.
- Enter you deatils in index.php
- Email gets validated fromn database.
- Certificate generates in generate.php


### Author

***Aditya Kumar*** 
[Cypher](https://github.com/cypher-adi/)