### Features

- Zend2 Framework
- Docker 
- Fazer Dump do arquivo SQL q está na pasta DB

# Instalação


###Docker/Composer

###Comandos

`$ composer install`

`$ docker-compose up -d --build`


Em config/autoload/ `local.example.php` Troque as variaveis de ambiente para o codigo abaixo

   
    'db'
    'username' => 'root',
    'password' => 'secret'
    
 
    

###Diagrama do Banco

![](https://i.imgur.com/zNmIk0X.jpg)

###Docker Funcionamento e portas

![](https://i.imgur.com/19xNQrA.jpg)
