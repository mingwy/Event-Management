<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">

    <title id='Description'>jQuery Menu - Vertical Menu Sample</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="/scripts/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="/jqwidgets/jqxmenu.js"></script>
</head>
<body>
    <div id='content'>
        <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxMenu
                $("#jqxMenu").jqxMenu({ width: '120', mode: 'vertical'});
            });
        </script>
        <div id='jqxWidget'>
            <div id='jqxMenu'>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>About Us
                        <ul>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Our Vision</a></li>
                        </ul>
                    </li>
                    <li>Services
                    </li>
                    <li>Products
                        <ul>
                            <li><a href="#">New</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Used</a>
                                <ul>
                                    <li><a href="#">Corporate Use</a></li>
                                    <li><a href="#">Private Use</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Featured</a></li>
                         </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>