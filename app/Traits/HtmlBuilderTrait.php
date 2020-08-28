<?php

namespace App\Traits;

use Collective\Html\HtmlBuilder;

trait HtmlBuilderTrait
{
    private function registerHtmlButtonBack()
	{	
		HtmlBuilder::macro('button_back', function()
		{
			return '<button type="button" href="javascript:history.back()" class="btn bg-light float-left" style="font-size: 10px">{{ strtoupper(__(\'app.back\')) }}</button>';

			// return '<a href="javascript:history.back()" class="btn btn-primary">
            //     <i class="text-primary fas fa-arrow-left"></i> Retour
		    // </a>';
		});			
	}
}