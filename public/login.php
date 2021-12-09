<?php
//require '../bootstrap.php';
// 1. Connect to the database
//require '../config/keys.php';
require '../core/db_connect.php';
require '../core/bootstrap.php';

$_POST['id']=12345;//Force a valid POST
if(!empty($_POST)){
    // 3. On post, create a user session
    $_SESSION['user'] = [];
    $_SESSION['user']['id']=$_POST['id'];
    header('LOCATION: ' . $_GET['goto']);
}

// 3. Add a page title
$meta=[];
$meta['title']="Login";

$content=<<<EOT
<!-- 3 Add page title -->
<h1>{$meta['title']}</h1>

<form method="post" autocomplete="off">

    <!-- 1.1 Add email -->
    <!-- 2 Add bootstrap classes -->
    <div class="form-group">
        <label for="email">Email</label>
        <input 
            class="form-control"
            id="email"
            name="email"
            type="email"
        >
    </div>

    <!-- 1.2 Add password -->
    <!-- 3 Add bootstrap classes -->
    <div class="form-group">
        <label for="password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="password" 
            type="password"
        >
    </div>

    <input name="goto" value="{$goto}" type="hidden">
    <input type="submit" class="btn btn-primary">

</form>
EOT;

require '../core/layout.php';
