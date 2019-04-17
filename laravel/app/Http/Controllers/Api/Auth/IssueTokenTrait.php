<?php 

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

trait IssueTokenTrait{

	public function issueToken(Request $request, $grantType, $scope = ""){

		$params = [
    		'grant_type' => $grantType,
    		'client_id' => 4,
    		'client_secret' => "mrXjxQNaRDCUhqKWSVBsO4R1EGkDKPBL2Pti2bzr",    		
    		'scope' => "*"
    	];

        if($grantType !== 'social'){
            $params['username'] = $request->username ?: $request->email;
        }

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token', 'POST');

    	return Route::dispatch($proxy);

	}

}