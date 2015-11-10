<?php

$config = array(
               array(
                     'field'   => 'name',  
                     'rules'   => 'required|is_unique[vendor.name]'
                  ),
               array(
                     'field'   => 'address', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'contactp',  
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'contact',                       
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'email',
                     'rules'   => 'required'
                  ),
               array(
                     'field'  =>  'description',
                     'rules'  =>  'required'
                  )
            );

?>