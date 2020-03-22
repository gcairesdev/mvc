# MVC Framework
Framework com bootstrap, jquery e url amigável.

## Como usar

1. Clone o repositório
```
git clone https://github.com/gcairesdev/mvc
```

2. Abra o repositório em seu ambiente local
```
http://localhost/mvc
```

3. Crie um controller
```
mvc
│
└───Controllers
    │   ExemploController.php
```

4. Escreva isso em seu novo controller
```
<?php	

	class ExemploController extends Controller
	{

		public function __construct()
		{
			$this->view = new MainView('exemplo');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Exemplo'));
		}
	}
?>
```

5. Crie uma view
```
mvc
│
└───Views
    |
    │___pages
        |
        |   exemplo.php
```

6. Escreva o que quiser na view
```
<h1>Olá!</h1>
```

7. Adicione 'Exemplo' como menu no MainView.php
```
mvc
│
└───Views
    |
    │   MainView.php


<?php

	class MainView
	{

		private $fileName;
		private $header;
		private $footer;

		const titulo = 'MVC';
		public $menuItems = array('Home','Sobre','Contato','Exemplo');
```

8. Mude o caminho para o nome do seu projeto
```
NOME_DA_PASTA
│
|	Application.php


<?php
	
	define('INCLUDE_PATH','http://localhost/NOME_DA_PASTA/');
	define('INCLUDE_PATH_FULL','http://localhost/NOME_DA_PASTA/Views/pages/');


```

## Como colaborar

### Commit

- Use o modo imperativo ("Adiciona feature" , "Adicionando feature" ou "Adicionado feature")
- Primeira linha deve conter no máximo 72 caracteres
- Considere descrever com detalhes no corpo do commit
- Use um emoji no início do commit

| Emoji                                         |   Commit type              
|:----------------------------------------------|:---------------------------
| :tada: `:tada:`                               | Commit inicial             
| :bookmark: `:bookmark:`                       | Tag de versão              
| :sparkles: `:sparkles:`                       | Nova feature           
| :bug: `:bug:`                                 | Correção de bug          
| :card_index: `:card_index:`                   | Metadata            
| :books: `:books:`                             | Documentação     
| :bulb: `:bulb:`                               | Documentando código fontes 
| :racehorse: `:racehorse:`                     | Desempenho
| :lipstick: `:lipstick:`                       | Estilo                
| :rotating_light: `:rotating_light:`           | Testes                
| :white_check_mark: `:white_check_mark:`       | Adicionando um teste         
| :heavy_check_mark: `:heavy_check_mark:`       | Fazendo um teste passar         
| :zap: `:zap:`                                 | Atualização geral             
| :art: `:art:`                                 | Melhorar formato/estrutura   
| :hammer: `:hammer:`                           | Refatoração do código            
| :fire: `:fire:`                               | Removendo código/arquivos      
| :green_heart: `:green_heart:`                 | Integração contínua    
| :lock: `:lock:`                               | Segurança         
| :arrow_up: `:arrow_up:`                       | Atualizando dependências   
| :arrow_down: `:arrow_down:`                   | Desatualizando dependências              
| :alien: `:alien:`                             | Tradução                
| :pencil: `:pencil:`                           | Texto                   
| :ambulance: `:ambulance:`                     | Correção rápida urgênte       
| :rocket: `:rocket:`                           | Implementando coisas           
| :apple: `:apple:`                             | Corrigindo no MacOs          
| :penguin: `:penguin:`                         | Corrigindo no Linux            
| :checkered_flag: `:checkered_flag:`           | Corrigindo Windows       
| :construction:  `:construction:`              | Em contrução      
| :heavy_minus_sign: `:heavy_minus_sign:`       | Removendo uma dependência     
| :heavy_plus_sign: `:heavy_plus_sign:`         | Adicionando uma dependência                            
| :wrench: `:wrench:`                           | Configurção de arquivos      
| :package: `:package:`                         | Package.json em JS         
| :twisted_rightwards_arrows: `:twisted_rightwards_arrows:` | Mesclando ramificações          
| :hankey: `:hankey:`                           | Gambiarra / Código ruim   
| :rewind: `:rewind:`                           | Revertendo mudanças       
| :boom: `:boom:`                               | Quebrando mudanças       
| :ok_hand: `:ok_hand:`                         | Alterações na revisão de código      
| :wheelchair: `:wheelchair:`                   | Acessibilidade       
| :truck: `:truck:`                             | Mover/enomear repositório     

#### Exemplo
```bash
git commit -m ":memo: Adiciona instruções de colaboração
>
> O arquivo README-PT-BR.md foi criado com instruções
> de como fazer um bom commit"
``` 