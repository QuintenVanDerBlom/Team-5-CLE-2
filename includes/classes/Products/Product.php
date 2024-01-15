<?php

namespace includes\classes\Products;
use includes\classes\Categories\CategoryProduct;

class Product
{
    public int $id;
    public string $name;

    public static function getAll(\PDO $db): array {
        return $db->query( 'SELECT products.id, products.name, categories.id as category_id, categories.name as category_name 
                    FROM products
                    JOIN categoryproduct ON products.id = categoryproduct.product_id
                    JOIN categories ON categories.id = categoryproduct.category_id')->fetchAll(\PDO::FETCH_CLASS, '\includes\classes\Products\Product');
    }

    public static function getById(int $id, \PDO $db): Product {
        $statement = $db->prepare('SELECT products.id, products.name, categories.id as category_id, categories.name as category_name 
                                        FROM products
                                        JOIN categoryproduct ON products.id = categoryproduct.product_id
                                        JOIN categories ON categories.id = categoryproduct.category_id
                                        WHERE products.id = :id');
        $statement->execute([':id' => $id]);

        if (($product = $statement->fetchObject('\includes\classes\Products\Product')) === false) {
            throw new \Exception('Product ID is not available in the database');
        }

        return $product;
    }

    public static function create(Product|CategoryProduct $product, \PDO $db): bool {
        $query = 'INSERT INTO products (name)
                  VALUES (:name)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':name' => $product->name,
        ]);
    }

    public function update(\PDO $db): bool {
        $query = 'UPDATE products
                  SET name = :name
                  WHERE id = :id';
        $statement = $db->prepare($query);

        return $statement->execute([
            ':id' => $this->id,
            ':name' => $this->name,
        ]);
    }

    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM products
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }
}