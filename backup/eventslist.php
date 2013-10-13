<html>
<HEAD>
	<link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css">
	<link rel="stylesheet" href="jqwidgets/styles/jqx.classic.css" type="text/css">
	<script type="text/javascript" src="jqwidgets/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxmenu.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.selection.js"></script>
	<h1>Events History</h1>
</HEAD>
<BODY>
<div id="jqxgrid">
</div>
<script>
$(document).ready(function () {
    // prepare the data
    var source ={
        datatype: "json",
        datafields: [{ name: 'CompanyName' },{ name: 'ContactName' },{ name: 'ContactTitle' },{ name: 'Address' },{ name: 'City' },],
        url: 'data.php'
    };
    $("#jqxgrid").jqxGrid({
        source: source,
        theme: 'classic',
        columns: [{ text: 'Company Name', datafield: 'CompanyName', width: 250 },{ text: 'ContactName', datafield: 'ContactName', width: 150 },{ text: 'Contact Title', datafield: 'ContactTitle', width: 180 },{ text: 'Address', datafield: 'Address', width: 200 },{ text: 'City', datafield: 'City', width: 120 }]
    });
	
	// $.get('data.php' , function (data) {
			// //$("#jqxgrid").html(data[0].City)
			// //$("#Btn_AddNewEvent").val(data[0].City);
			// //alert(data);
	// } , 'json');
});
</script>

<script type="text/javascript">
    $(document).ready(function () {
    $("#Btn_AddNewEvent").jqxButton({ width: '120px', height: '35px', theme: 'darkblue'});
	$("#Btn_AddNewEvent").bind('click', function () {
             alert('Adding new event will be available soon')})
    });
    
</script>
<script type="text/javascript">
            $(document).ready(function () {
                // Create Link Button.
                $("#btn_new").jqxLinkButton({ width: '120', height: '35' });
            });
        </script>
         <a style='margin-left: 25px;' target="_blank" href="http://www.jqwidgets.com" id='btn_new'>Add New (Linked)</a>      
    <input type="button" value="Add New Event" id='Btn_AddNewEvent'/>
	<div id = "SelectedElement">
	</div>
</BODY>
</html>