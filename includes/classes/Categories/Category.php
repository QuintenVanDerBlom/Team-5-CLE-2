<?php

namespace includes\classes\Categories;

class Category
{
    public int $id;
    public int $type_number;
    public string $name;

    /**
     * Omdat er niet meer dan 3 categorien van producten zijn, maken wij hier geen CRUD mogelijkheden voor aan.
     * Wij roepen alleen de categorien aan voor specifieke producten.
     **/
    public static function getAll(\PDO $db): array
    {
        return $db->query('SELECT * 
                                FROM categories;')->fetchAll(\PDO::FETCH_CLASS, '\includes\classes\Categories\Category');
    }
}