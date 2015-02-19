<!-- 

	PHP/XML BASED BOOTSTRAP UK LOCAL WEATHER WIDGET 
	DEVELOPED BY STUART BOARDMAN 
	
-->
<div class="weather-content">
	<!-- DISPLAY BOOTSTRAP TABS TAB NAV -->
	<ul class="nav nav-tabs">
	<?php
	// START BOOTSTRAP TABS LOOP, OUTPUT TAB FOR EACH DAY OF FORECAST
	
	// You should change the url to the location of your weather.xml file in the line below.
	$xml=simplexml_load_file("weather.xml") or die("Error: Cannot create object"); 
	$count=="0";
	foreach ($xml->DV->Location->Period as $period) {
		$newdate = strtotime($period[value]);
		$count++;
	?> 
		<li<?php if($count=='1') {echo ' class="active"';} // MAKES FIRST TAB ACTIVE AND DISPLAYED ?>>
			<a href="#tab-<?php echo $count;?>" role="tab" data-toggle="tab">
				<?php 
				// You can change the date format here. It will currently display abbreviated day name, followed by numerical day of month.
				// The first tab will display today, you can change this if you like below.
				if($count=='1') {
					echo 'Today';
				} else {
					echo date('D jS',$newdate); 
				}
				?> 
			</a>
		</li>
	<?php } // END TAB LOOP FOR FORECAST DAYS ?>
	</ul>
	
	<!-- DISPLAY BOOTSTRAP TABS TAB PANELS -->
	<div class="tab-content">	
	<?php
	$newcount=="0";
	// START BOOTSTRAP TAB PANE LOOP, OUTPUTS A TAB PANE FOR EACH DAY FOR THE FORECAST
	foreach ($xml->DV->Location->Period as $period) {
		$newdate = strtotime($period[value]);
		$newcount++;
	?> 
		<div class="tab-pane<?php if($newcount=='1') {echo ' active';}?>" id="tab-<?php echo $newcount;?>">
			<h3>Weather Forecast for <!-- Add the location name for your forecast here--> on <?php echo date('jS M, Y',$newdate);?></h3> 
			<div class="weather-pane">
			<?php
				// START TIME OF DAY LOOP, OUTPUTS A NEW ROW FOR EACH OF THE 3 HOURLY FORECASTS
				foreach ($period->Rep as $newrep) {
				$timeofday = $newrep/60; // Convert minutes to hours.			
			?>		
				<div class="row weather-row">
				
					<!-- DISPLAY EACH 3 HOUR SEGMENT OF DAYS FORECAST -->
					<div class="col-sm-1 time-data">
						<div><?php echo $timeofday.':00';?></div>
					</div>
					
					<?php					
					// PARSE XML FORECAST VALUES INTO PHP
					
					// WEATHER PARAMETERS USED
					$weathercode = $newrep[W];	// NUMERICAL VALUE FOR WEATHER CONDITION 
					$temp = $newrep[T]; // NUMERICAL VALUE FOR TEMPERATURE	
					$rain = $newrep[Pp]; // NUMERCIAL VALUE (PERCENTAGE) OF POSSIBILITY OF PRECIPITATION
					$feellike = $newrep[F]; // NUMERICAL VALUE FOR FEELS LIKE TEMPERATURE IN DEGREES CELSIUS
					$winddirection = $newrep[D]; // COMPASS DIRECTION OF WIND DIRECTION WORKING ON 16 POINTS COMPASS
					$windspeed = $newrep[S]; // NUMERICAL VALUE FOR WIND SPEED IN MILES PER HOUR
					$uvindex = $newrep[U]; // NUMERICAL VALUE FOR UV RADIATION INDEX
					
					// NOT USED BUT AVAILABLE PARAMETERS
					$windgust = $newrep[G]; // NUMERICAL VALUE FOR WIND GUST SPEEDS IN MILES PER HOUR
					$humidity = $newrep[H]; // NUMERICAL VALUE FOR SCREEN RELATIVE HUMIDITY
					$visibility = $newrep[V]; // NUMERICAL VALUE FOR VISIBILITY

					// TRANSLATE MET OFFICE WEATHER CODES INTO TEXT WEATHER CONDITIONS
					if($weathercode == '0') {$weathercurrent = 'Clear';}
					elseif ($weathercode == '1') {$weathercurrent = 'Sunny';}
					elseif ($weathercode == '2') {$weathercurrent = 'Partly cloudy';}
					elseif ($weathercode == '3') {$weathercurrent = 'Partly cloudy';}
					elseif ($weathercode == '4') {$weathercurrent = 'Not used';}
					elseif ($weathercode == '5') {$weathercurrent = 'Mist';}
					elseif ($weathercode == '6') {$weathercurrent = 'Fog';}
					elseif ($weathercode == '7') {$weathercurrent = 'Cloudy';}
					elseif ($weathercode == '8') {$weathercurrent = 'Overcast';}
					elseif ($weathercode == '9') {$weathercurrent = 'Light rain shower';}
					elseif ($weathercode == '10') {$weathercurrent = 'Light rain shower';}
					elseif ($weathercode == '11') {$weathercurrent = 'Drizzle';}
					elseif ($weathercode == '12') {$weathercurrent = 'Light rain';}
					elseif ($weathercode == '13') {$weathercurrent = 'Heavy rain shower';}
					elseif ($weathercode == '14') {$weathercurrent = 'Heavy rain shower';}
					elseif ($weathercode == '15') {$weathercurrent = 'Heavy rain';}
					elseif ($weathercode == '16') {$weathercurrent = 'Sleet shower';}
					elseif ($weathercode == '17') {$weathercurrent = 'Sleet shower';}
					elseif ($weathercode == '18') {$weathercurrent = 'Sleet';}
					elseif ($weathercode == '19') {$weathercurrent = 'Hail shower';}
					elseif ($weathercode == '20') {$weathercurrent = 'Hail shower';}
					elseif ($weathercode == '21') {$weathercurrent = 'Hail';}
					elseif ($weathercode == '22') {$weathercurrent = 'Light snow shower';}
					elseif ($weathercode == '23') {$weathercurrent = 'Light snow shower';}
					elseif ($weathercode == '24') {$weathercurrent = 'Light snow';}
					elseif ($weathercode == '25') {$weathercurrent = 'Heavy snow shower';}
					elseif ($weathercode == '26') {$weathercurrent = 'Heavy snow shower';}
					elseif ($weathercode == '27') {$weathercurrent = 'Heavy snow';}
					elseif ($weathercode == '28') {$weathercurrent = 'Thunder shower';}
					elseif ($weathercode == '29') {$weathercurrent = 'Thunder shower';}
					elseif ($weathercode == '30') {$weathercurrent = 'Thunder';}
					?>
					
					<!-- DISPLAY WEATHER ICON -->
					<div class="col-sm-1 weather-data">
						<img src="/weatherimages/w<?php echo $weathercode;?>.png" alt="<?php echo $weathercurrent;?>" />
					</div>
					
					<!-- DISPLAY TEMPERATURE -->
					<div class="col-sm-2 temp-data">
						<div class="temp-circle temp<?php echo $temp;?>">
							<span><?php echo $temp;?>&deg;c</span>
						</div>
						FEELS LIKE <?php echo $feellike;?>&deg;c
					</div>
					
					<!-- DISPLAY POSSIBILITY OF RAIN WITH BOOTSTRAP PROGRESS BAR -->
					<div class="col-sm-4 rain-data">
						<div class="row">
							<div class="col-xs-8">
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info active" style="width: <?php echo $rain;?>%">
										<span class="sr-only"><?php echo $rain;?>% Possibility of Rain</span>
									</div>
								</div>
							</div>
						</div>
						<p><?php echo $rain;?>% POSSIBILITY OF RAIN</p>
					</div>
					
					<!-- DISPLAY WIND SPEED AND DIRECTION WITH ICON AND TEXT -->
					<div class="col-sm-2 wind-data">
						<div style="background:url(weatherimages/windspeed/<?php echo $winddirection;?>.png)">
							<span><?php echo $windspeed;?><br/>mph</span>
						</div>
						WIND SPD &amp; DIR
					</div>
					
					<!-- DISPLAY MAX UV INDEX WITH ICON AND TEXT -->
					<div class="col-sm-2 uv-data">
						<div class="uvlevel<?php echo $uvindex;?>">
							<span><?php echo $uvindex;?></span>
						</div>
						UV INDEX				
					</div>
					
				</div>
			<?php } // END TIME OF DAY LOOP ?>
			</div>
		</div>
		<?php } // END BOOTSTRAP TAB PANE LOOP ?>
	</div>
</div>

