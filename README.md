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
>> **PHP artisan **.
  
>>> Comando **MAKE**.  
>>>> php artisan 

```js  
function testando(){
    alert("Testando");
}

```
