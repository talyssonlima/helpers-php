## Um arquivo php com várias Helpers para auxiliar no desenvolvimento de qualquer sistema.

**Para usar é necessário apenas incluir o arquivo Config.php e Helpers.php e usar suas funções**

```php
require __DIR__ . "/Config.php";  
require __DIR__ . "/Helpers.php";
```
**Manipulação de strings:**

```php
$string = "Isso é um Texto de EXEMPLO";

str_slug($string); //isso-e-um-texto-de-exemplo
echo str_studly_case($string); //IssoEUmTextoDeExemplo
echo str_camel_case($string); //issoEUmTextoDeExemplo
echo str_title($string); //Isso É Um Texto De Exemplo
echo str_limit_chars($string, 10, "..."); //Isso é um...
echo str_limit_words($string, 4, "..."); //Isso é um Texto...
echo str_price("1458"); //1.458,00
```

**Manipulação de url**

```php
url("/user/1"); //http://www.localhost/user/1
url_back(); //http://www.localhost
redirect("https://www.google.com"); //https://www.google.com
```

**Manipulação de data**

```php
date_fmt("now", "d/m/Y H\hi"); //26/01/2021 21h21
date_fmt_br("now"); //26/01/2021 21:21:47
date_fmt_app("now"); //2021-01-26 21:21:47
```
