#UK-Weather-Widget
A PHP/XML based local weather forecast widget, offering a 5 day local forecast. Data for the forecasts is from the Datapoint API service from the Met Office. The widget as it is in this repository makes use of Bootstrap for layout and styling purposes, but you can do your own thing with the data if required.

##Weather Data Available

Your specified location has the following weather forecast data available for it in 3-hourly intervals out to five days:

* Wind direction (16 point compass)
* Wind speed (mph)
* Screen temperature (degrees Celsius)
* Weather Type (weather ID)
* Visibility (code)
* Screen relative humidity (%)
* Wind gust (mph)
* Feels like temperature (degrees Celsius)
* UV Index (code)
* Precipitation Probability (%)

##Requirements

* #### Met Office Datapoint API Key
This is freely available and can be obtained by registering here: http://www.metoffice.gov.uk/datapoint/API

* #### PHP web server
This weather widget requires PHP to be available on your server.

* #### SimpleXML 
SimpleXML must be available on your server. 
To test if SimpleXML is installed and available, use the simplexmltest.php file in this repository. Instructions are in the file. 
More info on SimpleXML here: http://php.net/manual/en/book.simplexml.php

* #### Bootstrap
For the layout and styling of the widget, you need to have Bootstrap set up correctly on the website you intend to use this widget on. You can remove the Bootstrap specific classes and ID's if you don't wish to make use of Bootstrap though. 
More info on Bootstrap here: http://getbootstrap.com/

* #### jQuery
If you wish to make use of Bootstrap, you also have to include jQuery on the website you intend to use this widget on.
More info on jQuery here: http://jquery.com/


