<?php

namespace App\Models;

class Budget
{
    private $id;
    private $budget_name;
    private $initAmount;

    // Constructor
    public function __construct($id, $budget_name, $initAmount)
    {
        $this->id = $id;
        $this->budget_name = $budget_name;
        $this->initAmount = $initAmount;
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

    public function getBudgetName()
    {
        return $this->budget_name;
    }

    public function setBudgetName($budget_name)
    {
        $this->budget_name = $budget_name;
    }

    public function getInitAmount()
    {
        return $this->initAmount;
    }

    public function setInitAmount($initAmount)
    {
        $this->initAmount = $initAmount;
    }

    // Print Table Row
    public function PrintTable($controllerPath)
    {
        echo <<<html
            <tr>
                <td>{$this->getId()}</td>
                <td>{$this->getBudgetName()}</td>
                <td>{$this->getInitAmount()}</td>
                <td>
                    <form action="{$controllerPath}" method="POST">
                        <input type="hidden" name="budget_id" value="{$this->getId()}">
                        <button type="submit" class="notion-button">edit</button>
                    </form>
                </td>
            </tr>
        html;
    }
}
