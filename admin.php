<?php
session_start();
include "./view/adminHeader.php";
include "./view/adminNav.php";

if(isset($_GET['source'])){
    $source = $_GET['source'];
    }
    else{
        $source='';
    }
switch($source){
    case 'all':
        include "./view/admin/viewAll.php";
    break;
    case 'add':
        include "./view/admin/addPosts.php";
    break;
    case 'edit':
        include "./view/admin/editPost.php";
    break;
    case 'profile':
        include "./view/admin/profile.php";
    break;
    case 'dashboard':
        include "./view/admin/dashboard.php";
    break;        
    default:
        include "./view/admin/dashboard.php";
    break;
}

include "./view/adminFooter.php";