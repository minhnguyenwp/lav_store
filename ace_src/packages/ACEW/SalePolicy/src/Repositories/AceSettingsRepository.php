<?php

namespace ACEW\SalePolicy\Repositories;

use Storage;
use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Arr;

class AceSettingsRepository extends Repository
{
  

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Container\Container  $app
     * @return void
     */
    public function __construct(
        App $app
    )
    {
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'ACEW\SalePolicy\Contracts\AceSettings';
    }

    /**
     * @param  array  $data
     * @return bool
     */
    public function updateItem(array $data,  $id)
    {
        //Event::dispatch('core.settings.slider.update.before', $id);      

        $dir = 'ace_settings/salepolicy';

        $uploaded = $image = false;

        if (isset($data['image'])) {
            $image = $first = Arr::first($data['image'], function ($value, $key) {
                return $value ? $value : false;
            });
        }

        if ($image != false) {
            $uploaded = $image->store($dir);

            unset($data['image'], $data['_token']);
        }


        $tempJson = '{'.
            '"title":"'. $data['title'] .'",' .
            '"desc":"'. $data['desc'] .'",' .
            '"icon_path": ""' .
        '}';

        if ($uploaded) {
            $settingItem = $this->find($id);
            $jsonTemp    = json_decode($settingItem->json_content);
            // echo $jsonTemp->icon_path;
            // exit;
            if ($jsonTemp->icon_path) {
                Storage::delete( $jsonTemp->icon_path);
            }
            // ... Not Done yet
            //$data['path'] = $uploaded;
            $tempJson = '{'.
                '"title":"'. $data['title'] .'",' .
                '"desc":"'. $data['desc'] .'",' .
                '"icon_path":"' . $uploaded .'"}';
        } else {
            unset($data['image']);
        }

        //print_r($tempJson);
        //echo '<br />';
        $sendData = [
            'type'=> $data['type'],
            'json_content'=> $tempJson
        ];
        // print_r($sendData);

        // exit;

        $settingItem = $this->update($sendData, $id);

        //Event::dispatch('core.settings.slider.update.after', $slider);

        return true;
    }

}