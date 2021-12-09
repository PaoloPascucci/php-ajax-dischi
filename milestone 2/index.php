<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax Dischi</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <img src="./img/Spotify_logo_without_text.svg" alt="logo spotify">
    </div>
    <div id="app">
        <div class="main text-center">

            <div class="row_ p_3">
                <div class="L card_ text-center" v-for="disc in discs">
                    <img :src="disc.poster" alt="">
                    <p class="title">{{disc.title}}</p>
                    <p class="author">{{disc.author}}</p>
                    <p class="year">{{disc.year}}</p>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js'
        integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>