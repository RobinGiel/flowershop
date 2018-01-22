<?php

class Pages extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('Product');
        $this->winkelModel = $this->model('Winkel');

    }

    public function index(){
        if (isLoggedInAsEmployee()) {
            redirect('products');
        }elseif(isLoggedInAsClient()){
            redirect('products');
        }

        $winkels = $this->winkelModel->getWinkels();
        $data =  [
            'title' => 'Flower Power',
            'description' => 'Bloemen Bloemen en meer Bloemen...',
            'uitleg' =>'Bij Flower Power kan je gemakkelijk bloemen bestelen, de moeiste bloemen van NL',
            'winkels' => $winkels

        ];

        $this->view('pages/index', $data);

}

    public function contact(){
        $winkels = $this->winkelModel->getWinkels();
         
        $data =  [
            'title' => 'Hier zijn onze contact gegevens',
            'description' => 'Amsterdam - Den Haag - Roosendaal - Tilburg',
            'winkels' => $winkels
        ];
        $this->view('pages/contact', $data);
    }

}