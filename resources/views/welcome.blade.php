<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-2">
          <div class="card" style="width: 100%;">
              <div class="card-body">
                <div style="display: flex; justify-content: space-between">
                  <h4>Start Time 3:00 PM</h4>
                  <h4>End Time 4:30 PM</h4>
                </div>
              </div>
          </div>          
        </div>
        <div class="col-lg-3 pt-2">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis magni quod eligendi qui sunt eaque fuga dolorum explicabo voluptatum excepturi? Ea amet nisi minima tempora doloribus itaque architecto totam. Maxime accusantium eos dolor tenetur exercitationem ab sapiente quas labore repellat dicta. Ullam eos laboriosam et optio magni dolorum pariatur! Ratione.
                </p>
              </div>
          </div>
        </div>
        <div class="col-lg-9">

          <div class="row">

            @foreach ($posts as $post)     

              <div class="col-lg-4 mb-3">              
                  <div class="card" style="width: 18rem;">
                  <img src="{{ $post->image != null ? asset($post->image) : 'https://static.thenounproject.com/png/2635332-200.png' }}" class="card-img-top" alt="{{ $post->title }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <div style="font-size: 14px">{{ optional($post->user)->name }}</div>
                  </div>
                </div>
              </div>
              
            @endforeach

          <div class="col-lg-12 pt-2">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                  <div style="">
                    <a href="https://github.com/jugol-kumar/internship-test" target="_blank">Click to see Repository</a>
                  </div>
                </div>
            </div>          
          </div>

          </div>

        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>