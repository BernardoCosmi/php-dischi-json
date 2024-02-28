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
        <h1 class="text-center m-5 fw-bolder fs-1 text-uppercase">
            Lista dischi
        </h1>

        <!-- Dischi -->
        <div class="row row-cols-md-3 g-4" data-bs-theme="dark">
            <div v-for="album in albums" class=" mb-4 d-flex justify-content-center">
                <div class="card col-7">
                    <!-- Card img -->
                    <img :src="album.poster" class="card-img-top px-5 pt-5 pb-1" alt="album poster">

                    <!-- Card body -->
                    <div class="card-body text-center px-5 py-4 ">
                        <h4 class="card-title fw-bold">{{ album.title }}</h4>
                        <p class="card-text fw-bold">{{ album.author }}</p>
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