#UK-Weather-Widget
##A 5 Day forecast for UK Location
A PHP/XML based local weather forecast widget, offering a 5 day local forecast. Data for the forecasts is from the Datapoint API service from the Met Office. The widget as it is in this repository makes use of Bootstrap for layout and styling purposes, but you can do your own thing with the data if required.

## Demo
you can find a working demo here: https://www.doncasterdiary/doncaster-weather/

##Weather Data Available

Your chosen location has the following weather forecast data available for it in 3-hourly intervals out to five days:

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

* #### Ability to set a cron job on your server
This is required to automatically update the XML weather data feed. More info on cron here: http://en.wikipedia.org/wiki/Cron



##USAGE 

1. OBTAIN YOUR DATAPOINT API KEY FROM THE MET OFFICE WEBSITE AT http://www.metoffice.gov.uk/datapoint/API
2. FIND THE LOCATION CODE THAT YOU WISH TO USE FOR YOUR FORECASTS. YOU CAN FIND THE LOCATION CODE BY VISITING http://data.gov.uk/metoffice-data-archive AND THEN USING THE SITE CODE DROPDOWN TO FIND YOUR LOCATION. YOU NEED THE NUMBER CODE THAT IS SHOWN ALONGSIDE THE NAME OF THE LOCATION. THIS IS NEEDED IN THE NEXT STEP.
3. OPEN THE WEATHERUPDATE.PHP FILE AND ADD THE LOCATION CODE ON LINE 6 WHERE IT IS INDICATED
4. WHILST IN THE WEATHERUPDATE.PHP FILE ADD YOUR DATAPOINT API KEY ON LINE 6 WHERE IT IS INDICATED.
5. AMEND LINE 9 OF THE WEATHERUPDATE.PHP FILE EDITING THE RELATIVE PATH TO THE WEATHER.XML FILE DEPENDING ON WHERE YOU UPLOAD IT TO.
6. SAVE THIS FILE
7. CUT AND PASTE THE WEATHER.PHP FILE CONTENTS INTO A PHP WEB PAGE FOR YOUR SITE, ENSURING THAT THIS WEBPAGE HAS BOOTSTRAP CSS & JS ALONG WITH JQUERY INCLUDED. YOU CAN REMOVE BOOTSTRAP SPECIFIC ELEMENTS AND STYLING IF YOU WISH BUT YOU MUST THEN STYLE THE WIDGET YOURSELF. YOU NEED TO ENSURE THAT THE URL FOR THE WEATHER.XML FILE ON LINE 14 IS CORRECT DEPENDENT ON WHERE YOU UPLOAD THIS FILE TO ON YOUR SERVER
8. IF YOU UPLOAD THE FILES AND FOLDERS TO A LOCATION OTHER THAN IN THE ROOT, YOU NEED TO CHANGE THE URL'S FOR THE IMAGES AND BACKGROUND IN THE WEATHERSTYLE.CSS AND WEATHER.PHP FILES TO CORRECTLY POINT AT THE CORRECT WEATHER IMAGE FOLDER AND SUBFOLDERS.
9. ENSURE THAT THE WEATHER.XML HAS THE CORRECT WRITE PERMISSIONS SO IT CAN BE WRITTEN TO BY THE WEATHERUPDATE.PHP SCRIPT. I FOUND SETTING 0755 PERMISSION TO WORK WELL BUT THIS NEED TWEAKING FOR DIFFERENT SERVER CONFIGS.
9. TEST THAT THE WEATHERUPDATE.PHP SCRIPT IS WORKING AND UPDATING CORRECTLY. YOU CAN DO SO BY NAVIGATING TO HTTP://YOURDOMAIN.COM/WEATHERUPDATE.PHP. IF SUCCESSFUL, YOUR WEATHER.XML FILE SHOULD CONTAIN THE LATEST DATA. IT CAN TAKE A FEW MOMENTS TO RUN THE UPDATE.
10. CREATE A CRON JOB TO RUN THE WEATHERUPDATE.PHP SCRIPT EVERY THREE HOURS
11. FINISH ANY CSS STYLING AS YOU REQUIRE, I'VE PROVIDED A BASE FROM WHICH YOU CAN WORK IF YOU LIKE


## Assistance
THIS PACKAGE IS PROVIDED AS IS AND I CANNOT SUPPLY EXTENSIVE ASSISTANCE FOR IT. IT DOES REQUIRE BASIC KNOWLEDGE OF HTML, CSS AND PHP.



