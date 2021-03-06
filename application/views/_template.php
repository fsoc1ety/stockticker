<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>

        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link href="/application/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/application/assets/css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div id="header">
                {header}
            </div>
            <div id="content">
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2015-2016,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
        <script src="/application/assets/script/jquery-1.12.0.min.js"></script>
        <script src="/application/assets/script/bootstrap.min.js"></script>
    </body>
</html>
