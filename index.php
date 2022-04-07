<!DOCTYPE html>
<html lang="en-ca">
   <head>
      <!-- Metadata -->
      <meta charset="utf-8" />
      <meta name="description" content="Assign-02" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Marcus Wehbi" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Link for Favicon -->
      <link rel="icon" href="./fav_index/favicon.ico">
      <link rel="manifest" href="./fav_index/site.webmanifest">
      <!-- Material Design Lite --> 
      <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <!-- Link for Stylesheet -->
      <link rel="stylesheet" href="./css/style.css" />
      <!-- Webpage title -->
      <title>Calculating Temperature</title>
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <!-- Material Design icon font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   <body>
      <!-- php echo to print the html to the page -->
      <?php include './temperatureConversions.php';?>
      <h1>Converting Temperatures in Celsius and Fahrenheit</h1>
     <h2>Converting from Degrees Celsisus into Degrees Fahrenheit</h2>
      <div class="row">
         <div class="column">
            <img src="./images/thermom2.png" alt="warm" style="width:100%">
         </div>
         <div class="column">
            <img src="./images/fahr1.jpeg" alt="cold" style="width:100%" style="max-height:20%">
         </div>
      </div>
      <p>Please enter the temperature in <i>Degrees Celsius (°C)</i></p>
      <?php
         // Example taking from PHP form validation example on W3 schools and modified appropriately
         // define variables and set to empty values
         
          $temperatureInC = null;
          $temperatureInF = null;
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperatureInC = $_POST["inputTempInC"];
            $temperatureInF = $_POST["inputTempInF"];
          }
        ?>
      <!-- Form to retrieve information (temperature in degrees celsius) -->
      <form method="post">
         <label for="lblHeight">Temperature in Celsius:</label>
        <input type="number" step="any" id="cel" placeholder="0 °C" pattern="[0-9]+([\.,][0-9]+)?" name="inputTempInC">
         <br><br>
         <input type="submit" value="Convert">
      </form>
      
      <?php 
        if ($temperatureInC != null) {
          echo "<h4>The temperature in Fahrenheit is: " . convertCtoF($temperatureInC) . "</h4>";
        }
      ?>
     
     <h2>Converting from Degrees Fahrenheit into Degrees Celsius</h2>
      <div class="row">
         <div class="column">
            <img src="./images/fahr1.jpeg" alt="warm" style="width:100%">
         </div>
         <div class="column">
            <img src="./images/thermom2.png" alt="cold" style="width:100%" style="max-height:20%">
         </div>
      </div>
      <p>Please enter the temperature in <i>Degrees Fahrenheit (°F)</i></p>
      <!-- form to get the base and height from the user -->
      <form method="post">
         <label for=lblBase">Temperature in Fahrenheit:</label>
        <input type="number" step="any" id="cel" placeholder="0 °C" pattern="[0-9]+([\.,][0-9]+)?" name="inputTempInF">
         <br><br>
         <input type="submit" value="Convert">
      </form>     
      <?php 
        if ($temperatureInF != null) {
          echo "<h4>The temperature in Celsius is: " . convertFtoC($temperatureInF) . "</h4>";
        }
      ?>
      <h3>Here is some information about the three major temperature scales, including Kelvin:</h3>
      <!-- Three Line List with secondary info and action -->
      <ul class="demo-list-three mdl-list">
         <li class="mdl-list__item mdl-list__item--three-line">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons mdl-list__item-avatar">person</i>
            <span style="color: purple">Celsius</span>
            <span class="mdl-list__item-text-body" style="color: blue">
            The degree Celsius is a temperature unit on the Celsius scale, which was first known as the centigrade scale. The degree Celsius can refer to a specific temperature on the Celsius scale or a unit used to express a difference or range of temperatures. The celsius scale is part of the metric system. 
            </span>
            </span>
            <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
            </span>
         </li>
         <li class="mdl-list__item mdl-list__item--three-line">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons  mdl-list__item-avatar">person</i>
            <span style="color: purple">Fahrenheit</span>
            <span class="mdl-list__item-text-body" style="color: blue">
            The Fahrenheit scale is based on a temperature scale created by physicist Daniel Gabriel Fahrenheit in 1724. The temperature is measured in degrees Fahrenheit. The fahrenheit scal is part of the imperial system. 
            </span>
            </span>
            <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
            </span>
         </li>
         <li class="mdl-list__item mdl-list__item--three-line">
            <span class="mdl-list__item-primary-content">
            <i class="material-icons  mdl-list__item-avatar">person</i>
            <span style="color: purple">Kelvin</span>
            <span class="mdl-list__item-text-body" style="color: blue">
            The kelvin, abbreviated as K, is the SI base unit of temperature, named in honor of Belfast-born engineer and physicist William Thomson, 1st Baron Kelvin, who worked at the University of Glasgow. The Kelvin scale is an absolute thermodynamic temperature scale, which means it has a null point of absolute zero. The kelvin scale is part of the International System of Units (SI).
            </span>
            </span>
            <span class="mdl-list__item-secondary-content">
            <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
            </span>
         </li>
      </ul>


     
      <!-- Wide card with share menu button -->
    <center><div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h5 class="mdl-card__title-text">Welcome</h5>
      </div>
      <div class="mdl-card__supporting-text">
        It's critical to have a variety of scales. Temperature is a relative measurement, which necessitates the use of scales based on reference points to accurately measure it.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Why are temperature scales important ? 
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">share</i>
        </button>
      </div>
    </div></center>
     <br><br>

<br>
<center><table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">Who uses it?</th>
          <th>Temperature Scale</th>
          <th>System</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Canada</td>
          <td>Celsisus</td>
          <td>Metric</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">United Sates</td>
          <td>Fahrenheit</td>
          <td>Imperial</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Scientists / Physicists</td>
          <td>Kelvin</td>
          <td>International System of Units</td>
        </tr>
      </tbody>
    </table></center>

<br><br>
     
      <footer class="mdl-mini-footer">
         <ul class="mdl-mini-footer__link-list">
            <li><a href="#">Privacy & Terms</a></li>
            <h5><i>This webpage provides an accesible and profitable tool that will swiftly calculate the temperatures given in celsius and fahrenheit, and then converting them into the other so that you may know the temperature anywhere you are.</i></h5>
         </ul>
         </div>
      </footer>
   </body>
</html>