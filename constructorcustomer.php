<?php


class constructorcustomer {

public $id,$nama,$alamat,$negara;
public function __construct($id,$nama,$alamat,$negara) {
$this->id = $id;
$this->nama = $nama;
$this->alamat = $alamat;
$this->negara = $negara;
}
}
$customer1 = new ConstructorCustomer(1, 'Maria' , 'Berlin' , 'Jerman');
$customer2 = new ConstructorCustomer(2, 'Ana' , 'Mexico' , 'Mexico');
$customer3 = new ConstructorCustomer(3, 'Antonio' , 'Mexico' , 'Mexico');
$customer4 = new ConstructorCustomer(4, 'Thomas' , 'London' , 'UK');
echo 'ID: ' . $customer1->id = 1 . '<br>';
echo 'Nama: ' . $customer1->nama . '<br>';
echo 'Alamat: ' . $customer1->alamat . '<br>';
echo 'Negara: ' . $customer1->negara . '<hr>';
echo 'ID: ' . $customer2->id . '<br>';
echo 'Nama: ' . $customer2->nama . '<br>';
echo 'Alamat: ' . $customer2->alamat . '<br>';
echo 'Negara: ' . $customer2->negara . '<hr>';
echo 'ID: ' . $customer3->id . '<br>';
echo 'Nama: ' . $customer3->nama . '<br>';
echo 'Alamat: ' . $customer3->alamat . '<br>';
echo 'Negara: ' . $customer3->negara . '<hr>';
echo 'ID: ' . $customer4->id . '<br>';
echo 'Nama: ' . $customer4->nama . '<br>';
echo 'Alamat: ' . $customer4->alamat . '<br>';
echo 'Negara: ' . $customer4->negara . '<hr>';

