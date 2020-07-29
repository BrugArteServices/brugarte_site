<?php
use App\Page;
use App\Models\Index;
use App\Models\Contact;

$app->get('/', function(){
    $page = new Page();
    $page->setTpl("index", array(
        "sdata"=>Index::siteData(),
        "menus"=>Index::listMenu(),
        "services"=>Index::listServices(),
        "timeline"=>Index::listTimeline(),
        "portfolios"=>Index::listPorts(),
        "clieparts"=>Index::listClients()
    )); 
});

$app->post('/sendform', function(){
    $form = new Contact();
    $form->setData($_POST);
    if($form->checksend()){
        echo "OK";
        $form->save();
    } else {
        echo "Aguarde uma hora antes de enviar novamente.";
    }
});