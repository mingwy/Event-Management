<HTML>

<HEAD>This is the page for peerrnetBC + Think Global Hack Local Hackathon <br>
<TITLE> Hello World in PHP </TITLE>
    <!-- add the jQuery script -->
    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>	
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
    <!-- add one or more widgets -->
    <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <!-- add one of the jQWidgets styles -->
    <link rel="stylesheet" href="jqwidgets/styles/jqx.darkblue.css" type="text/css" />
</HEAD>
<BODY>
<?php
// Hello world in PHP
 print("Hello World");
?>
 <script type="text/javascript">
        $(document).ready(function () {
            $("#myButton").jqxButton({ width: '120px', height: '35px', theme: 'darkblue'});
        });
    </script>
	
    <input type="button" value="Click Me" id='myButton'/>

</BODY>
