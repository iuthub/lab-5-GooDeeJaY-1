<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
        <?php
        if ($_GET['name'] != '' and $_GET['sec'] != '' and $_GET['card'] != ''){
            print "
                <h1>Thanks, sucker!</h1>
                <p>Your information has been recorded.</p>
                <dl>
			        <dt>Name</dt>
			        <dd> $_GET[name] </dd>

                    <dt>Section</dt>
                    <dd> $_GET[sec] </dd>
        
                    <dt>Credit Card</dt>
                    <dd>$_GET[card]</dd>
                </dl>            
            ";
            $content = "$_GET[name];$_GET[sec];$_GET[card]\n";
            $fp = fopen('suckers.txt', 'a');
            fwrite($fp, $content);
            fclose($fp);
        } else {
            print "
                <h1>Sorry!</h1>
                <p>You didn't fill out the form completely! <a href='buyagrade.html'>Try again?</a>></p> 
            ";
        }
        ?>
	</body>
</html>