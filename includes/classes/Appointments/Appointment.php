<?php

namespace includes\classes\Appointments;

date_default_timezone_set('CET');
class Appointment
{
    public int $id;
    private int $user_id;
    private string $user_name;
    public string $date;
    public int $category_id;

    public static function getAll(\PDO $db): array {
        return $db->query( 'SELECT * 
                                FROM appointments')->fetchAll(\PDO::FETCH_CLASS, '\includes\classes\Appointments\Appointment');
    }

    public static function getById(int $id, \PDO $db): Appointment {
        $statement = $db->prepare('SELECT * 
                                        FROM appointments
                                        WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($appointment = $statement->fetchObject('\includes\classes\Products\Product')) === false) {
            throw new \Exception('Appointment does not exist in the database');
        }

        return $appointment;
    }

    public static function create(Appointment $appointment, \PDO $db): bool {
        // TO DO: Check of iemand ingelogged is, zo niet stuur ze naar inlog/registratie
        $query = 'INSERT INTO appointments (user_id, user_name, date, category_id)
                  VALUES (:user_id, :user_name, :date, :category_id)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':user_id' => $appointment->user_id,
            ':user_name' => $appointment->user_name,
            ':date' => $appointment->date,
            ':category_id' => $appointment->category_id,
        ]);
    }

    public function update(\PDO $db): bool {
        $query = 'UPDATE appointments
                  SET date = :date, category_id = :category_id
                  WHERE id = :id';
        $statement = $db->prepare($query);

        return $statement->execute([
            ':id' => $this->id,
            ':date' => $this->date,
            ':category_id' => $this->category_id
        ]);
    }

    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM appointments
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }
}