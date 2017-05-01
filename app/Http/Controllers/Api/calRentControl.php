<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class calRentControl extends Controller
{
    public function cal($unit){
      $total = 0;
      $lstUnit = array();
      // print_r($unit);
      if($unit<=10){
        $total = $unit*10.20;
        $lstUnit = array(

            'uUnit' => $unit,
            'total' => $total

          );


      }
      if($unit>10 && $unit<=20){
          $total = (($unit-10)*16)+(10*10.20);
          $lstUnit = array(
              // 'table' => $SheaderTable
              'uUnit' => $unit,

              'total' => $total
                // 'one' => '10.20 (0-10หน่วยแรก)',
                // 'u0unit' => 10,
                // 'pUnit' => '16 ',
                // 'u1nit' => $unit-10

              // 'total' => $total
            );
        }
      if($unit>20 && $unit<=30){
          $total = (($unit-20)*19)+(10*16)+(10*10.20);
          $lstUnit = array(
              // 'table' => $SheaderTable
              // 'pUnit' => '10.20 (0-10หน่วยแรก)',
              'uUnit' => $unit,
              'total' => $total
            );

      }
      if($unit>30 && $unit<=50){
          $total = (($unit-30)*21.20)+(10*19)+(10*16)+(10*10.20);
          $lstUnit = array(

              'uUnit' => $unit,
              'total' => $total
            );
      }
      if($unit>50){
        $total = (($unit-50)*21.20)+(20*21.20)+(10*19)+(10*16)+(10*10.20);
        $lstUnit = array(
            // 'table' => $SheaderTable
            // 'pUnit' => '10.20 (0-10หน่วยแรก)',
            'uUnit' => $unit,

            'total' => $total
          );
      }



        // $data = array(
        //     // 'table' => $SheaderTable
        //     // 'unit' => $unit,
        //     'total' => $total,
        //     // 'i'=> '0'
        //     // 'lstUnit'=>$lstUnit
        //
        //
        //   );
        // error_log('Some message here.');
       
          return [
            'total' => $total
          ];
      // return view("welcome", compact('data','lstUnit'));

    }

    public function test($unit){
      return [
        'unit' => $unit
      ];
    }

    public function store(Request $request)
    {

        $unit = $request->input('unit');
        $total = 0;
        $lstUnit = array();
        // $name = "pppp";
        if($unit<=10){
          $total = $unit*10.20;
          $lstUnit = array(
              // 'table' => $SheaderTable
              // 'pUnit' => '10.20 (0-10หน่วยแรก)',
              'uUnit' => $unit,

              'total' => $total
            );
        }
        if($unit>10 && $unit<=20){
            $total = (($unit-10)*16)+(10*10.20);
            $lstUnit = array(
                // 'table' => $SheaderTable
                'uUnit' => $unit,

                'total' => $total
                  // 'one' => '10.20 (0-10หน่วยแรก)',
                  // 'u0unit' => 10,
                  // 'pUnit' => '16 ',
                  // 'u1nit' => $unit-10

                // 'total' => $total
              );
          }
        if($unit>20 && $unit<=30){
            $total = (($unit-20)*19)+(10*16)+(10*10.20);
            $lstUnit = array(
                // 'table' => $SheaderTable
                // 'pUnit' => '10.20 (0-10หน่วยแรก)',
                'uUnit' => $unit,

                'total' => $total
              );

        }
        if($unit>30 && $unit<=50){
            $total = (($unit-30)*21.20)+(10*19)+(10*16)+(10*10.20);
            $lstUnit = array(
                // 'table' => $SheaderTable
                // 'pUnit' => '10.20 (0-10หน่วยแรก)',
                'uUnit' => $unit,

                'total' => $total
              );
        }
        if($unit>50){
          $total = (($unit-50)*21.20)+(20*21.20)+(10*19)+(10*16)+(10*10.20);
          $lstUnit = array(
              // 'table' => $SheaderTable
              // 'pUnit' => '10.20 (0-10หน่วยแรก)',
              'uUnit' => $unit,

              'total' => $total
            );
        }



          $data = array(
              // 'table' => $SheaderTable
        			// 'unit' => $unit,
              'total' => $total,
              // 'i'=> '0'
              // 'lstUnit'=>$lstUnit


        		);

        return view("welcome", compact('data','lstUnit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
