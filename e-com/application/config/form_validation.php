<?php

$config = array(
        'brand' => array(
                array(
                        'field' => 'brand_name',
                        'label' => 'Brand Name',
                        'rules' => 'required'
                )
                
        ),
         'item' => array(
                array(
                        'field' => 'item_name',
                        'label' => 'Item Name',
                        'rules' => 'required'
                ),
                 array(
                        'field' => 'price',
                        'label' => 'Price',
                        'rules' => 'required|is_natural_no_zero'
                ),
                  array(
                        'field' => 'brand_id',
                        'label' => 'Brand',
                        'rules' => 'required'
                ),
                   array(
                        'field' => 'des',
                        'label' => 'Description',
                        'rules' => 'required'
                )
                
        ),

       /* 'email' => array(
                array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                )
        )*/
);
?>