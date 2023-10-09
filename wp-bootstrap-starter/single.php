<?php
   get_header();
   ?>
<p> blogpost > proerty detail </p>
<div class="p-3 " style="background-color:white">
   <?php
      while (have_posts()) :
        the_post();
      ?>
   <div class="row p-0">
      <div class="col">
         <?php if (get_field('header_image')) : ?>
         <img src="<?php echo get_field('header_image'); ?>" alt="Header Image" class="h-100 object-fit-cover">
         <?php endif; ?>
      </div>
      <div class="col  " >
         
         <p> <?php echo get_the_content();?></p>
         <p>Price: <?php echo get_field('price'); ?></p>
         <div class="row w-100 " >
            <div class="col">
               <div class="card" style="background-color: #7D7C7C; border-radius: 0;">
                  <div class="card-body px-2 py-0">
                     <h5 class="card-title ">
                        <i class="fas  fa-check-square text-white mr-3"></i> Fact sheet
                     </h5>
                     <p class="card-text text-center ml-5"> <?php echo  get_field('facts'); ?> </p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card" style="background-color: #ADD8E6; border-radius: 0;">
                  <div class="card-body px-2 py-0">
                     <h5 class="card-title card-title ">
                        <i class="fas fa-money-bill mr-3"></i> Payment plan
                     </h5>
                     <p class="card-text "> <?php echo  get_field('payment_plan'); ?> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
      endwhile;
      ?>
</div>
<?php
   get_footer();
   ?>