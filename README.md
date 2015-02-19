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

1. Obtain your datapoint api key from the met office website at http://www.metoffice.gov.uk/datapoint/api
2. Find the location code that you wish to use for your forecasts. You can find the location code by visiting http://data.gov.uk/metoffice-data-archive and then using the site code dropdown to find your location. You need the number code that is shown alongside the name of the location. This is needed in the next step.
3. Open the weatherupdate.php file and add the location code on line 6 where it is indicated
4. Whilst in the weatherupdate.php file add your datapoint api key on line 6 where it is indicated.
5. Amend line 9 of the weatherupdate.php file editing the relative path to the weather.xml file depending on where you upload it to.
6. Save this file
7. Cut and paste the weather.php file contents into a php web page for your site, ensuring that this webpage has bootstrap css & js along with jquery included. You can remove bootstrap specific elements and styling if you wish but you must then style the widget yourself. You need to ensure that the url for the weather.xml file on line 14 is correct dependent on where you upload this file to on your server
8. If you upload the files and folders to a location other than in the root, you need to change the url's for the images and background in the weatherstyle.css and weather.php files to correctly point at the correct weather image folder and subfolders.
9. Ensure that the weather.xml has the correct write permissions so it can be written to by the weatherupdate.php script. i found setting 0755 permission to work well but this need tweaking for different server configs.
10. Test that the weatherupdate.php script is working and updating correctly. You can do so by navigating to http://yourdomain.com/weatherupdate.php. If successful, your weather.xml file should contain the latest data. it can take a few moments to run the update.
11. Create a cron job to run the weatherupdate.php script every three hours
12. Finish any css styling as you require, I’ve provided a base from which you can work if you like.
