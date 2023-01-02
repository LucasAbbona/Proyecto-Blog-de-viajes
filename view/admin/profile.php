<?php
include "./classes/connection.class.php";
include "./classes/profile.class.php";
include "./controller/profileContr.php";
$user=new ProfileContr("","","","");
$user->DisplayUser();
