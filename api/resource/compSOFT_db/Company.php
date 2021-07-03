<?php
	require_once './db/dbcompSOFT_dbManager.php';
	
/*
 * SCHEMA DB Company
 * 
	{
		CompanyName: {
			type: 'String', 
			required : true
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		companyID: {
			type: Schema.ObjectId,
			ref : "User"
		},
		
	}
 * 
 */


//CRUD METHODS


//CRUD - CREATE


$app->post('/company',	function () use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'CompanyName'	=> $body->CompanyName,
		
	);

	$obj = makeQuery("INSERT INTO company (_id, CompanyName )  VALUES ( null, :CompanyName   )", $params, false);
    
	
	echo json_encode($body);
	
});
	
//CRUD - REMOVE

$app->delete('/company/:id',	function ($id) use ($app){
	
	$params = array (
		'id'	=> $id,
	);

	makeQuery("DELETE FROM company WHERE _id = :id LIMIT 1", $params);

});
	
//CRUD - GET LIST

$app->get('/company',	function () use ($app){
	makeQuery("SELECT * FROM company");
});


//CRUD - EDIT

$app->post('/company/:id',	function ($id) use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'id'	=> $id,
		'CompanyName'	    => $body->CompanyName
	);

	$obj = makeQuery("UPDATE company SET  CompanyName = :CompanyName   WHERE _id = :id LIMIT 1", $params, false);
    
	
	echo json_encode($body);
    	
});


/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>