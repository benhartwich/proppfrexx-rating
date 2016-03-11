# proppfrexx-rating
Show playlist of last played tracks and rate them for getting better scripting at proppfrexx.

##Installation
1. Install a windows ODBC driver: [https://dev.mysql.com/downloads/connector/odbc/](https://dev.mysql.com/downloads/connector/odbc/) (Remember the correct driver version!)
2. Run your ProppFrexx On Air and open settings => Events / Comments => Playlist.
3. OnTrackPlay add the following command and insert your credentials: 
```EXEC_SEND_SQL Driver={MySQL ODBC 5.3 ANSI Driver};Server=IP;Database=DBNAME;User=DBUSER;Password=DBPW;Option=3;|INSERT INTO playlist (date, artist, title, album, year, length) VALUES ('${now}','${cpltrackartistcurrent}','${cpltracktitlecurrent}','${cpltrackalbumcurrent}','${cpltrackyearcurrent}','${cpltrackdurationcurrent}')```
4. Create a database at your MySQL server along to the filled-in credentials and import the sql structure from folder install.
