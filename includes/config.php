<?php
//config.php

include 'credentials.php';#database credentials
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));//array [ ]
define('DEBUG',TRUE); #we want to see all errors
//echo THIS_PAGE;
//die;

$nav1['template.php'] = "Home";
$nav1['template2.php'] = "Here";
$nav1['socks.php'] = "SOCKS";
$nav1['contactus.php'] = "Call Me Sometime";
$nav1['contactus-BK.php'] = "Wanna Buy Some Socks?";
/*echo '<pre>';
var_dump($nav1);
echo '</pre>';
die;*/

switch(THIS_PAGE)
{
	case 'template.php':
		$title = "Home Sweet Home";
		$banner = "Home is Where the Heart Is";
		break;
		
	case 'template2.php':
		$title = "Here We Are";
		$banner = "Where are We?";
		break;
	case 'socks.php':
		$title = "Types of Socks";
		$banner = "So Many Socks!";
		break;
	case 'template4.php':
		$title = "We Are Everywhere";
		$banner = "What's Everywhere?";
		break;
	case 'contactus.php':
		$title = "Call me";
		$banner = "What's Your Number?";
		break;
	case 'contactus-BK.php':
		$title = "Buy Socks?";
		$banner = "Socks are warm!";
		break;	
	default:
		$title = "Default Title Tag";
		$banner = "Site Banner";
	
	}

function makeLinks($nav)
{
	$myReturn = "";
	
	foreach($nav as $url => $label)
	{
		
			if(THIS_PAGE==$url)
			{//same page, show current class
				$myReturn .= '<li class="current"><a href="' . $url . '" class="current">' . $label . '</a></li>';
				
			}else{//not special
				$myReturn .= '<li><a href="' . $url . '">' . $label . '</a></li>';
				
				}
			
			
		
		
	}
	return $myReturn;
	
}     /*<!--<li><a href="#" class="current">Home</a></li>
     <li><a href="#">About Us</a></li>
     <li><a href="#">Products</a></li>
	 <li><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></li>-->*/
	 
	 
//email handler
 
function safeEmail($to, $subject, $message, $replyTo='')
{#builds and sends a safe email, using Reply-To properly!
    $fromDomain = $_SERVER["SERVER_NAME"];
    $fromAddress = "noreply@" . $fromDomain; //form always submits from domain where form resides
    if($replyTo==''){$replyTo='';}
    $headers = 'From: ' . $fromAddress . PHP_EOL .
    'Reply-To: ' . $replyTo . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    return mail($to, $subject, $message, $headers);
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

