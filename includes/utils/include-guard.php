<?php

  # If the ALLOW_INCLUDES constant has not been defined, 
  # this script, or any script in which this file is 
  # required / included will exit when this snippet is 
  # encountered

  # By only defining the ALLOW_INCLUDES constant in our
  # controller scripts, we ensure the small include files
  # will only render when they are part of our main pages,
  # and will not render if navigated to directly. 

  # @TODO Improve: replace exit(), and instead set a 404 
  # (Not Found) header.

  if (!defined('ALLOW_INCLUDES')) {
    exit();
  }
?>