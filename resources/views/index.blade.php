<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Хлебушко</title>
    <!-- Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
      <div class="container">
        <div class="container py-3">
          <div class="d-flex flex-col-lgumn col-lg-sm-12 flex-md-row align-items-center pb-3 mb-4">
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                  <a class="nav-links ms-2  me-2 py-1 " href="#">головна</a>
                  <a class="nav-links ms-2 me-2 py-1 " href="#">Про нас</a>
                  <a class="nav-links ms-2 me-2 py-1 " href="#">продукція</a>
                  <a class="nav-links ms-2 me-2 py-1 " href="#">контакти</a>
                  <a class="nav-links ms-2 me-2 py-1 " href="#">Адреси магазинів</a>
                </nav>
          </div>
        </div>


        <div class="row">
           <div class=" col-lg-4  hleb-logoBlock">
           </div>
           <div class="col-lg row">
             <div class="col-lg-4 top">
               <div class="one-block">
                 <p>Вас вітає</p>
                 <b>Корисна пекарня</b>
               </div>
               <div class="linkBLock">
                 <p>Ми завжди з вами:</p>
                  <a href="#"><img class="linkPicture"src="/image/Facebook.png" alt=""></a>
                  <a href="#"><img class="linkPicture"src="/image/WhatsApp.png" alt=""></a>
                  <a href="#"><img class="linkPicture"src="/image/Instagram.png" alt=""></a>
               </div>
             </div>
             <div class="col-lg hlebBack">
                <div class="lineHLeb">
                  <img src="/image/lineHleb.png" alt="">
                </div>
             </div>
           </div>
        </div>
        <div class="row blockTwo">
          <div class=" col-lg-4 blockUs">
          <p class="UsUp-title" >О нас</p>
          <ul>
            <li><b class="Us-bold">Корисна пекарня</b></li>
            <li>десерт</li>
            <li>торти</li>
            <li>смачна кава</li>
            <li>хліб на заквасці</li>
          </ul>
          </div>
          <div class=" col-lg-7 hlebUs ">
            <b>Lorem ipsum dolor sit amet</b>
            <p>Lorem ipsum dolor sit amet asdsad Lorem ipsum dolor sit amet asdsad Lorem ipsum dolor sit amet asdsad Lorem ipsum dolor sit amet asdsad</p>
          </div>
        </div>
      </div>
      <div class="retail">
        <div class="container">
          <div class="row retails">
            <div class="col-lg-6">
              <img src="/image/girlHleb.png" alt="">
            </div>
            <div class="col-lg-6">
              <div class="retailText">
                <div class="textLineTwo">
                Тільки для тебе
                </div>
                <p class="subtext">Ще з давніх-давен наші бабусі та прабабусі пекли хліб на заквасці, і секрет випічки цього хліба з гордістю зберігався в кожній родині.</p>
              </div>
              <button class="buttonMore" type="button" name="button"><a href="#">Детальніше</a></button>
            </div>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xxl col-lg-4">
            <div class="retailText">
              <div class="textLineTwo titleTextMan">
                Давайте дружити
              </div>
              <p class="subtext-two">Створюючи свою унікальну колекцію виробів, ми відібрали найкращі та найсмачніші рецепти з усіх куточків світу, поєднавши їх з передовими технологіями..</p>
            </div>
            <button class="buttonMore" type="button" name="button"><a href="#">Детальніше</a></button>
          </div>
          <div class="col-xxl col-lg-5">
            <img class="menHleb" src="/image/menHleb.png" alt="">
          </div>
        </div>
      </div>

      <div class="retail num2">
        <div class="container">
          <div class="row retails">
            <div class=" contactForm-right col-lg-5 col-sm-12">
                <form id='contactForms' method="POST" action="{{route('feedback')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Ваше ім'я:</label>
                    <input id='name' type="text" name="name" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="email">Ваша пошта:</label>
                    <input id='email' type="text" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="msg"></label>
                    <textarea id='msg' name="msg" class="form-control"></textarea>
                </div>
                <button type="submit" value='Submit' class="feedback btn btn-primary" id="submit" >Відправити</button>
                </form>
                </div>


                <div class=" col-lg-4 blockUs blockUsTwo ">
                <p class="UsUp-title" >Напиши нам</p>
                <ul>
                  <li>вул. Михайла Драгоманова 2А,</li>
                  <li>Київ, 02000,</li>
                  <li>Україна</li>
                </ul>
                <img src="/image/lineVert.png" alt="">
                </div>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="d-flex justify-content-between mt-4">
          <nav class="d-inline-flex mt-2 mt-md-0">
            <a class="nav-links ms-2  me-2 py-1 " href="#">головна</a>
            <a class="nav-links ms-2 me-2 py-1 " href="#">Про нас</a>
            <a class="nav-links ms-2 me-2 py-1 " href="#">продукція</a>
            <a class="nav-links ms-2 me-2 py-1 " href="#">контакти</a>
            <a class="nav-links ms-2 me-2 py-1 " href="#">Адреси магазинів</a>
          </nav>
              <div class="d-flex navFooter">
                <p>Мы ещё здесь:</p>
                <a href="#"><img src="/image/facabook.png" alt=""></a>
                <a href="#"><img src="/image/instagram.png" alt=""></a>

              </div>
        </div>
        <div class="copirate">
          Все права захищены © 2020
        </div>
      </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
