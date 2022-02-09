<?php
class Product {

    // подключение к базе данных и таблице 'products' 
    private $conn;
    private $table_name = "products";

    // свойства объекта 
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $category_name;
    public $created;

    // конструктор для соединения с базой данных 
    public function __construct($db){
        $this->conn = $db;
    }

 // метод read() - получение товаров 
function read(){

    // выбираем все записи 
    $query = "SELECT
                c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            ORDER BY
                p.created DESC";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // выполняем запрос 
    $stmt->execute();

    return $stmt;
}


// метод create - создание товаров 
function create(){

    // запрос для вставки (создания) записей 
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                name=:name, price=:price, description=:description, category_id=:category_id, created=:created";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // очистка 
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->price));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->category_id=htmlspecialchars(strip_tags($this->category_id));
    $this->created=htmlspecialchars(strip_tags($this->created));

    // привязка значений 
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->price);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":category_id", $this->category_id);
    $stmt->bindParam(":created", $this->created);

    // выполняем запрос 
    if ($stmt->execute()) {
        return true;
    }

    return false;
}



// используется при заполнении формы обновления товара 
function readOne() {

    // запрос для чтения одной записи (товара) 
    $query = "SELECT
                c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            WHERE
                p.id = ?
            LIMIT
                0,1";

    // подготовка запроса 
    $stmt = $this->conn->prepare( $query );

    // привязываем id товара, который будет обновлен 
    $stmt->bindParam(1, $this->id);

    // выполняем запрос 
    $stmt->execute();

    // получаем извлеченную строку 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // установим значения свойств объекта 
    $this->name = $row['name'];
    $this->price = $row['price'];
    $this->description = $row['description'];
    $this->category_id = $row['category_id'];
    $this->category_name = $row['category_name'];
}

// метод update() - обновление товара 
function update(){

    // запрос для обновления записи (товара) 
    $query = "UPDATE
                " . $this->table_name . "
            SET
                name = :name,
                price = :price,
                description = :description,
                category_id = :category_id
            WHERE
                id = :id";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // очистка 
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->price));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->category_id=htmlspecialchars(strip_tags($this->category_id));
    $this->id=htmlspecialchars(strip_tags($this->id));

    // привязываем значения 
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':price', $this->price);
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':category_id', $this->category_id);
    $stmt->bindParam(':id', $this->id);

    // выполняем запрос 
    if ($stmt->execute()) {
        return true;
    }

    return false;
}


// метод delete - удаление товара 
function delete(){

    // запрос для удаления записи (товара) 
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

    // подготовка запроса 
    $stmt = $this->conn->prepare($query);

    // очистка 
    $this->id=htmlspecialchars(strip_tags($this->id));

    // привязываем id записи для удаления 
    $stmt->bindParam(1, $this->id);

    // выполняем запрос 
    if ($stmt->execute()) {
        return true;
    }

    return false;
}

}