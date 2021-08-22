
<?php

require('backends/connection-pdo.php');

$sql = 'SELECT * FROM categories';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>


<section class="fcategories">

	<div class="container">

		<div class="section white center">
			<h3 class="header"  style="font-family: 'Pacifico', cursive;">Categories</h3>
		</div>

<?php if (count($arr_all) == 0) {
	echo '<div class="section gray center" style="border: 1px solid black; border-radius: 5px;">
			<p class="header">Sorry No Categories to Display!</p>
		</div>';
} else {  ?>


<?php for ($i=1; $i <= count($arr_all); ) { ?>
		
		<div class="row">
			
			<?php for ($j=1; $j <= 1; $j++) { ?>


				<?php if ($i+$j-2 == count($arr_all)) {
					break;
				}  ?>

				
			<div class="col s12 m12 l4" style="padding: 50px 5px;">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="images/momo.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Chinese<i class="material-icons right">more_vert</i></span>
				      <div class="card-content">
			          <p>Wanna check out the Mouth-Watering Foods of this category ? Explore Now!</p>
			        </div>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Chinese<i class="material-icons right">close</i></span>
				      <p>Chinese cuisine is an important part of Chinese culture, which includes cuisine originating from the diverse regions of China.</p>
				    </div>
				  </div>
			</div>
			<div class="col s12 m12 l4" style="padding: 50px 5px;">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="images/north7.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">North Indian<i class="material-icons right">more_vert</i></span>
				      <div class="card-content">
			          <p>Wanna check out the Mouth-Watering Foods of this category ? Explore Now!</p>
			        </div>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">North Indian<i class="material-icons right">close</i></span>
				      <p>Indian cuisine encompasses a wide variety of regional cuisine native to India. Given the range of diversity in soil type, climate and occupations, these cuisines vary significantly from each other and use locally available chocolates, herbs, vegetables and fruits. The dishes are then served according to taste in either mild, medium or hot. Indian food is also heavily influenced by religious and cultural choices, like Hinduism and traditions.</p>
				    </div>
				  </div>
			</div>
			<div class="col s12 m12 l4" style="padding: 50px 5px;">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="images/south1.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">South Indian<i class="material-icons right">more_vert</i></span>
				      <div class="card-content">
			          <p>Wanna check out the Mouth-Watering Foods of this category ? Explore Now!</p>
			        </div>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">South Indian<i class="material-icons right">close</i></span>
				      <p>South Indian cuisine includes the cuisines of the five southern states of India Andhra Pradesh, Karnataka, Kerala, Tamil Nadu and Telangana.</p>
				    </div>
				  </div>
			</div>
		</div>
		<div class="row center" style="margin-bottom: 50px;">

			<?php } ?>

			<?php $i = $i + 3; ?>


		</div>

		<?php 
				}
			}
			 ?>




	</div>
	
</section>