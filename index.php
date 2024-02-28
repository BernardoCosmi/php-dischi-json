<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Includo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <!-- TITOLO -->
        <h1 class="text-center">
            Lista dischi
        </h1>

        <!-- Dischi -->
        <div>
            <div v-for="album in albums">
                <div>
                    <!-- Card img -->
                    <img :src="album.poster" alt="album poster">

                    <!-- Card body -->
                    <div>
                        <h5 class="card-title">{{ album.title }}</h5>
                        <p class="card-text">{{ album.author }}</p>
                        <p class="card-text">{{ album.year }}</p>
                        <p class="card-text">{{ album.genre }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Includo Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3"></script>
    <!-- Includo Axios.js -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Includo JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>