<?php
/* BIG-CONFIG */
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfDN0AUAAAAAE7rWXE_6D-KK02NTF90tojMcw1q";
$secretKey = "6LfDN0AUAAAAAJc5a2IBBX8cf7lIm30Na5Lbw60h";

//we don't need a closing php tag because this file only contains php

//creates a constant with parameters

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo "constant: " . THIS_PAGE;
//die;

switch(THIS_PAGE)
{
      case'index.php':
        $tittle ='Home Page';  
      break;
    
    case'contactme.php':
        $tittle ='Contact Page';  
      break;
    
    default:
        $title = THIS_PAGE;
}

// This switch dynamically updates PHP short tags you added to your header.php
switch(THIS_PAGE)
{
    case 'index.php':
        $title = "Nicole Brown's: WEB120 Portal Website";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = "Nicole Brown's Flexbox Resarch";
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = "Nicole Brown's Galleries Research";
        $logo = '';
        $PageID = 'Galleries Research';
    break;

    case 'map.php':
        $title = "Nicole Brown's Google Map";
        $logo = '';
        $PageID = 'Map Research';
    break;  
        
        case 'calendar.php':
        $title = "Nicole Brown's Event Calendar";
        $logo = '';
        $PageID = 'Calendar Research';
    break; 
        
        case 'youtube.php':
        $title = "Nicole Brown's Responsive YouTube";
        $logo = '';
        $PageID = 'Youtube Research';
    break; 
        
        case 'parallax.php':
        $title = "Nicole Brown's Parallax Research";
        $logo = '';
        $PageID = 'Parallax Research';
    break; 
        
        case 'shoppingcarts.php':
        $title = "Nicole Brown's Shopping Cart Research";
        $logo = '';
        $PageID = 'Shopping Cart Research';
    break; 
              
        case 'siteapp.php':
        $title = "Nicole Brown's Responsive Website V.S. Native Mobile App";
        $logo = '';
        $PageID = 'Responsive Website V.S. Native Mobile App Research';
    break;
             
        case 'webcam.php':
        $title = "Nicole Brown's Two Examples of..";
        $logo = '';
        $PageID = 'Webcam Research';
    break; 
                     
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}