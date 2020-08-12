<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/floating-labels.css">

</head>
<body>
    <form class="form-signin" method="POST" action="/">
        <div class="text-center mb-4">
          <h1 class="h3 mb-3 font-weight-normal">Mashinangiz Haqida</h1>
        </div>
      
        <div class="form-group">
            <select name="yil" class="form-control form-control-lg ">
              <option>Yil</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
            </select>
          </div>
        
          <div class="form-group">
            <select name="marka" class="form-control form-control-lg ">
              <option>Marka</option>
              <option value="Chevrolet">Chevrolet</option>
              <option value="BMW">BMW</option>
              <option value="Audi">Audi</option>
              <option value="Toyota">Toyota</option>
            </select>
          </div>

        <div class="form-label-group">
          <input name="probeg" type="text" class="form-control form-control-lg" placeholder="Probeg" required autofocus>
          <label>Probeg</label>
        </div>


        <div style="margin: 15rem;"></div>
        {{-- NEW FIELD --}} 


        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Hizmat Turini tanlang</h1>
        </div>
        
          <div class="form-group">
              <select class="form-control form-control-lg ">
                <option>Hizmatlar</option>
                <option value="Moy Almashtirish">Moy Almashtirish - 85,000</option>
                <option value="Latta almashtirish">Latta almashtirish - 50,000</option>
                <option value="Yuvish">Yuvish - 25,000</option>
                <option value="Tormozni Almashtirish">Tormozni Almashtirish - 98,000</option>
              </select>
            </div>
          <div class="form-group">
              <select class="form-control form-control-lg ">
                <option>Hizmatlar</option>
                <option value="Moy Almashtirish">Moy Almashtirish - 85,000</option>
                <option value="Latta almashtirish">Latta almashtirish - 50,000</option>
                <option value="Yuvish">Yuvish - 25,000</option>
                <option value="Tormozni Almashtirish">Tormozni Almashtirish - 98,000</option>
              </select>
            </div>
          <div class="form-group">
              <select class="form-control form-control-lg ">
                <option>Hizmatlar</option>
                <option value="Moy Almashtirish">Moy Almashtirish - 85,000</option>
                <option value="Latta almashtirish">Latta almashtirish - 50,000</option>
                <option value="Yuvish">Yuvish - 25,000</option>
                <option value="Tormozni Almashtirish">Tormozni Almashtirish - 98,000</option>
              </select>
            </div>
          



        {{-- NEW FIELD --}}



        <div style="margin: 10rem;"></div>


        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">O'zingiz Haqida Ma'lumot</h1>
        </div>


        <div class="form-label-group">
          <input name="ism" type="text"  class="form-control form-control-lg" placeholder="Ismingiz" required autofocus>
          <label>Ism Familiyangiz</label>
        </div>
        <div class="form-label-group">
          <input name="telefon" type="phone"  class="form-control form-control-lg" placeholder="Telefon Raqamingiz" required autofocus>
          <label>Telefon Raqamingiz</label>
        </div>

<div style="margin: 2rem"></div>


        <div class="form-label-group">
          <input name="kun" type="date"  class="form-control form-control-lg" placeholder="Telefon Raqamingiz" required autofocus>
          <label>Kunni Tanlang</label>
        </div>
        <div class="form-label-group">
          <input name="soat" type="time"  class="form-control form-control-lg" placeholder="Telefon Raqamingiz" required autofocus>
          <label>Soatni Tanlang</label>
        </div>
      
        <div class="checkbox mb-3">
          <label>
            <input name="roziman" type="checkbox" value="remember-me"> men barcha shartlarga roziman.
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Jo'natish</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
      </form>
</body>
</html>