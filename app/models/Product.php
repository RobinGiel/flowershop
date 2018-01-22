<?php
    class Product{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getProducts(){
            $this->db->query('SELECT *,
                                products.id as productId,
                                products.name as productName,
                                products.img as productImg,
                                users.name as userName,
                                products.not_active as productdeleted
                                FROM products
                                INNER JOIN users
                                ON products.user_id = users.id
                                WHERE products.not_active IS NULL
                                ORDER BY products.id DESC
                              ');

            $results = $this->db->resultSet();

            return $results;
        }

        public function addProduct($data){

        $this->db->query('INSERT INTO products (name, price, img, user_id ) VALUES(:name, :price, :img, :user_id)');

            // Bind values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':img', $data['img']);
            $this->db->bind(':user_id', $data['user_id']);

            // Exectute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }

        public function updateProduct($data){
        $this->db->query('UPDATE products SET
                            name = :name,
                            price = :price
                            WHERE id = :id');
            // Bind values
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':price', $data['price']);

            // Exectute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }

        public function getProductById($id){
            $this->db->query('SELECT * FROM products WHERE id = :id');
            $this->db->bind(':id', $id);

            $row = $this->db->single();

            return $row;
        }

        public function deleteProduct($id){
        $this->db->query('UPDATE products SET not_active = :not_active WHERE id = :id');
            // Bind values
            $this->db->bind(':not_active', 1);
            $this->db->bind(':id', $id);

            // Exectute
            if($this->db->execute()){
                return true;
            } else{
                return false;
            }
        }
    }