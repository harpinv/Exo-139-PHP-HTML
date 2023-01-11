<hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  id="day">
           <?php
           // TODO list of day
           for($i = 1; $i < 8; $i++) {
               echo "<p>$i</p><br>";
           }
           ?>
       </select>

       <label for="month">Month</label>
       <select  id="month">
           <?php
           // TODO list of month
           for($i = 1; $i < 13; $i++) {
               echo "<p>$i</p><br>";
           }
           ?>
           ?>
       </select>

         <label for="year">Year</label>
       <select  id="year">
           <?php
           // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
           for($i = 2018; $i < 2021; $i++) {
               echo "<p>$i</p><br>";
           }
           ?>
           ?>
       </select>
     </form>
  </body>
</html>