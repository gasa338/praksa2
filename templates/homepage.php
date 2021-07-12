<?php
/* Template Name: Home Page */
?>


<!--banner-->


<?php get_header( 'custom' ); ?>

<?php
$header = carbon_get_the_post_meta( 'crb_header_home' );
/*
echo wp_get_attachment_image_src($header[0]['crb_header_image'], 'full')[0];
echo "<pre>";
print_r(wp_get_attachment_image_src($header[0]['crb_header_image'], 'full'));
echo "</pre>";
*/
?>
<div class="banner"style="background-image: url(<?php echo wp_get_attachment_image_src($header[0]['crb_header_image'], 'full')[0] ?>);">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-lg-6 banner-text">
            <div class="heading trigger">

               <h1><?php echo $header[0]['crb_head_1']; ?></h1>
               <h1><?php echo $header[0]['crb_head_2']; ?></h1>
            </div>
            <div class="row trigger">
               <div class="col-md-10">
                  <p><?php echo $header[0]['crb_header_description']; ?></p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="scroll-wrap">
               <a href="#onama">
                  <span class="scroll">
                  </span>
                  <span class="scroll-text">Istraži</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>

<!--o nama-->
<?php
$o_nama = carbon_get_the_post_meta( 'crb_onama' );
?>
<section class="o-nama" id="onama">
   <div class="container">
      <div class="row">
         <div class="col-md-6 trigger">
            <img src="<?php echo wp_get_attachment_image_src($o_nama[0]['crb_onama_image'], 'default')[0] ?>">
         </div>
         <div class="col-md-6 col-lg-5 offset-lg-1 d-flex align-items-center">
            <div class="text-box trigger">
               <h2>O nama</h2>
               <p><?php echo $o_nama[0]['crb_onama_text_1'] ?></p>
               <p><?php echo $o_nama[0]['crb_onama_text_2'] ?></p>
            </div>

         </div>
      </div>
   </div>
</section>

<!--nasi partneri-->

<?php $partneri = carbon_get_the_post_meta( 'crb_partneri' ); ?>
<section class="nasi-partneri">
   <div class="container">
      <div class="row">

         <div class="col-lg-5  d-flex align-items-center trigger">
            <div class="text-box ">
               <h2>Naši partneri</h2>
               <p><?php echo $partneri[0]['crb_onama_text'] ?></p>

            </div>

         </div>

         <div class="col-lg-6 offset-lg-1">
            <div class="row partners-list trigger-box">
            <?php foreach ($partneri[0]['crb_partner_div'] as $key => $value) { ?>
               <div class="col-6 col-md-4 box-spacing order-1 order-md-1 box-fade">
                  <a href="<?php $value['crb_partner_link'] ?>">
                     <img src="<?php echo wp_get_attachment_image_src($value['crb_partner_logo'], 'default')[0] ?>">
                  </a>
               </div>
            <?php } ?>

            </div>
         </div>
      </div>
   </div>
</section>

<!--nasi sertifikati-->

<?php
$sertifkati = carbon_get_the_post_meta( 'crb_sertifikati' );
?>
<section class="nasi-sertifikati">
   <div class="container">
      <div class="row ">

         <div class="col-lg-6 d-flex align-items-center">
            <div class="text-box trigger">
               <h2><?php echo $sertifkati[0]['crb_naslov_sertifikati'] ?></h2>
               <div class="row">
                  <div class="col-md-11">
                     <p><?php echo $sertifkati[0]['crb_sertifikati_opis'] ?></p>
                  </div>
               </div>


            </div>

         </div>
         <div class="col-lg-6">
            <div class="row d-none d-md-flex trigger">
            <?php foreach ($sertifkati[0]['crb_sertifikat_pdf'] as $key => $value) { ?>
               <div class="col-md-6 text-center text-md-center text-lg-left">
                  <a
                     href="<?php echo wp_get_attachment_url($value['crb_sertifikat_pdf']) ?>">
                     <img class="certificate" src="<?php echo wp_get_attachment_image_src($value['crb_sertifikat_slika'], 'default')[0] ?>">
                  </a>
                  <p class="image-description"><?php echo $value['crb_sertifikat_name'] ?></p>

               </div>
            <?php } ?>
            </div>
         </div>
      </div>
      <div class="row d-block d-md-none">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme sertifikati-carousel">
            <?php foreach ($sertifkati[0]['crb_sertifikat_pdf'] as $key => $value) { ?>
               <div class="item text-center">
                  <a
                     href="<?php echo wp_get_attachment_url($value['crb_sertifikat_pdf']) ?>">
                     <img src="<?php echo wp_get_attachment_image_src($value['crb_sertifikat_slika'])[0] ?>">
                  </a>
                  <p class="image-description"><?php echo $value['crb_sertifikat_name'] ?></p>
               </div>
            <?php } ?>
            </div>
         </div>

      </div>

   </div>
</section>

<!--tehnicka podrska-->
<?php $podrska = carbon_get_the_post_meta( 'crb_podrska' ); ?>
<section class="tehnicka-podrska">
   <div class="container-fluid pl-0">
      <div class="row ">
         <div class="col-md-5 pr-0 trigger">
            <img src="<?php echo wp_get_attachment_image_src($podrska[0]['crb_podrska_slika'], 'full')[0]; ?>">
         </div>
         <div class="col-md-7 d-flex align-items-center pl-0 pr-0 ">
            <div class="right-image" style="background: url(<?php echo wp_get_attachment_image_src($podrska[0]['crb_podrska_bgslika'], 'full')[0]; ?>); width: 100%; height: 100%; display: flex; align-items: center;">

               <div class="container">
                  <div class="row">
                     <div class="col-md-10">
                        <div class="text-box">

                           <h2 class="trigger"><?php echo $podrska[0]['crb_podrska_naslov'] ?></h2>
                           <?php foreach ($podrska[0]['crb_podrska_texts'] as $key => $value) { ?>
                              <p class="trigger"><?php echo $value['crb_podrska_opis'] ?></p>
                           <?php } ?>
                        </div>
                     </div>
                  </div>

               </div>



            </div>

         </div>
      </div>
   </div>

</section>

<!--nase reference-->
<?php
$reference = carbon_get_the_post_meta( 'crb_reference' );
?>

<section class="nase-reference">
   <div class="container">
      <div class="row">
         <div class="text-center w-100 trigger">
            <h2><?php $reference[0]['crb_reference_naslov'] ?></h2>
            <p><?php $reference[0]['crb_reference_opis'] ?></p>
         </div>
      </div>
      <div class="row trigger-box">
      <?php foreach ($reference[0]['crb_reference_logos'] as $key => $value) { ?>
         <div class="col-6 col-md-3 col-lg-2 box-fade">
            <img src="<?php echo wp_get_attachment_image_src($value['crb_reference_logo'], 'full')[0]; ?>">
         </div>
      <?php } ?>
      </div>

      <div class="text-center trigger">
         <a href="nase-reference.php">
            <button class="btn">Pogledaj više</button>
         </a>
      </div>

   </div>


</section>

<!--cta section-->

<?php get_template_part( 'template-parts/content', 'cta_section' ); ?>

<?php get_footer( 'custom' ); ?>