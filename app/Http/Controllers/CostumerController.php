<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Entity\Costumer\Costumer;
use App\Domain\Entity\Costumer\Andress\Andress;
use Exception;
use App\Domain\Services\CostumerService;

class CostumerController extends Controller
{
    public function index(Request $request)
    {   
        try{
            $andress = new Andress(
                $request->street,
                $request->district,
                (int) $request->number,
                $request->zip_code
            );

            $inserConstumer = new Costumer(
                $request->name, 
                (int) $request->age, 
                $andress
            );

            $collectionCostumer = CostumerService::ageAccept([
                $inserConstumer->getCostumer()
            ]);

        }catch(Exception $e){
            return response()->json(['ERRO ' => $e->getMessage()]);
        }
        
        dd($collectionCostumer);
    }
}
