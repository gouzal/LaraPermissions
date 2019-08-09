<?php
Route::get('permissions', function(){
	echo 'List all permissions';
});
Route::resource('permissions/roles', 'Gouzal\LaraPermissions\RoleController');
