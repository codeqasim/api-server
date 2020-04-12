<div class="hero">
<section>
 <h2>Discover what's near you</h2>
 <input type="text" class="search" placeholder="Find by name..."/>
</section>
</div>

<section class="categories">

<?php for ($i = 1; $i <= 14; $i++) { ?>
<a href="saloon">
<img src="<?php echo base_url(); ?>assets/img/category.jpg" alt="category" />
<label>Category Name</label>
</a>

<?php } ?>

</section>