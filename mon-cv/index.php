<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/monstyle.css">
</head>
<body>

    <!-- Ajoutez les données ici -->
    <?php get_header(); ?>
    <h1>Curriculum Vitae</h1>
    <img width="100" src="/Users/hassanfaye/Downloads/IMG_1521.jpg"
    
    
    <h2>Informations Personnelles</h2>
    <ul>
      <li>Nom : Faye</li>
      <li>Prénom : Hassan</li>
      <li>Date de Naissance : 1 février 1999</li>
      <li>Adresse : Rue Général Capiaumont, 57, 1040 Etterbeek</li>
      <li>GSM :<a href="tel:0032494076652">+32 494 07 66 52</a></li>
      <li>Email :<a href="mailto :hassan.faye@isfsc.be"> hassan.faye@isfsc.be</a></li>
    </ul>

<?php
    $skillslist = new WP_Query([
        'post_type' => 'skills',
    ]);

?>
    <?php if ($skillslist->have_posts()): ?>
<h2>Formations</h2>
<ul>
<?php while($skillslist->have_posts()): $skillslist->the_post(); ?>
<li><?php the_title(); ?></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
Compétences
<li>Développement Front-End (HTML, CSS)</li>


<?php $langueslist = new WP_Query([
    'post_type' => 'langues'
]);

?>
    <?php if ($langueslist->have_posts()): ?>
<h3>Langues</h3>
<ul>
<?php while($langueslist->have_posts()): $langueslist->the_post(); ?>
<li><?php the_title(); ?></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>


<li>Sport : Pratique du mini foot en division 2 </li>
<li>Sport : Entraineur en U8 de l'union saint-gilloise de mini foot</li>

<?php get_footer(); ?>