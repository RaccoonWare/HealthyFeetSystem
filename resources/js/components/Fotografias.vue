<template>
<div class="container mt-3">
  	<div id="myCarousel" class="carousel slide">

		<ul class="carousel-indicators">
			<li class="item1 active"></li>
			<li class="item2"></li>
			<li class="item3"></li>
		</ul>

  		<div class="carousel-inner">
    		<div class="carousel-item active">
				<img src="img/la.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
    		<div class="carousel-item">
				<img src="img/chicago.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Chicagi</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
    		<div class="carousel-item">
				<img src="img/ny.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
  		</div>

		<a class="carousel-control-prev" href="#myCarousel">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>
</div>

</template>
<script>
    export default {
        mounted() {
           // this.listarPaciente();
        }
    }
</script>