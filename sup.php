<?php
$wasi = [
  [
    'image' => 'images/team-1.jpg',
    'title' => 'webdev',
    'description' => 'hey this is my website'
  ],
  [
    'image' => 'images/portfolio-7.jpg',
    'title' => 'webdev',
    'description' => 'lorem insutgkrfvyrl hrlebhre'
  ],
  [
    'image' => 'images/why-us.png',
    'title' => 'webdev',
    'description' => 'lorem insutgkrfvyrl hrlebhre'
  ],
  [
    'image' => 'images/skills.png',
    'title' => 'webdev',
    'description' => 'lorem insutgkrfvyrl hrlebhre'
  ]
];
for ($i = 0; $i < count($wasi); $i++) {
  $was = $wasi[$i];
?>

  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <div class="image-container">
          <img src="<?=$was['image']?>" alt="" class="img-fluid">
        </div>
        <h3 class="card-title"><?=$was['title']?></h3>
        <p class="card-text"><?=$was['description']?></p>
      </div>
    </div>
  </div>
<?php
  }
 ?>