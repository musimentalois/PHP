
 $route['default_controller'] = 'welcome'; 
 $route['404_override'] = ''; 
 $route['translate_uri_dashes'] = FALSE; 
   
   
 $route['add'] = 'welcome/add'; 
 $route['edit/(:num)'] = 'welcome/edit/$1'; 
 $route['delete/(:num)'] = 'welcome/delete/$1'; 
