Тестовый модуль для OpenCart 15.5.5.1.2 oc_mod_hello_world!

Для того что бы создать свой первый модуль, нам необходимо как минимум 6 файлов. 
Пускай наш новый модуль будет иметь название  «helloworld» 
и для его работы нам понадобятся следующие файлы: 

1. файл представления модуля:
	> catalog\view\theme\default\template\module\helloworld.tpl
	
2. Kонтроллер модуля:
	> catalog\controller\module\helloworld.php

3. языковой файл:
	> catalog\language\russian\module\helloworld.php
	
4. файл представления модуля для админпанели:
	> admin\view\template\module\helloworld.tpl
	
5. контроллер модуля для админпанели:
	> admin\controller\module\helloworld.php
	
6. языковой файл модуля для админпанели:
	> admin\language\russian\module\helloworld.php
	
7. Модель :
	> catalog\model\catalog\mytest.php
	
8. Дириктория для изображений:
	> image\module_image\module_hello_world_image\
