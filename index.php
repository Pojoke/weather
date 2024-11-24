<?php
$weathers_json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Bratislava,sk&lang=ua&APPID=4e983a238d8dca5893648e37bbffcea1");
$weathers = json_decode($weathers_json);
print_r($weathers);

print_r($weathers->weather[0]->description);
