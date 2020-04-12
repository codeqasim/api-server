<div class="hero">
<section class="container">
 <h2>Discover what's near you</h2>
 <input type="text" class="search" placeholder="Find by name..."/>
</section>
</div>

<section class="categories">
<div class="container">
<h2 class="herotext">Categories</h2>

<div class="row">
<?php for ($i = 1; $i <= 18; $i++) { ?>
<div class="col-md-2 col-xs-12">
<a href="saloon">
<img src="<?php echo base_url(); ?>assets/img/category.jpg" alt="category" />
<label>Category Name</label>
</a>
</div>
<?php } ?>

</div>
</div>
</section>

<section class="featured">
<div class="container">
<h2 class="herotext">Featured</h2>
<div class="row">
<?php for ($i = 1; $i <= 20; $i++) { ?>
<div class="col-md-3 col-xs-12">
<a href="saloon">
<img src="<?php echo base_url(); ?>assets/img/category.jpg" alt="category" />
<label>The Barber Shop</label>
<address>Tipu sultan lane lahore pk</address>
</a>
</div>
<?php } ?>

</div>
</div>
</section>