<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
 * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #ffd54f;
}

.container {
  color: #333;
  text-align: center;
}

h1 {
  font-weight: normal;
}

li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

li span {
  display: block;
  font-size: 1.5rem;
} 

</style>

<script >
  const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('May 22, 2019 03:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
  

    }, second)
</script>
<div class="container">
  <h2 id="head">Tiempo Habil:</h2>
  <ul>
    <li><span id="days"></span>Dia</li>
    <li><span id="hours"></span>Horas</li>
    <li><span id="minutes"></span>Minutos</li>
    <li><span id="seconds"></span>Segundos</li>
  </ul>
</div>