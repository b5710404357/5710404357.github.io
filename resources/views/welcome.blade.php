<!DOCTYPE html>
 <html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
        <title>การคำนวณหาค่าราคาขายสินค้า</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

           </head>

           <body >

            <section class="hero is-medium is-primary is-bold">
              <div class="hero-body">
                <div class="container">
                  <h1 class="title">
                    การคำนวณหาค่าราคาขายสินค้า
                  </h1>
                </div>
              </div>
            </section>
               
            </div>
<form action="welcome" method="get">
     <div class="column is-4 is-offset-1">
                  <label class="label">ราคาต้นทุน</label>      
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input is-medium" name="capital" type="text" placeholder="">
              </div>
            </div>
          </div>
            <div class="field-label is-medium">
            <label class="label">บาท</label>
          </div>
        </div>
              
        <label class="label">เปอร์เซนต์</label>      
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input is-medium" name="per" type="text" placeholder="">
              </div>
            </div>
          </div>
            <div class="field-label is-medium">
            <label class="label">%</label>
          </div>
        </div>
               <button class="button is-primary" name="cbutton">คำนวณ</button>
            
    <label class="label">ราคาขายสินค้า</label>      
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input is-medium" name="ans" type="text" placeholder="">
              </div>
            </div>
          </div>
            <div class="field-label is-medium">
            <label class="label">บาท</label>
          </div>
        </div>
     </form>
    </div>
     </div>

    </body>
</html>
