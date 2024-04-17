<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css">
    <title>Dischi PHP/JSON</title>
</head>
<body>
    <div id="app">
        <!-- Modal Overlay -->
    <div v-if="isModalShowing" class="overlay">

    </div>

    <!-- Modal -->
    <div class="my-modal" v-if="isModalShowing">
        <div class="card" style="width:18rem;">
             <img :src="activeModal.poster" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">{{activeModal.title}}</h5>
               <h6 class="card-subtitle mb-2 text-muted ">{{activeModal.author}}</h6>
               <p class="card-text">{{activeModal.year}}</p>
               <button class="close-btn btn btn-danger" @click="isModalShowing = false">
                Close
                </button>
              </div>
        </div>
    </div>

        <div class="container my-4">
            <div class="row g-4">
                <div v-for="(record, index) in recordsArray" class="col-4">
                    <div class="card" @click="handleModal(index)" style="width:18rem;">
                      <img :src="record.poster" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{record.title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{record.author}}</h6>
                        <p class="card-text">{{record.year}}</p>
                    
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./assets/app.js"></script>
</body>
</html>