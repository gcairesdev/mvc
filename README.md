# MVC Framework
MVC Framework with bootstrap, jquery and friendly url.

## How to use

1. Clone the repository
```
git clone https://github.com/gcairesdev/mvc
```

2. Open the project on your local ambient
```
http://localhost/mvc
```

3. Create a controller
```
mvc
│
└───Controllers
    │   ExampleController.php
```

4. Write this in your new controller
```
<?php	

	class ExampleController extends Controller
	{

		public function __construct()
		{
			$this->view = new MainView('example');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Exemplo'));
		}
	}
?>
```

5. Create a view
```
mvc
│
└───Views
    |
    │___pages
        |
        |   example.php
```

6. Write anything in your new view
```
<h1>Hello!</h1>
```

7. Adds 'Example' menu on MainView
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
		public $menuItems = array('Home','Sobre','Contato','Example');
```

8. Change path to your project name
```
NAME_OF_YOUR_FOLDER
│
|	Application.php


<?php
	
	define('INCLUDE_PATH','http://localhost/NAME_OF_YOUR_FOLDER/');
	define('INCLUDE_PATH_FULL','http://localhost/NAME_OF_YOUR_FOLDER/Views/pages/');


```

## How to collaborate

### Commit

- Use imperative mode ("Adds feature" , "Adding feature" ou "Added feature")
- First line must contain a maximum of 72 characters
- Consider describing in detail in the commit body
- Use an emoji at the beginning of commit

| Emoji                                         |   Commit type              
|:----------------------------------------------|:---------------------------
| :tada: `:tada:`                               | Initial commit             
| :bookmark: `:bookmark:`                       | Version tag                
| :sparkles: `:sparkles:`                       | New feature                
| :bug: `:bug:`                                 | Bugfix                     
| :card_index: `:card_index:`                   | Metadata                   
| :books: `:books:`                             | Documentation              
| :bulb: `:bulb:`                               | Documenting source code    
| :racehorse: `:racehorse:`                     | Performance                
| :lipstick: `:lipstick:`                       | Cosmetic                   
| :rotating_light: `:rotating_light:`           | Tests                      
| :white_check_mark: `:white_check_mark:`       | Adding a test              
| :heavy_check_mark: `:heavy_check_mark:`       | Make a test pass           
| :zap: `:zap:`                                 | General update             
| :art: `:art:`                                 | Improve format/structure   
| :hammer: `:hammer:`                           | Refactor code              
| :fire: `:fire:`                               | Removing code/files        
| :green_heart: `:green_heart:`                 | Continuous Integration     
| :lock: `:lock:`                               | Security                   
| :arrow_up: `:arrow_up:`                       | Upgrading dependencies     
| :arrow_down: `:arrow_down:`                   | Downgrading dependencies   
| :alien: `:alien:`                             | Translation                
| :pencil: `:pencil:`                           | Text                       
| :ambulance: `:ambulance:`                     | Critical hotfix            
| :rocket: `:rocket:`                           | Deploying stuff            
| :apple: `:apple:`                             | Fixing on MacOS            
| :penguin: `:penguin:`                         | Fixing on Linux            
| :checkered_flag: `:checkered_flag:`           | Fixing on Windows          
| :construction:  `:construction:`              | Work in progress           
| :heavy_minus_sign: `:heavy_minus_sign:`       | Removing a dependency      
| :heavy_plus_sign: `:heavy_plus_sign:`         | Adding a dependency        
| :wrench: `:wrench:`                           | Configuration files        
| :package: `:package:`                         | Package.json in JS         
| :twisted_rightwards_arrows: `:twisted_rightwards_arrows:` | Merging branches           
| :hankey: `:hankey:`                           | Bad code / need improv.    
| :rewind: `:rewind:`                           | Reverting changes          
| :boom: `:boom:`                               | Breaking changes           
| :ok_hand: `:ok_hand:`                         | Code review changes        
| :wheelchair: `:wheelchair:`                   | Accessibility              
| :truck: `:truck:`                             | Move/rename repository     

#### Exemplo
```bash
git commit -m ":memo: Add contribution instructions
>
> The CONTRIBUTING.md file was created with instructions for
> how to make a good commit"
``` 