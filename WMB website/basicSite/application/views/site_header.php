<?php echo doctype("html5"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wheres My Bus</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/hover.css">
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>


</head>
<body>
<header>
    <div class="container login">

        <nav id="login">
            <button id="lib"><p>login</p></button>
            <div id="login-form">
                <img id="triangle" src="<?php echo base_url(); ?>images/Wheres%20my%20bus-login-triangle-08.png">
                <form>
                    <input name="signinButton" type="text" id="user" class="masterTooltip" placeholder="Username" title="Please enter a username" required />

                    <input name="signinButton" type="password" id="pass" class="masterTooltip" placeholder="Password" title="Please enter a password" required />

                    <button name="signinButton" type="submit" id="signinButton" value="Sign In">Login</button>
                </form>
            </div>
        </nav>

    </div>
</header>
