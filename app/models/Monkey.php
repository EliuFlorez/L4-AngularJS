<?php

class Monkey extends \Eloquent {

    protected $table = "monkeys";

	protected $fillable = ["name", "email", "username"];
}