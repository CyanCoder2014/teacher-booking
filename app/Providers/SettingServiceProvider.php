<?php

namespace App\Providers;

use App\Utility;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('utility', function ($expression) {

            $expression = explode(',',$expression);
            $out='';
            if(count($expression)<2)
                $out = 'not correct input';
            else{
                $expression[0] = trim($expression[0],'\'|"');
                $expression[1] = trim($expression[1],'\'|"');
                $utlity = Utility::where('type',$expression[0])->first();
                if ($utlity)
                    $out =  $utlity->data[$expression[1]]?? $expression[1];
                else
                    $out =  $expression[0];
            }
            $out =trim($out,'\'|"');
//            return dd($utlity);
            return "<?php echo '".$out."'; ?>";
        });
    }
}
