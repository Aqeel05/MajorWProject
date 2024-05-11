<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="title">
            <label>FWDIS: The Foot Weight Distribution Identifier Solution</label><br><br>
        </div>
		<nav>
			<a>Local register</a> &nbsp; <a>Local log in</a> &nbsp; <b>Index</b> &nbsp; <a href="patient_data_page.php">Patient data</a> &nbsp;
            <a href="pressure_data_page.php">Pressure data</a>
		</nav>
		<header>
			<h1>Your accessible foot weight distribution identifier</h1>
		</header>
        <div id="left">
            <h2>Introduction</h2>
			<p>
			    A lot of foot weight distribution identifiers, although effective, are unfortunately not accessible enough to be used outside a
                specific measurement room, much less an entire building where that room is.<br>
			    What if... <i>we can make that more accessible?</i><br>
			    This page is not complete yet.
			</p>
            <h2>How does it work?</h2>
            <h3>Patient registration</h3>
            <p>A patient first has to register. Their details are stored in a MySQL database accessible via phpMyAdmin.</p>
            <h3>Sourcing of data from ESP32 and the pressure sensors</h3>
            <ol>
                <li>Not final: The machine may be set to capture data for a specific patient in the database.</li>
                <li>
                    The patient first steps on the foot pressure plate that contains many pressure sensors connected to a central ESP32 Arduino integrated
                    circuit.
                </li>
                <li>
                    The weight of the patient's feet causes the pressure sensors to cause a change in its resistance and hence the voltage through it.
                    (May not be: Change accordingly)
                </li>
            </ol>
            <h3>Transport of outgoing data via Message Queuing Telemetry Transport (MQTT)</h3>
            <ol>
                <li>A Message Queuing Telemetry Transport (MQTT) service connects the ESP32 to the cloud and the hosting server.</li>
                <li>
                    With the target server as the subscriber of the MQTT topic, and the ESP32 as the transmitter, the ESP32 sends data to the broker;
                    and the broker sends data to the server.
                </li>
            </ol>
            <h3>Transport of incoming data to InfluxDB</h3>
            <p>The incoming data is written to InfluxDB to show the patient's foot pressure values.</p>
            <h3>Display of data on heatmap and table</h3>
            <p>Using the data in InfluxDB, the foot pressure values are displayed on a heatmap and table.</p>
		</div>
        <div id="right">
            <h2>Technologies used</h2>
            <div class="box">
                <img src="Mysql_logo.png" style="width: 100%;">
                <h3>MySQL</h3>
                <p>MySQL is a database software that is used for storing patient and staff data.</p>
            </div>
            <div class="box">
                <img src="PhpMyAdmin_logo.svg" style="width: 100%;">
                <h3>phpMyAdmin</h3>
                <p>phpMyAdmin is used to examine MySQL databases.</p>
            </div>
            <div class="box">
                <img src="influxdb1907.logowik.com.webp" style="width: 100%;">
                <h3>InfluxDB</h3>
                <p>A specialised time-series database software that is used for storing time-bound foot pressure data.</p>
            </div>
            <div class="box">
                <img src="Plotly-logo.png" style="width: 100%;">
                <h3>Plotly</h3>
                <p>Plotly.js is used for graphs.</p>
            </div>
        </div>
    </body>
</html>