<?php

namespace App\Models;

class Transaction
{
    private $id;
    private $date;
    private $amount;
    private $type;
    private $notes;
    private $category;
    private $finances;

    // Constructor
    public function __construct($id, $date, $amount, $type, $notes, $category, $finances)
    {
        $this->id = $id;
        $this->date = $date;
        $this->amount = $amount;
        $this->type = $type;
        $this->notes = $notes;
        $this->category = $category;
        $this->finances = $finances;
    }

    // Getters and Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getFinances()
    {
        return $this->finances;
    }

    public function setFinances($finances)
    {
        $this->finances = $finances;
    }

    // Function

    public function PrintTable($controllerPath)
    {
        echo <<<html
            <tr>
                <td>
                    {$this->getDate()}
                </td>
                <td>
                    {$this->getNotes()}
                </td>
                <td>
                    {$this->getType()}
                </td>
                <td>
                    {$this->getCategory()}
                </td>
                <td>
                    {$this->getAmount()}
                </td>
                <td>
                    {$this->getFinances()}
                </td>
                <td>
                    <form action="{$controllerPath}" method="POST">
                        <input type="hidden" name="transaction_id" value="{$this->getId()}">
                        <button type="submit" class="notion-button">edit</button>
                    </form>
                </td>
            </tr>
        html;
    }
}
