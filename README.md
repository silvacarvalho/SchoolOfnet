### Documentando meu sistema.

#### Primeiros passos.

> Criando um arquivo!
>>    - Usei o comando: **vim inicio.txt** para criar e editar o arquivo.  
>>    - Adicionei o arquivo ao git com o comando: **git add inicio.txt**.  
>>    - Fiz enviei para o repositório com o comando: **git commit -m "Mensagem aqui."**.  

> Brincando com os **BRANCH's!**
>>    - Primeiro: Criei um novo branch.  
>>    - Segundo: Criei um arquivo neste branch.  
>>    - Terceiro: Fiz o commit do arquivo para o branch.  
>>    - Quarto: Fiz o merge dos arquivos do branch com o branch **master**, e removi do repositório e da minha máquina local o branch teste.  

> Criando uma **TAG** para versão do repositório  
>>  - Esta TAG **0.1.0** foi criada para atualizar o arquivo **README.md**.  

> Criando uma nova **TAG**  
>>  - Esta nova TAG **0.1.1**  foi criada apenas para representar com precisão o que foi feito no ítem anterior.  
    Com isso a alteração do repositório será feita, porém, não implicará na funcionalidade do sistema.  

#### Registrando algumas informações importantes.

> **Problemas** Laravel vs PHP.
>> Obtive alguns problemas por não me atentar para as versões do PHP que estava incompatível com a nova versão do Laravel "5.1".  

> **Problemas** ainda em curso no momento.
>> Ainda estou com problemas quando vou usar a classe **Cliente** por exemplo, não consigo apenas com o código seguinte: ```php Cliente::method ```.  
   Sempre preciso colocar por exemplo ```php \CodeProject\Cliente::find($id)->delete();```.  

> ##### **Comandos** importantes e sua utilização.  
>> **PHP artisan**.

>>> Comando **TINKER**.
>>>> ```php artisan tinker``` É um console interativo, onde é possível executar scripts php.  
>>>> Dentro do console **TINKER**, quando rodar o comando:
```php   
    factory ('CodeProject\Cliente')->make();```.  Será gerado uma instancia 
     do model **Cliente** e logo em seguida já cria um objeto com os campos da tabela totalmente preenchidos, estes dados são fakes.  
     **OBS**: Para que isso funcione perfeitamente, já deve-se ter configurado previamente o model **Cliente** 
     adicionando as propriedades da tabela:  
```php  
protected $fillable = [ 
                        'valor1',
                        'valor2',
                        'valor3'
];```

Também ter configurado o arquivo:  

```php  
    database\factories\ModelFactory.php
```
adicionando as seguintes informações.
```php  
$factory->define(CodeProject\Cliente::class, function (Faker\Generator $faker) {
    return [
        'valor1' => $faker->name,
        'valor2' => $faker->name,
        'valor3' => $faker->sentence()
    ];
});

```

  
>>> Comando **MAKE**.  
>>>> ```php artisan make:model Cliente -m``` Este comando criará um model do tipo cliente, e ainda cria um arquivo de migração que fica na pasta ```database\migrations```.  
        Nesse arquivo, é possível adicionar no método ```run```, todos os atributos da tabela da base de dados definindo até sua tipagem de dados.
>>>> ```







```js  
function testando(){
    alert("Testando");
}

```
