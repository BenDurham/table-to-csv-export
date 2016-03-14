# table-to-csv-export
Javascript and PHP solution for exporting HTML table data to CSV (Comma Separated Values) for use in Excel, databases, etc. (This is a work in progress.)
# Installation
Include export.js within the page and store export.php within the same directory. Add the "exportable" (.exportable) class to the table element you are interested in exporting. Next, create a button element or anchor element with a class of "export_button" (.export_button) above the table. 

By clicking the button, exported data should be automatically saved in a new csv directory.
