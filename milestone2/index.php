<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="style/style.css">
  <title>Document</title>
</head>

<body>
  <div id="root">
    <div class="filter-container">
      <select name="filter" id="filter" @change="changeFilterKey">
        <option v-for="genre in genres" :value="genre.toLowerCase()">{{ genre }}</option>
      </select>
    </div>

    <div class="card-container" v-for="element in albums">
      <div class="ms_card-container">
        <div class="ms_card">
          <div class="cover">
            <img :src="element.poster" :alt="element.author">
          </div>
          <div class="info">
            <h3>{{ element.title }}</h3>
            <p>{{ element.author }}</p>
            <p>{{ element.year }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/script.js" type="text/javascript"></script>
</body>

</html>