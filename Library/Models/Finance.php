<?php

namespace App\Models;

class Finance
{
    private $id;
    private $service_name;
    private $initAmount;

    // Constructor
    public function __construct($id, $service_name, $initAmount)
    {
        $this->id = $id;
        $this->service_name = $service_name;
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

    public function getServiceName()
    {
        return $this->service_name;
    }

    public function setServiceName($service_name)
    {
        $this->service_name = $service_name;
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
                <td>{$this->getServiceName()}</td>
                <td>{$this->getInitAmount()}</td>
                <td>
                    <form action="{$controllerPath}" method="POST">
                        <input type="hidden" name="finance_id" value="{$this->getId()}">
                        <button type="submit" class="notion-button">edit</button>
                    </form>
                </td>
            </tr>
        html;
    }
}
