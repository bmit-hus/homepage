<?php

function target( $target )
{
	// import $root
	global $root;

	// check if file exists >> hide
	if ( 
		!file_exists( "$root/$target.php") &&
		!file_exists( "$root/pages/$target.php" ))
	{
		return false;
	}

	// check target: if(index){}else{}
	if ( $target == 'index')
	{
		$target_name = 'Homepage';
		// check if target is self >> set inactive
		if ( strpos( $_SERVER['REQUEST_URI'], $target) == true)
		{
			echo <<<INACTIVE
				<li class="navbtn $target inactive"><a href="$root/$target.php"> $target_name </a></li>
INACTIVE;
		}
		else // paste normal link
		{
			echo <<<INDEX
				<li class="navbtn $target"><a href="$root/$target.php"> $target_name </a></li>
INDEX;
		}
	}
	// check if contact
	elseif ( $target == 'contact')
	{
		$target_name = 'Contact';
		// check if target is self >> set inactive
		if ( strpos( $_SERVER['REQUEST_URI'], $target) == true)
		{
			echo <<<INACTIVE
				<li class="navbtn $target inactive"><a href="$root/pages/$target.php"> $target_name </a></li>
INACTIVE;
		}
		else // paste normal link
		{
			echo <<<CONTACT
				<li class="navbtn $target fillin"><a href="$root/pages/$target.php"> $target_name </a></li>
CONTACT;
		}
	}
	else // for all other pages
	{
		// check if target is self >> set inactive
		if ( strpos( $_SERVER['REQUEST_URI'], $target) == true)
		{
			$target_name = ucwords($target);
			echo <<<INACTIVE
				<li class="navbtn $target inactive"><a href="$root/pages/$target.php"> $target_name </a></li>
INACTIVE;
		}
		else // paste normal link
		{
			$target_name = ucwords($target);
			echo <<<PAGE
				<li class="navbtn $target"><a href="$root/pages/$target.php"> $target_name </a></li>
PAGE;
		}
	}
}

function switch_theme()
{
	
}

$add->openw('nav', '','');
	// $add->subtitle('navigation dock');
	$add->open('ul');

		$switch_theme();

	$add->shut('ul');

	$add->open('ul');

		target('index');
			$add->open('ul');
				target('test');
				target('test');
			$add->shut('ul');

		target('work');
			$add->open('ul');
				target('test');
				target('test');
				target('test');
			$add->shut('ul');

		target('blog');
			$add->open('ul');
				target('test');
				target('test');
				target('test');
			$add->shut('ul');

		target('contact');

	$add->shut('ul');
$add->shut('nav');

// EOF
