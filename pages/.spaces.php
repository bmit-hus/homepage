<?php

if( !isset( $_POST[' acitve_space']))
{
  $_POST[ 'active_space'] = $activate_space;
}
else
{
  $_POST[ 'active_space'] = 'landing_zone';
}

// EOF
