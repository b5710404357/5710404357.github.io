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
        <title>คำนวณค่าน้ำ</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

           </head>

           <body >

             <section class="section" >
          <!-- <section class="hero is-info is-large"> -->
             <div class="hero-body">


               <!-- <div class="container has-text-centered"> -->
               <!-- <section class="hero is-primary is-medium is-success"> -->
                 <h1 class="title">
                   คำนวณค่าประปา
                 </h1>

                 <div class="column is-11 is-offset-1">

                <div class="field">

                  <!-- <section class="hero is-primary is-medium is-success"> -->
                      <label class="label">  <br>ประปาที่ใช้บริการ : &nbsp; </label>
                      <span class="select is-medium">
                        <select>

                          <option>ทั่วไป(ยกเว้น พื้นที่พิเศษ)</option>
                        </select>

                      </span>
                    <!-- <label class="label">  <br>ปริมาณการใช้น้ำ : &nbsp; </label> -->
                      <label class="label">  <br>ปริมาณการใช้น้ำ : &nbsp; </label>
                      <form action="calculate" method="post" >
                        <!-- <label class="label">  <br>ปริมาณการใช้น้ำ : &nbsp; </label> -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="field" style="width: 500px;">
                         <p class="control  has-icons-right">
                          <input name = "unit" class="input is-info" type="text" placeholder="หน่วย" value="" >

                          <span class="icon is-small is-right">
                            <i class="fa fa-check"></i>
                          </span>
                        </div>
                        <button class="button is-primary" type = "submit">Button</button>
                    </form>
                        <!-- </section> -->
               </div>

            </div>
             </div>
              <div class="title">ค่าใช้จ่ายรวม 

                  </div>
            <div class="content">
                  <table class="table" style="width: 1000px; " align="center">
                    <thead>
                      <tr>
                        <th width="50%">ปริมาณน้ำที่ใช้อ่านต่อที่ (ลบ.ม)</th>
                        <th width="50%">เป็นเงินทั้งสิ้น (บาท)</th>

                  <!-- {{{ $unit or '' }}} -->

                  </tr>
                    </thead>
                    <tbody>
                      <!-- <tr> -->
                        @isset($lstUnit)
                          <tr>
                              @foreach($lstUnit as $unit)
                                  <!-- <div class='club'> -->
                                  <!-- <td>{{$unit}}  </td> -->
                                  <td>{{ $unit }}</td><br>
                                  <!-- <td>{{ $unit }}</td> -->
                              <!-- </tr> -->
                              @endforeach

                        @endisset


                          <!-- </tr> -->
                        </tbody>
                      </table>
            </div>
    </section>

    </body>
    .body{
         background-image: url(water-wallpaper.jpg) ;
         background-position: center center;
         background-repeat:  no-repeat;
         background-attachment: fixed;
         background-size:  cover;
                                         background-color: #999;
    }
</html>
