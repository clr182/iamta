<?php

//create a database PDO here.
$config = include('config.php');
define('APP_BASE_URL', $config['app_base_url']);

  // Include the Rapid library
  require_once('lib/Rapid.php');

  // Create a new Router instance
  $app = new \Rapid\Router();

  
  
  
  // Define some routes. Here: requests to / will be
  // processed by the controller at controllers/Home.php
  $app->GET('/',        'Home');
  $app->GET('/awards', 'Awards');
  $app->GET('/events', 'Events');
  $app->GET('/membership', 'Membership');
  $app->GET('/resources', 'Resources');
  $app->GET('/vgawards', 'VGAwards');
  $app->GET('/studentawards', 'StudentAwards');
  $app->GET('/juniorcomp', 'JuniorComp');
  $app->GET('/seniorcomp', 'SeniorComp');
  $app->GET('/annualconference', 'AnnualConference');
  $app->GET('/committee', 'Committee');
  $app->GET('/contactinfo', 'ContactInfo');

  $app->dispatch();
?>