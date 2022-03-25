<?php declare(strict_types = 1);

namespace App\Core\Helpers;
use App\Core\Helpers\After;

class InterfaceLoader {  

    public static function interfaceRepository()
    {       
        $repository = glob('App\Domain\\' . '*' . '\\Repository\\' . '*.php');
        $interface = glob('App\Domain\\' . '*' . '\\Interface\\' . '*.php');
        
        $repositoryName = array_map(function ($item) { return basename($item, '.php');; }, $repository);
        $interfaceName = array_map(function ($item) { return basename($item, '.php');; }, $interface);
        $model = array_map(function ($item) { return basename(str_replace('Repository', '', $item), '.php'); }, $repository);
        
        
        return array_combine($interface, $repository);
    }



}
