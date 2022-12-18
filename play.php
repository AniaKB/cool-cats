<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="script.js" defer></script>
  </head>
  <div id="app">
    <input
      :style="styles"
      type="file"
    >
    <img
      :style="styles"
      src="https://placekitten.com/250/300"
    >
    <img
      :style="styles"
      src="https://placekitten.com/260/300"
    >
    <div>
      <label :title="blurry">{{ blurry }}</label>
      <input v-model="blur" type="range" min="0" max="100">
    </div>
    <div>
      <label :title="sepias">{{ sepias }}</label>
      <input v-model="sepia" type="range" min="0" max="100">
    </div>
    <div>
      <label :title="rotates">{{ transforms }}</label>
      <input v-model="rotate" type="range" min="0" max="360">
    </div>
      {{ styles }}
  </div>
</html>