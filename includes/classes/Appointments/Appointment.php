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
}