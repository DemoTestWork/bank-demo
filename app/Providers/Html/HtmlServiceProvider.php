<?php

namespace App\Providers\Html;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormBuilder as CollectiveFormbuilder;
use App\Providers\Html\FormBuilder;
use App\Traits\FormBuilderTrait;
use App\Traits\HtmlBuilderTrait;
use Html;
use Form;

class HtmlServiceProvider extends ServiceProvider
{
    use FormBuilderTrait;
    use HtmlBuilderTrait;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    { 
        Html::component('guest_navbar', 'components.html.guest_navbar', []);
        Html::component('particular_navbar', 'components.html.particular_navbar', []);
        Html::component('setting_menu', 'components.html.setting_menu', []);

        // Form::component('radio_label_img', 'components.form.radio_label_img' ,['idLabel', 'optionName', 'optionValue', 'dataQuestion', 'dataCost', 'imgPath', 'title']);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();
        $this->registerFormBuilder();
        $this->registerCardBuilder();

        $this->registerFormControl();
        $this->registerFormSubmit();
        $this->registerFormSelect();
        $this->registerHtmlButtonBack();
    }

    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function($app) {
            return new HtmlBuilder($app['url'], $app['view']);
        });
    }

    protected function registerFormBuilder()
    {
        $this->app->singleton('form', function ($app) {
            $form = new FormBuilder($app['html'], $app['url'], $app['view'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    protected function registerCardBuilder()
	{
		$this->app->singleton('card', function()
		{
			return new CardBuilder;
		});
    }
}